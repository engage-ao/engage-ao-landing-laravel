<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta name="author" content="{{ config('app.name', 'ENGAGE') }}">
  <meta name="description" content="{{ config('app.name', 'ENGAGE') }} - Transformando ideias em resultados reais">
  <meta name="keywords"
    content="ENGAGE, engajamento, criadores de conteúdo, marcas, digital, influenciadores, marketing de conteúdo, marketing de influenciadores, conexão, resultados reais, ROI, monetização, campanha, conteúdo autêntico, parceria autêntica, parceria estrategica" />
  <meta name="robots" content="index, follow" />
  <meta name="canonical" content="{{ url()->current() }}" />
  <link rel="manifest" href="/manifest.json" />
  <meta content="ENGAGE" property="og:site_name" />
  <meta property="og:url" content="{{ url()->current() }}" />
  <meta property="og:type" content="website" />
  <meta property="og:title" content="{{ config('app.name', 'ENGAGE') }} - Transformando ideias em resultados reais" />
  <meta property="og:description"
    content="{{ config('app.name', 'ENGAGE') }} - Transformando ideias em resultados reais" />
  <meta property="og:image" content="{{ asset('assets/ChatGPT Image 17_04_2025, 10_26_08.png') }}" />

  <title>{{ config('app.name', 'ENGAGE') }}</title>

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Kufam:ital,wght@0,400..900;1,400..900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap"
    rel="stylesheet">

  <script src="https://cdn.jsdelivr.net/npm/intl-tel-input@25.3.1/build/js/intlTelInput.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/intl-tel-input@25.3.1/build/css/intlTelInput.min.css" rel="stylesheet">

  <!-- Styles / Scripts -->
  @vite(['resources/css/app.css', 'resources/js/app.js'])
  @if (app()->environment('production'))
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-TWH9PBG6L0"></script>
    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'G-TWH9PBG6L0');
    </script>
  @endif
</head>

<body class="bg-[rgba(254,248,255,1)]">
  <div class="w-full max-md:max-w-full">
    {{ $slot }}
  </div>
</body>

</html>