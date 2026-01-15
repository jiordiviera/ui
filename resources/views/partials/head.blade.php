<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- SEO Meta Tags -->
<title>PHP-UI - 50+ Beautiful Blade Components for Laravel | Open Source</title>
{{-- <title>{{ $title ?? config('app.name') }}</title> --}}
<meta name="description"
    content="Stop writing the same UI components over and over. PHP-UI provides 50+ beautifully crafted Blade components for Laravel. Copy, paste, and make them yours. No npm packages, no build complexity.">
<meta name="keywords"
    content="Laravel, Blade components, UI components, Tailwind CSS, Livewire, open source, PHP, web development">
<meta name="author" content="Jiordi Viera">
<meta name="robots" content="index, follow">

<!-- Open Graph / Facebook -->
<meta property="og:type" content="website">
<meta property="og:url" content="{{ url('/') }}">
<meta property="og:title" content="PHP-UI - 50+ Beautiful Blade Components for Laravel">
<meta property="og:description"
    content="Stop writing the same UI components over and over. PHP-UI provides 50+ beautifully crafted Blade components for Laravel. Copy, paste, and make them yours.">
<meta property="og:image" content="{{ url('/images/og-image.png') }}">
<meta property="og:site_name" content="PHP-UI">

<!-- Twitter -->
<meta property="twitter:card" content="summary_large_image">
<meta property="twitter:url" content="{{ url('/') }}">
<meta property="twitter:title" content="PHP-UI - 50+ Beautiful Blade Components for Laravel">
<meta property="twitter:description"
    content="Stop writing the same UI components over and over. PHP-UI provides 50+ beautifully crafted Blade components for Laravel. Copy, paste, and make them yours.">
<meta property="twitter:image" content="{{ url('/images/og-image.png') }}">
<meta property="twitter:creator" content="@jiordiviera">

<!-- Structured Data -->
<script type="application/ld+json">
    @verbatim
        {
            "@context": "https://schema.org",
            "@type": "SoftwareApplication",
            "name": "PHP-UI",
            "description": "50+ beautifully crafted Blade components for Laravel",
            "url": "{{ url('/') }}",
            "author": {
                "@type": "Person",
                "name": "Jiordi Viera",
                "url": "https://jiordiviera.me"
            },
            "license": "https://opensource.org/licenses/MIT",
            "programmingLanguage": "PHP",
            "applicationCategory": "DeveloperApplication",
            "operatingSystem": "Any",
            "offers": {
                "@type": "Offer",
                "price": "0",
                "priceCurrency": "USD"
            },
            "keywords": "Laravel, Blade, UI components, Tailwind CSS, Livewire, open source"
        }
    @endverbatim
    </script>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="preconnect" href="https://fonts.bunny.net">
<link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
<link
    href="https://fonts.googleapis.com/css2?family=Geist+Mono:wght@100..900&family=Fira+Code:wght@400;500&family=Space+Grotesk:wght@300..700&display=swap"
    rel="stylesheet">

<script>
    if (localStorage.getItem('darkMode') === 'true' || (!('darkMode' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
        document.documentElement.classList.add('dark');
    } else {
        document.documentElement.classList.remove('dark');
    }
</script>

@vite(['resources/css/app.css', 'resources/js/app.js'])
@livewireStyles()
