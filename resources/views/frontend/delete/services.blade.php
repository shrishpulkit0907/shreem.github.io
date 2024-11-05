@extends('frontend.layouts.app')
@section('title', 'Benex')
@section('maincontent')
<!-- hero -->
<div class="col-12 hero strategy">
    <div class="container col-xxl-12 px-4 py-5">
        <div class="row flex-lg-row align-items-center g-5 py-5">
            <div class="col-lg-6">
                <div class="caption">
                    <h1 class="display-5 fw-bold lh-1 mb-3 text-white">WE FIND, OFFER, AND DELIVER</h1>
                <h2 class="display-6 fw-bold lh-1 mb-3 text-white">BENEX - YOUR RELIABLE FUEL SUPPLIER</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- hero -->


<div class="col-md-12 my-4">
    <div class="container text-center">
        <h5 class="heading2center">Fuel Product Selection and Sourcing</h5>
    </div>
</div>

    {{-- services --}}
    <section class="servicesp">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 mb-4">
                    <div class="serviceitemi"
                        style="background-image: url({{ asset('images/understand.jpg') }});background-size:cover;">
                        <div class="content">
                            <div class="title">Understanding Your Needs</div>
                            <div class="desc">At Benex, we prioritize building quality, long-term partnerships with our clients. Before crafting the perfect proposal, we make sure to thoroughly assess your unique requirements—whether it's the type of fuel, the required quality, annual delivery volumes, timelines, packaging preferences, or warehouse locations. We ensure that every special request is fully understood.</div>
                            {{-- <div class="btn"><a href="#" class="btn btn-primary btn3">Read More</a></div> --}}
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 mb-4">
                    <div class="serviceitemi"
                        style="background-image: url({{ asset('images/situation.jpg') }});background-size:cover;">
                        <div class="content">
                            <div class="title">Assessing Your Situation</div>
                            <div class="desc">We analyze your specific fuel needs, selecting products based on factors such as particle size, quality, calorific value, and type to maximize the benefits of your energy use.</div>
                            {{-- <div class="btn"><a href="#" class="btn btn-primary btn3">Read More</a></div> --}}
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 mb-4">
                    <div class="serviceitemi"
                        style="background-image: url({{ asset('images/product.jpg') }});background-size:cover;">
                        <div class="content">
                            <div class="title">Offering the Right Fuel Product</div>
                            <div class="desc">At Benex, we keep a wide variety of fuel products in stock, ready for immediate delivery. Thanks to our extensive network of fuel producers, if we don’t have your preferred product on hand, we will source it quickly for you.</div>
                            {{-- <div class="btn"><a href="#" class="btn btn-primary btn3">Read More</a></div> --}}
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 mb-4">
                    <div class="serviceitemi"
                        style="background-image: url({{ asset('images/agreement.jpg') }});background-size:cover;">
                        <div class="content">
                            <div class="title">Agreement and Implementation</div>
                            <div class="desc">Once we identify the right product for you, we initiate a reliable, regular supply agreement. Our certified fuel products will be delivered via road transport, ships, or railways, ensuring a smooth and risk-free process.</div>
                            {{-- <div class="btn"><a href="#" class="btn btn-primary btn3">Read More</a></div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- services --}}

    <section>
        <div class="col-md-12 py-5" style="background: #ED6E00;">
            <div class="container text-center">
                <h5 class="heading2whitecenter text-white">Fuel Product Selection and Sourcing</h5>
                <div class="col-12 py-4">
                    <div class="row text-center text-white">
                        <div class="col-4">
                            <h5 class="mb-4">RAIL</h5>
                            <img src="http://127.0.0.1:8000/images/benex.svg" alt="RAIL" class="img-fluid" style="max-width: 200px;    filter: invert(100%) brightness(1000%);">
                        </div>
                        <div class="col-4">
                            <h5 class="mb-4">SHIPS</h5>
                            <img src="http://127.0.0.1:8000/images/benex.svg" alt="RAIL" class="img-fluid" style="max-width: 200px;    filter: invert(100%) brightness(1000%);">
                        </div>
                        <div class="col-4">
                            <h5 class="mb-4">ROAD TRANSPORT</h5>
                            <img src="http://127.0.0.1:8000/images/benex.svg" alt="RAIL" class="img-fluid" style="max-width: 200px;    filter: invert(100%) brightness(1000%);">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="col-12 py-4">
                <div class="row ">
                    <div class="col-5">
                        <p>Benex takes pride in its efficient logistics solutions. With a team of seasoned logistics experts and years of experience in fuel supply, we guarantee that your fuel products will arrive at your warehouse on time and as agreed. Our delivery options include road, rail, and sea transport, allowing for seamless service, no matter the volume or location.</p>
                    </div>
                    <div class="col-7">
                        <h2 class="heading3">Intermodal Terminal Services</h2>
                        <p>Our intermodal services ensure flexible transportation solutions. Whether by road, rail, or sea, Benex ensures that your fuel products are handled efficiently and delivered as per agreed schedules, regardless of the type or quantity required.</p>
                    </div>

                </div>
            </div>

        </div>

    </section>

    <section>
        <div class="row m-0">
            <div class="col-6 p-5" style="background:#ed6e00;">
                <h5 class="heading2white text-white">WHERE WE SERVE IN EUROPE</h5>
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
