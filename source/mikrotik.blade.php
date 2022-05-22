@extends('_layouts.master')

@section('body')
    <!-- Navbar -->
    <nav class="navbar px-5">
        <a class="navbar-brand" href="/">
            <img src="{{ url('assets/img/picto.svg') }}" alt="Redvise Picto">
        </a>
    </nav>
    <!-- /Navbar -->

    <div class="container">
        <div class="row mb-5">
            <div class="col-md-8 offset-md-2">
                <img src="{{ url('assets/img/reseller.svg') }}" class="img-fluid" alt="MikroTik Reseller Logo">
            </div>
        </div>

        <div class="row mb-5">
            <div class="col-md-10 offset-md-1 text-center typold" style="line-height: 1.3rem">
                <p><b>MikroTik</b> is a Latvian company which was founded in 1996 to develop routers and wireless ISP systems in the most user friendly way, up to carrier grade routing and network management solutions.</p>
                <p>Their products are declined in 2 main categories: <b>RouterOS</b> a routing operating system providing extensive stability, controls, and flexibility for all kinds of data interfaces, originally made for x86 systems, and <b>RouterBOARD</b> a hardware line of more than 160 different products integrating <b>RouterOS</b>.</p>
                <p>We can't list the whole range available, instead here is a list of the products we currently offer. Don't hesitate to contact us (see homepage) for particular needs, for instance if you want them configured, CAPsMAN enabled, or even without any configuration.</p>
            </div>
        </div>

        <div class="row">
            <div class="card-columns text-center">
                <div class="card">
                    <img src="https://i.mt.lv/cdn/rb_images/1283_m.png" class="card-img-top border-bottom" alt="hAP mini">
                    <div class="card-body">
                        <h5 class="card-title">hAP mini</h5>
                        <p class="card-text">Tiny size home 2.4Ghz AP with three LAN ports.</p>
                        <p class="card-text small"><a href="https://mikrotik.com/product/RB931-2nD" target="_blank">See more…</a></p>
                    </div>
                </div>
                <div class="card">
                    <img src="https://i.mt.lv/cdn/rb_images/1007_m.png" class="card-img-top border-bottom" alt="hAP lite">
                    <div class="card-body">
                        <h5 class="card-title">hAP lite</h5>
                        <p class="card-text">Low cost home wireless AP with dual chain 2.4GHz wireless, powered by USB.</p>
                        <p class="card-text small"><a href="https://mikrotik.com/product/RB941-2nD" target="_blank">See more…</a></p>
                    </div>
                </div>
                <div class="card">
                    <img src="https://i.mt.lv/cdn/rb_images/1766_m.png" class="card-img-top border-bottom" alt="hAP lite TC">
                    <div class="card-body">
                        <h5 class="card-title">hAP lite TC</h5>
                        <p class="card-text">Small home AP with four ethernet ports and a colorful enclosure.</p>
                        <p class="card-text small"><a href="https://mikrotik.com/product/RB931-2nD-TC" target="_blank">See more…</a></p>
                    </div>
                </div>
                <div class="card">
                    <img src="https://i.mt.lv/cdn/rb_images/1059_m.png" class="card-img-top border-bottom" alt="hAP">
                    <div class="card-body">
                        <h5 class="card-title">hAP</h5>
                        <p class="card-text">2.4GHz AP, Five Ethernet ports, PoE-out on port 5, USB for 3G/4G support.</p>
                        <p class="card-text small"><a href="https://mikrotik.com/product/RB951Ui-2nD" target="_blank">See more…</a></p>
                    </div>
                </div>
                <div class="card">
                    <img src="https://i.mt.lv/cdn/rb_images/1413_m.png" class="card-img-top border-bottom" alt="hAP ac lite">
                    <div class="card-body">
                        <h5 class="card-title">hAP ac lite</h5>
                        <p class="card-text">Dual-Concurrent 2.4/5GHz AP, 802.11ac, Five Ethernet ports, PoE-out on port 5, USB for 3G/4G support.</p>
                        <p class="card-text small"><a href="https://mikrotik.com/product/RB952Ui-5ac2nD" target="_blank">See more…</a></p>
                    </div>
                </div>
                <div class="card">
                    <img src="https://i.mt.lv/cdn/rb_images/1230_m.png" class="card-img-top border-bottom" alt="hAP ac lite TC">
                    <div class="card-body">
                        <h5 class="card-title">hAP ac lite</h5>
                        <p class="card-text">Dual-Concurrent 2.4/5GHz AP, 802.11ac, Five Ethernet ports, PoE-out on port 5, USB for 3G/4G support, universal tower case.</p>
                        <p class="card-text small"><a href="https://mikrotik.com/product/RB952Ui-5ac2nD-TC" target="_blank">See more…</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
