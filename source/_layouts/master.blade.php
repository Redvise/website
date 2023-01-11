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

        <!-- 3CX Live Chat -->
        <call-us phonesystem-url="https://iticparis.on3cx.fr" style="position:fixed;font-size:16px;line-height:17px;z-index:99999;--call-us-main-accent-color:#d62f03;--call-us-main-background-color:#FFFFFF;--call-us-plate-background-color:#373737;--call-us-plate-font-color:#E6E6E6;--call-us-main-font-color:#292929;--call-us-agent-bubble-color:#29292910;right: 20px; bottom: 20px;" id="wp-live-chat-by-3CX" minimized="true" animation-style="noanimation" party="LiveChat640153" minimized-style="bubbleright" allow-call="false" allow-video="false" allow-soundnotifications="true" enable-mute="true" enable-onmobile="true" offline-enabled="true" enable="true" ignore-queueownership="false" authentication="both" operator-name="Service client" show-operator-actual-name="true" aknowledge-received="true" operator-icon="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4KPHN2ZyBpZD0iTGF5ZXJfMSIgZGF0YS1uYW1lPSJMYXllciAxIiB2aWV3Qm94PSIwIDAgMjAwIDIwMCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczpieD0iaHR0cHM6Ly9ib3h5LXN2Zy5jb20iPgogIDxkZWZzPgogICAgPHN0eWxlPi5jbHMtMXtmaWxsOnJlZDt9LmNscy0ye2ZpbGw6I2ZmZTZlNjtmaWxsLXJ1bGU6ZXZlbm9kZDt9PC9zdHlsZT4KICA8L2RlZnM+CiAgPHJlY3Qgd2lkdGg9IjIwMCIgaGVpZ2h0PSIyMDAiIHN0eWxlPSJmaWxsOiByZ2IoMjU1LCAyNTUsIDI1NSk7IHN0cm9rZTogcmdiKDI1NSwgMjU1LCAyNTUpOyIvPgogIDxnIGlkPSJQaWN0byIgdHJhbnNmb3JtPSJtYXRyaXgoMC41MzUyNzcsIDAsIDAsIDAuNTM1MzUyLCAtMjIuNDEyNDc3LCAzMC4wMDAwNTUpIiBieDpvcmlnaW49Ii0wLjAwMDEzNSAwIj4KICAgIDxwYXRoIGNsYXNzPSJjbHMtMiIgZD0iTTIzOC4zMiwyMjEuMTNoMjVsLTExLjA4LTE0LjM0aC0yNWwxMS4wOSwxNC4zNFptLTIxLTU5LjQ0TDE3Ni42OCwxMDkuMmg2OC45NGEyLjE1LDIuMTUsMCwwLDAsMS41My0uNjYsMi4yLDIuMiwwLDAsMCwuNjctMS41NGMwLS44NSwwLTEuMjgsMC0yLjkyYTIuMjcsMi4yNywwLDAsMC0uNjQtMS4yMiwyLjE1LDIuMTUsMCwwLDAtMS41My0uNjZIMTU4Ljk0djQ2LjE4aC00NS4xVjU3LjFIMjQ1LjYyYTQ3LjM3LDQ3LjM3LDAsMCwxLDQ3LjI5LDQ2LjM5YzAsLjgxLDAsMi40MiwwLDMuNTFhNDcuNDcsNDcuNDcsMCwwLDEtMjcuNzEsNDMuMDVsNC45Myw2LjM3YzE5Ljg4LTkuNDIsMzEuMjQtMzAuOCwzMC4zNC01Mi43OCwwLS41NCwwLTEuMDktLjA1LTEuNjNhNTkuNiw1OS42LDAsMCwwLTMuODYtMTcuOTNjLTguNTUtMjIuMjEtMjguMS0zNC4yNy01MS42NC0zNC4yN0gxMTQuMjJWNC43MUgyNDQuOTNjMzkuNzgsMCw3My45LDE5LjQ4LDkwLjc2LDU2YTEwNy4zNCwxMDcuMzQsMCwwLDEsOS42NCw0MC4wNWMuMDgsMS43LDAsLjc3LjA2LDIuMzEsMSwzNi0xNi4yNCw3MS4yLTQ3LjA2LDg5Ljc2bDU2Ljc5LDczLjM5SDIxNi4zTDEzNS40LDE2MS42OVoiIHRyYW5zZm9ybT0idHJhbnNsYXRlKC01Ljc5IC00LjcxKSIvPgogICAgPHBhdGggY2xhc3M9ImNscy0xIiBkPSJNMjM0LjI5LDIyOS4zM0gyODBsLTY5LjE5LTg5LjQyLTE3LjQyLTIyLjVoNTIuMjJBMTAuNDgsMTAuNDgsMCwwLDAsMjU2LDEwN2MwLS4zMiwwLTMuMjUsMC0zLjU2QTEwLjUsMTAuNSwwLDAsMCwyNDUuNjIsOTRIMTUwLjc0djQ2LjE5SDEyMlY2NS4zSDI0NS42MmEzOS4xOCwzOS4xOCwwLDAsMSwzOS4wOSwzOC4zNGMwLC4yNSwwLDMuMTEsMCwzLjM2YTM5LjIyLDM5LjIyLDAsMCwxLTMzLjI3LDM4LjY3bDE2LDIwLjY3YzI3LjU0LTkuMzgsNDIuMzMtMzYuNTIsNDEuMjMtNjMsMC0uNCwwLTEuMzctLjA2LTEuNzdDMzA2LjgyLDcxLDI4NC41LDQxLjYxLDI0NC45Myw0MS42MUgxMjIuNDJWMTIuOTFIMjQ0LjkzYzU4LjM5LDAsOTAuMiw0My40NSw5Mi4yLDg4LjIyLDAsLjU0LjA1LDEuNjUuMDYsMi4xOCwxLDM1LjMyLTE3LjE0LDcxLjE2LTUxLjMxLDg2Ljg1bDM0LjY1LDQ0Ljc3TDMzOC40LDI1OEgyMjAuMzNsLTIyLjIxLTI4LjctMjMuNzktMzAuNzQtMS41OS0yLjA1LTMuMi00LjE0LTE3LjQyLTIyLjUxaDcwLjQ2bDIyLjc1LDI4LjdIMjEwLjUxWiIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoLTUuNzkgLTQuNzEpIi8+CiAgPC9nPgo8L3N2Zz4=" gdpr-enabled="true" message-userinfo-format="both" message-dateformat="both" start-chat-button-text="Discuter" lang="browser" button-icon-type="default" greeting-visibility="none" greeting-offline-visibility="none" chat-delay="500" enable-direct-call="false" enable-ga="false"></call-us>

        <!-- Scripts -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
        <script defer src="https://downloads-global.3cx.com/downloads/livechatandtalk/v1/callus.js" id="tcx-callus-js" charset="utf-8"></script>
        @stack('scripts')
    </body>
</html>
