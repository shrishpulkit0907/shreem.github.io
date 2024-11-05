@extends('frontend.layouts.app')
@section('title', 'Benex')
@section('maincontent')


      <!-- hero -->
<div class="col-12 hero strategy">
    <div class="container col-xxl-12 px-4 py-5">
        <div class="row flex-lg-row align-items-center g-5 py-5">
            <div class="col-lg-6">
                <div class="caption w-20">
                    <h1 class="display-5 fw-bold lh-1 mb-3 text-white">CONTACT US</h1>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- hero -->

    <div class="container container2 py-5">
        <div class="row">
            <div class="col-md-3 p-5 d-none">
                <h5 class="heading1">Commodities</h5>
                <div class="col-12">
                    <div class="sidenav">
                        <ul>
                            <li><a
                                    href="https://beriumgroup.com/global-commodity-trading-company/metals-and-mineral-resources/">Metals
                                    &amp; Mineral Resources</a></li>
                            <li><a
                                    href="https://beriumgroup.com/global-commodity-trading-company/agricultural-commodity-trading-company/">Agricultural
                                    Commodities</a></li>
                            <li><a href="https://beriumgroup.com/global-commodity-trading-company/energy-resources/">Energy
                                    Resources</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md">
                {{-- <img src="{{ asset('images/contacth.jpg') }}" class="img-fluid mb-5"/> --}}
                <div class="col-md mx-3">
                    <h5 class="heading2">Reach Out to BENEX</h5>
                    <ul>
                        <li><b>Email:</b> <a href="mailto:info@annlis.com">info@annlis.com</a> </li>
                        <li><b>Address:</b> Av. des Arts 53, 1000 Bruxelles, Belgium</li>
                        <!--<li><b>Address:</b> 13028 SW 108TH STREET CIRCLE, MIAMI, FL, 33186</li>-->
                    </ul>

                </div>
            </div>
        </div>
    </div>
@endsection
@push('script')
@endpush
