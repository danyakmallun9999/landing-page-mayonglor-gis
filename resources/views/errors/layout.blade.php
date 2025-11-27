<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title') - Desa Mayong Lor</title>
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600,700" rel="stylesheet" />
    
    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="antialiased font-sans text-slate-800 bg-slate-50">
    <div class="min-h-screen flex items-center justify-center p-6">
        <div class="max-w-lg w-full text-center">
            <div class="mb-8 flex justify-center">
                <div class="h-24 w-24 rounded-3xl bg-white shadow-xl shadow-blue-900/5 flex items-center justify-center text-4xl text-blue-600">
                    @yield('icon')
                </div>
            </div>
            
            <p class="text-sm font-bold uppercase tracking-[0.3em] text-blue-600 mb-4">@yield('code')</p>
            <h1 class="text-4xl font-bold text-slate-900 mb-4">@yield('message')</h1>
            <p class="text-lg text-slate-600 mb-10">@yield('description')</p>
            
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{ url('/') }}" class="inline-flex items-center justify-center gap-2 rounded-xl bg-blue-600 px-6 py-3 text-sm font-semibold text-white shadow-lg shadow-blue-600/20 hover:bg-blue-500 hover:shadow-blue-600/30 transition">
                    <i class="fa-solid fa-house"></i>
                    Kembali ke Beranda
                </a>
                @yield('actions')
            </div>

            <div class="mt-12 pt-8 border-t border-slate-200">
                <p class="text-xs text-slate-400">
                    &copy; {{ date('Y') }} Pemerintah Desa Mayong Lor. Sistem Informasi Geografis.
                </p>
            </div>
        </div>
    </div>
</body>
</html>
