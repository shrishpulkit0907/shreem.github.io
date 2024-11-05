@extends('frontend.layouts.app')
@section('title', 'Benex')
@section('maincontent')
  <!-- hero -->
  <div class="col-12 hero woodbriquettes">
    <div class="container col-xxl-12 px-4 py-5">
        <div class="row flex-lg-row align-items-center g-5 py-5">
            <div class="col-lg-6">
                <div class="caption w-20">
                    <h1 class="display-5 fw-bold lh-1 mb-3 text-white">Products</h1>
                    {{-- <h2 class="display-6 fw-bold lh-1 mb-3 text-white">BENEX - YOUR RELIABLE FUEL SUPPLIER</h2> --}}
                </div>
            </div>
        </div>
    </div>
</div>
<!-- hero -->


    <section style="padding-top: 20px;padding-bottom:20px;">
        <div class="container">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
                <h2 class="heading3">Our Offered Products</h2>
            </div>
            <div class="clearfix">&nbsp;</div>
            @include('components.carousel.index')
        </div>
    </section>
    <section>
        <div class="col-12">
            <div class="container">
                <div class="col-md-12 mt-4 mb-5">
                    <h5 class="heading2">Why Choose Us?</h5>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 mb-4">
                        <div class="serviceitemi"
                            style="background-image: url({{ asset('images/requirement.jpg') }});background-size:cover;">
                            <div class="content">
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                    <h2 class="heading2box text-white">#1</h2>
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mb-3">
                                        <h2 class="heading3 text-white">We Find</h2>
                                    </div>
                                    <hr class="bg-white">
                                    <div class="wwedtext"><p class="text-white">Together, we assess your needs, quality requirements, quantities, and timelines. We analyze the market situation to provide the best options.</p></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 mb-4">
                        <div class="serviceitemi"
                            style="background-image: url({{ asset('images/offer.jpg') }});background-size:cover;">
                            <div class="content">
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                    <h2 class="heading2box text-white">#2</h2>
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mb-3">
                                        <h2 class="heading3 text-white">We Offer</h2>
                                    </div>
                                    <hr class="bg-white">
                                    <div class="wwedtext"><p class="text-white">We present you with a variety of fuel product options. If it's not available immediately, we will find the most suitable solution for you.</p></div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 mb-4">
                        <div class="serviceitemi"
                            style="background-image: url({{ asset('images/delivery.jpg') }});background-size:cover;">
                            <div class="content">
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                    <h2 class="heading2box text-white">#3</h2>
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mb-3">
                                        <h2 class="heading3 text-white">We Deliver</h2>
                                    </div>
                                    <hr class="bg-white">
                                    <div class="wwedtext"><p class="text-white">We arrange the logistics according to your chosen delivery method and ensure timely delivery.</p></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 mb-4">
                        <div class="serviceitemi"
                            style="background-image: url({{ asset('images/gurantee.jpg') }});background-size:cover;">
                            <div class="content">
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                    <h2 class="heading2box text-white">#4</h2>
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mb-3">
                                        <h2 class="heading3 text-white">We Guarantee</h2>
                                    </div>
                                    <hr class="bg-white">
                                    <div class="wwedtext"><p class="text-white">We assume full responsibility for all delivery risks, giving you peace of mind with a trusted fuel supplier.</p></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center my-5">
                    <a href="#" class="btn btn-block button">More About Our Services</a>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="row m-0">
            <div class="col-6 p-5" style="background:#ed6e00;">
                <h5 class="heading2white text-white">Which European Countries Do We Serve?</h5>
                <ul class="text-white mt-4 mx-0 p-0">
                    <li style="display: inline-block;background:#fff;color:#ed6e00;padding:7px 10px;margin:7px;font-size:24px;">Italy</li>
<li style="display: inline-block;background:#fff;color:#ed6e00;padding:7px 10px;margin:7px;font-size:24px;">Denmark</li>
<li style="display: inline-block;background:#fff;color:#ed6e00;padding:7px 10px;margin:7px;font-size:24px;">Belgium</li>
<li style="display: inline-block;background:#fff;color:#ed6e00;padding:7px 10px;margin:7px;font-size:24px;">Poland</li>
<li style="display: inline-block;background:#fff;color:#ed6e00;padding:7px 10px;margin:7px;font-size:24px;">Germany</li>
<li style="display: inline-block;background:#fff;color:#ed6e00;padding:7px 10px;margin:7px;font-size:24px;">France</li>
<li style="display: inline-block;background:#fff;color:#ed6e00;padding:7px 10px;margin:7px;font-size:24px;">Lithuania</li>
<li style="display: inline-block;background:#fff;color:#ed6e00;padding:7px 10px;margin:7px;font-size:24px;">Estonia</li>
<li style="display: inline-block;background:#fff;color:#ed6e00;padding:7px 10px;margin:7px;font-size:24px;">Latvia</li>
<li style="display: inline-block;background:#fff;color:#ed6e00;padding:7px 10px;margin:7px;font-size:24px;">Sweden</li>
<li style="display: inline-block;background:#fff;color:#ed6e00;padding:7px 10px;margin:7px;font-size:24px;">Austria</li>
<li style="display: inline-block;background:#fff;color:#ed6e00;padding:7px 10px;margin:7px;font-size:24px;">Holland</li>
<li style="display: inline-block;background:#fff;color:#ed6e00;padding:7px 10px;margin:7px;font-size:24px;">Ireland</li>
<li style="display: inline-block;background:#fff;color:#ed6e00;padding:7px 10px;margin:7px;font-size:24px;">Finland</li>
                </ul>
            </div>
            <div class="col-6 align-self-center"><img src="https://fuelman.eu/wp-content/uploads/2023/07/Repeat-Grid-3-e1688217898556.png" class="img-fluid"/></div>
        </div>
    </section>



@endsection
@push('script')
@endpush
