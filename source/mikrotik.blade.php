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
                <img src="{{ url('assets/img/mikrotik-reseller.svg') }}" class="img-fluid" alt="MikroTik Reseller Logo">
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
            @foreach ($page->mikrotik as $name => $meta)
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
                        <p class="card-text">{!! $meta['title'] !!}</p>
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
