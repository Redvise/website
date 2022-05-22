<!doctype html>
<html lang="en" prefix="og: http://ogp.me/ns#">
    <head>
        <title>{{ $page->meta['company'] }}</title>

        <!-- Meta -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Open-Graph -->
        <meta property="og:title" content="{{ $page->meta['name'] }}" />
        <meta property="og:description" content="{{ $page->meta['description'] }}" />
        <meta property="og:type" content="website" />
        <meta property="og:url" content="{{ url('/') }}" />
        <meta property="og:locale" content="en_GB" />
        <meta property="og:image" content="{{ url('assets/img/logo_og.png') }}" />
        <meta property="og:image:secure_url" content="{{ url('/asset/img/logo_og.png') }}" />
        <meta property="og:image:alt" content="Redvise Logo" />
        <meta property="og:image:type" content="image/png" />
        <meta property="og:image:width" content="1200" />
        <meta property="og:image:height" content="630" />
        <meta property="og:image" content="{{ url('/asset/img/logo_og.jpg') }}" />
        <meta property="og:image:secure_url" content="{{ url('/asset/img/logo_og.jpg') }}" />
        <meta property="og:image:alt" content="Redvise Logo" />
        <meta property="og:image:type" content="image/jpeg" />
        <meta property="og:image:width" content="1200" />
        <meta property="og:image:height" content="630" />

        <!-- Favicons -->
        <link rel="apple-touch-icon" sizes="180x180" href="{{ url('assets/favicons/apple-touch-icon.png') }}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{ url('assets/favicons/favicon-32x32.png') }}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{ url('assets/favicons/favicon-16x16.png') }}">
        <link rel="manifest" href="{{ url('assets/favicons/site.webmanifest') }}">
        <link rel="mask-icon" href="{{ url('assets/favicons/safari-pinned-tab.svg" color="#ff0000') }}">
        <link rel="shortcut icon" href="{{ url('assets/favicons/favicon.ico') }}">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-config" content="{{ url('assets/favicons/browserconfig.xml') }}">
        <meta name="theme-color" content="#ffffff">

        <!-- Styles -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ mix('css/custom.css', 'assets/build') }}">
        @stack('styles')
    </head>
    <body>
        @yield('body')

        <!-- Scripts -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
        @stack('scripts')
    </body>
</html>
