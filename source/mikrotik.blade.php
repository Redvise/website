---
devices:
  hAP mini:
    img: https://i.mt.lv/cdn/rb_images/1283_m.png
    url: https://mikrotik.com/product/RB931-2nD
    desc: Tiny size home 2.4Ghz AP with three LAN ports.
    labels:
      - 2.4GHz
      - 100Mbps
  hAP lite:
    img: https://i.mt.lv/cdn/rb_images/1007_m.png
    url: https://mikrotik.com/product/RB941-2nD
    desc: Low cost home wireless AP with dual chain 2.4GHz wireless, powered by USB.
    labels:
      - 2.4GHz
      - 100Mbps
  hAP lite TC:
    img: https://i.mt.lv/cdn/rb_images/1766_m.png
    url: https://mikrotik.com/product/RB931-2nD-TC
    desc: Small home AP with four ethernet ports and a colorful enclosure.
    labels:
      - 2.4GHz
      - 100Mbps
  hAP:
    img: https://i.mt.lv/cdn/rb_images/1059_m.png
    url: https://mikrotik.com/product/RB951Ui-2nD
    desc: 2.4GHz AP, Five Ethernet ports, PoE-out on port 5, USB for 3G/4G support.
    labels:
      - 2.4GHz
      - PoE-in/out
      - 100Mbps
  hAP ac lite:
    img: https://i.mt.lv/cdn/rb_images/1413_m.png
    url: https://mikrotik.com/product/RB952Ui-5ac2nD
    desc: Dual-Concurrent 2.4/5GHz AP, 802.11ac, Five Ethernet ports, PoE-out on port 5, USB for 3G/4G support.
    labels:
      - 2.4/5GHz
      - PoE-in/out
      - 100Mbps
  hAP ac lite TC:
    img: https://i.mt.lv/cdn/rb_images/1230_m.png
    url: https://mikrotik.com/product/RB952Ui-5ac2nD-TC
    desc: Dual-Concurrent 2.4/5GHz AP, 802.11ac, Five Ethernet ports, PoE-out on port 5, USB for 3G/4G support, universal tower case.
    labels:
      - 2.4/5GHz
      - PoE-in/out
      - 100Mbps

labels:
  2.4GHz: light
  5GHz: primary
  2.4/5GHz: success
  PoE-in: warning
  PoE-out: warning
  PoE-in/out: warning
  100Mbps: secondary
  1Gbps: info
---

@extends('_layouts.master')

@section('body')
    <!-- Navbar -->
    <nav class="navbar px-md-5">
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

        <div class="row row-cols-1 row-cols-md-3 row-cols-lg-4">
            @foreach ($page->devices as $name => $meta)
            <div class="col mb-3">
                <div class="card h-100 mt-product">
                    <img src="{{ $meta['img'] }}" class="card-img-top border-bottom" alt="{{ $name }}">
                    <div class="card-body pt-0">
                        <div class="my-2">
                            @foreach ($meta['labels'] as $label)
                            <span class="badge badge-pill badge-{{ $page->labels[$label] }}">{{ $label }}</span>
                            @endforeach
                        </div>
                        <h5 class="card-title">{{ $name }}</h5>
                        <p class="card-text">{{ $meta['desc'] }}</p>
                    </div>
                    <footer class="px-3 py-2 text-right">
                        <small><a href="{{ $meta['url'] }}" target="_blank">See more…</a></small>
                    </footer>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection
