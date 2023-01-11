@extends('_layouts.master')

@section('body')
    <!-- Navbar -->
    <nav class="navbar px-md-5">
        <a class="navbar-brand" href="#">&nbsp;</a>

        <div class="navbar-nav">
            <a class="nav-item nav-link" href="{{ url('mikrotik') }}">
                <img src="{{ url('assets/img/mikrotik-reseller.svg') }}" alt="MikroTik Reseller logo">
            </a>
        </div>
    </nav>
    <!-- /Navbar -->

    <div class="container">
        <div class="col-md-8 offset-md-2">
            <div class="row mb-5">
                <div class="col">
                    <div class="mx-auto" style="width: 40%">
                        <img src="{{ url('assets/img/picto.svg') }}" class="img-fluid" alt="Redvise Ltd. logo">
                    </div>
                    <div class="text-center mt-2">
                        <h1 class="conthrax d-sm-none" style="font-size: 10vw;"><span style="color: red">Red</span>vise</h1>
                        <h1 class="conthrax d-none d-sm-block" style="font-size: 340%"><span style="color: red">Red</span>vise</h1>

                        <h2 class="typold d-sm-none" style="font-size: 2.45vw; color: var(--gray-dark);">IT consulting, development and embedded systems</h2>
                        <h2 class="typold d-none d-sm-block" style="font-size: 83%; color: var(--gray-dark);">IT consulting, development and embedded systems</h2>
                    </div>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-12 col-sm text-center text-sm-left">
                    <p class="typold" style="line-height: 1.3rem">
                        71–75 Shelton Street<br>
                        Covent Garden<br>
                        London, WC2H 9JQ<br>
                        United-Kingdom 🇬🇧<br>
                        <a href="https://goo.gl/maps/Hwv43fr36PoM6iau9" target="_blank">Map</a>
                    </p>
                </div>
                <div class="col-12 col-sm text-center text-sm-right">
                    <p class="text-monospace" style="line-height: 1.3rem">
                        <a href="tel:+442034455770">+44 203 445577 0</a><br>
                        <a href="mailto:contact@redvi.se">contact@redvi.se</a><br>
                        GPG: <a href="https://keys.openpgp.org/vks/v1/by-fingerprint/ABB4626817F3700FDA2194F2BD57AA5EDEBEE95C">0xDEBEE95C</a>
                    </p>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-12 col-sm text-center text-sm-left">
                    <p class="typold" style="line-height: 1.3rem">
                        39 rue de la Gare de Reuilly<br>
                        75012, Paris<br>
                        France 🇫🇷<br>
                        <a href="https://goo.gl/maps/Juo5nzvpv5Rzenim7" target="_blank">Plan</a>
                    </p>
                </div>

                <div class="col-12 col-sm text-center text-sm-right">
                    <p class="typold" style="line-height: 1.3rem">
                        À Olympic Palace Hotel<br>
                        15 avenue de l'amitié<br>
                        Centre-Ville, Brazzaville<br>
                        République du Congo 🇨🇬<br>
                        <a href="https://goo.gl/maps/zgWSSG39FSf3w1kJ7" target="_blank">Plan</a>
                    </p>
                </div>
            </div>

            <!-- <div class="row mb-3">
                <div class="col-12 col-sm text-center text-sm-left">
                    <p class="typold" style="line-height: 1.3rem">
                        À Olympic Palace Hotel<br>
                        15 avenue de l'amitié<br>
                        Centre-Ville, Brazzaville<br>
                        République du Congo<br>
                        <a href="https://goo.gl/maps/zgWSSG39FSf3w1kJ7" target="_blank">Plan</a>
                    </p>
                </div>
            </div> -->
        </div>
    </div>
@endsection
