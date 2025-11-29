<script>
    // Load geometry from sessionStorage if available
    document.addEventListener('DOMContentLoaded', function() {
        // Load geometry
        const savedGeometry = sessionStorage.getItem('newFeatureGeometry');
        if (savedGeometry) {
            try {
                const geometry = JSON.parse(savedGeometry);
                const geometryInput = document.querySelector('input[name="geometry"]');
                if (geometryInput) {
                    geometryInput.value = savedGeometry;
                    geometryInput.dispatchEvent(new Event('input', { bubbles: true }));
                    
                    setTimeout(() => {
                        if (window.Alpine) {
                            const drawer = document.querySelector('[x-data*="mapDrawer"]');
                            if (drawer) {
                                Alpine.nextTick(() => {
                                    const data = Alpine.$data(drawer);
                                    if (data && data.loadExistingGeometry) {
                                        data.loadExistingGeometry(geometry);
                                    }
                                });
                            }
                        }
                    }, 100);
                }
                
                const latInput = document.querySelector('input[name="latitude"]');
                const lngInput = document.querySelector('input[name="longitude"]');
                if (geometry.type === 'Point' && latInput && lngInput) {
                    const [lng, lat] = geometry.coordinates;
                    latInput.value = lat.toFixed(6);
                    lngInput.value = lng.toFixed(6);
                    latInput.dispatchEvent(new Event('input', { bubbles: true }));
                    lngInput.dispatchEvent(new Event('input', { bubbles: true }));
                }
                sessionStorage.removeItem('newFeatureGeometry');
            } catch (e) {
                console.error('Error loading geometry:', e);
            }
        }

        // Load properties (name, description, etc)
        const savedProperties = sessionStorage.getItem('newFeatureProperties');
        if (savedProperties) {
            try {
                const properties = JSON.parse(savedProperties);
                
                // Map properties to input names
                const fieldMapping = {
                    'name': ['name', 'nama', 'title', 'label'],
                    'description': ['description', 'desc', 'deskripsi', 'keterangan'],
                    'category_id': ['category_id', 'category', 'kategori'] // Might need ID lookup
                };

                Object.entries(fieldMapping).forEach(([inputName, propertyKeys]) => {
                    const input = document.querySelector(`[name="${inputName}"]`);
                    if (input) {
                        // Find the first matching property key that exists in the properties object
                        const foundKey = propertyKeys.find(key => properties[key] !== undefined && properties[key] !== null);
                        if (foundKey) {
                            const value = properties[foundKey];
                            if (input.tagName === 'SELECT') {
                                // Try exact value match
                                let matched = false;
                                for (let i = 0; i < input.options.length; i++) {
                                    if (input.options[i].value == value) {
                                        input.value = value;
                                        matched = true;
                                        break;
                                    }
                                }
                                // If not matched, try text match (case-insensitive)
                                if (!matched) {
                                    const lowerValue = String(value).toLowerCase();
                                    for (let i = 0; i < input.options.length; i++) {
                                        if (input.options[i].text.toLowerCase() === lowerValue) {
                                            input.value = input.options[i].value;
                                            break;
                                        }
                                    }
                                }
                            } else {
                                input.value = value;
                            }
                            input.dispatchEvent(new Event('input', { bubbles: true }));
                        }
                    }
                });

                sessionStorage.removeItem('newFeatureProperties');
            } catch (e) {
                console.error('Error loading properties:', e);
            }
        }
    });
</script>

