<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? 'Page Title' }}</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@200;400;600;700;900&family=Pacifico&family=Poppins:wght@400;500;600&family=Roboto+Condensed:wght@300&family=Roboto:wght@100&display=swap"
        rel="stylesheet">
    @vite('resources/css/app.css')
</head>

<body class="font-poppins">
    <livewire:components.navbar />
    <div class="snap-y snap-mandatory h-screen w-screen overflow-scroll">
        {{ $slot }}
    </div>
</body>

@stack('script')

</html>