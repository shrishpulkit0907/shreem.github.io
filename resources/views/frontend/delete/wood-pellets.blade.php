@extends('frontend.layouts.app')
@section('title', 'Benex')
@section('maincontent')

    <!-- hero -->
    <div class="col-12 hero woodpellet">
        <div class="container col-xxl-12 px-4 py-5">
            <div class="row flex-lg-row align-items-center g-5 py-5">
                <div class="col-lg-6">
                    <div class="caption w-20">
                        <h1 class="display-5 fw-bold lh-1 mb-3 text-white">Wood Pallet</h1>
                        {{-- <h2 class="display-6 fw-bold lh-1 mb-3 text-white">BENEX - YOUR RELIABLE FUEL SUPPLIER</h2> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- hero -->
    <div class="container container2 py-5">
        <div class="row">
            {{-- <div class="col-md-3 text-center">
                <h5 class="heading1">Who We Are</h5>
            </div> --}}
            <div class="col-md">
                <h5 class="heading2">Wood Pellets by Benex</h5>

                <div class="col">
                    <p style="text-align: left;">Benex is proud to offer a premium range of wood pellets that meet the
                        highest standards of quality and efficiency. Our wood pellets are designed to cater to the needs of
                        households, businesses, and industries seeking sustainable and cost-effective fuel options. Whether
                        you are looking for efficient heating solutions for your home or a large-scale energy source for
                        industrial purposes, Benex wood pellets are the reliable choice.</p>
                </div>

                <div class="col mb-4">
                    <h4 class="heading4b" style="text-transform:uppercase">Types of Wood Pellets</h4>
                </div>
                <div class="col">
                    <p>At Benex, we offer a variety of wood pellets to suit different requirements and applications:</p>
                </div>
                <div class="col-12">
                    <div class="row">
                        <div class="col-6 mb-4">
                            <div class="card">
                                <div class="card-body">
                                    <h3 class="d-inline-block" style="color: #ea6d00">#1.) Wood Pellets:</h3>
                                    <p class="d-inline">These are the most common sizes and are ideal for a range of heating
                                        systems, from domestic boilers to industrial furnaces. The 6 mm pellets are perfect
                                        for households with smaller pellet stoves, while the 8 mm pellets are suited for
                                        larger systems.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 mb-4">
                            <div class="card">
                                <div class="card-body">
                                    <h3 class="d-inline-block" style="color: #ea6d00">#2.) Softwood Pellets:</h3>
                                    <p class="d-inline">Made from high-quality softwood, these pellets are known for their
                                        excellent energy efficiency and clean burn. Softwood pellets are preferred for their
                                        higher calorific value, making them suitable for both domestic and commercial use.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col mb-4">
                            <div class="card">
                                <div class="card-body">
                                    <h3 class="d-inline-block" style="color: #ea6d00">#3.) Hardwood Pellets:</h3>
                                    <p class="d-inline">For those looking for longer burn times and consistent heat,
                                        hardwood pellets are an excellent choice. They are denser than softwood pellets,
                                        providing extended heat output, ideal for industrial and heavy-duty applications.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col mb-4">
                            <div class="card">
                                <div class="card-body">
                                    <h3 class="d-inline-block" style="color: #ea6d00">#4.) Sunflower Husk Pellets:</h3>
                                    <p class="d-inline">A sustainable alternative to traditional wood pellets, sunflower
                                        husk pellets are produced from agricultural by-products. These pellets offer a
                                        low-cost energy solution while maintaining high energy efficiency, making them
                                        popular in both household and industrial settings.</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <hr>
                <div class="col mb-4">
                    <h4 class="heading4b" style="text-transform:uppercase">Qualtiy Grades</h4>
                </div>
                <div class="col-12">
                    <div class="row">


                        <div class="col mb-4">
                            <div class="card">
                                <div class="card-body">
                                    <h3 class="d-inline-block" style="color: #ea6d00">#1.) Light:</h3>
                                    <p>These pellets are crafted from the finest raw materials, ensuring a clean burn and
                                        minimal ash production. They are ideal for sensitive applications where low
                                        emissions are essential.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col mb-4">
                            <div class="card">
                                <div class="card-body">
                                    <h3 class="d-inline-block" style="color: #ea6d00">#2.) "Cappuccino":</h3>
                                    <p>This intermediate grade offers a balance between cost and quality, providing
                                        efficient performance with moderate ash content. It is well-suited for businesses
                                        and commercial operations looking for reliable fuel at a competitive price.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col mb-4">
                            <div class="card">
                                <div class="card-body">
                                    <h3 class="d-inline-block" style="color: #ea6d00">#3.) Dark:</h3>
                                    <p>Our dark wood pellets are engineered for industries that require high heat output and
                                        durability. Although they produce more ash, they are perfect for large-scale
                                        operations that need consistent, powerful heating solutions.</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>


                <hr>
                <div class="col mb-4">
                    <h4 class="heading4b" style="text-transform:uppercase">Applications</h4>
                </div>
                <div class="col mb-4">
                    <p>Benex wood pellets are versatile and can be used in various sectors:</p>
                </div>
                <div class="col-12">
                    <div class="row">
                        <div class="col mb-4">
                            <div class="card">
                                <div class="card-body">
                                    <h3 class="d-inline-block" style="color: #ea6d00">#1.) Household Consumers: </h3>
                                    <p>For those seeking eco-friendly heating solutions at home, our wood pellets provide a
                                        clean and efficient energy source. Whether for heating stoves, pellet boilers, or
                                        fireplaces, our pellets ensure consistent warmth and comfort.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col mb-4">
                            <div class="card">
                                <div class="card-body">
                                    <h3 class="d-inline-block" style="color: #ea6d00">#2.) Industrial Use: </h3>
                                    <p>Our hardwood and sunflower husk pellets are ideal for industries that rely on
                                        long-term, high-output heating. With superior energy efficiency and
                                        cost-effectiveness, Benex wood pellets are the preferred choice for industrial
                                        heating and energy generation.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col mb-4">
                            <div class="card">
                                <div class="card-body">
                                    <h3 class="d-inline-block" style="color: #ea6d00">#3.) Businesses: </h3>
                                    <p>Commercial establishments such as hotels, schools, and office buildings can also
                                        benefit from using wood pellets as an alternative to traditional fuels. Benex
                                        pellets ensure reduced energy costs and a smaller carbon footprint.</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <hr>
                <div class="col mb-4">
                    <h4 class="heading4b" style="text-transform:uppercase">Transportation</h4>
                </div>
                <div class="col mb-4">
                    <p>At Benex, we understand the importance of timely delivery and safe transportation. That’s why we
                        offer multiple shipping options to ensure our wood pellets reach you in the best condition:</p>
                </div>
                <div class="col-12">
                    <div class="row">
                        <div class="col mb-4">
                            <div class="card">
                                <div class="card-body">
                                    <h3 class="d-inline-block" style="color: #ea6d00">#1.) By Rail: </h3>
                                    <p>For long-distance transportation across regions, we provide delivery by rail,
                                        ensuring a stable and efficient supply chain for bulk orders.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col mb-4">
                            <div class="card">
                                <div class="card-body">
                                    <h3 class="d-inline-block" style="color: #ea6d00">#2.) By Ship: </h3>
                                    <p> Benex ships wood pellets to international destinations, ensuring our customers
                                        around the globe have access to our premium products.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col mb-4">
                            <div class="card">
                                <div class="card-body">
                                    <h3 class="d-inline-block" style="color: #ea6d00">#3.) By Road Transport: </h3>
                                    <p> For local and regional deliveries, our road transport services guarantee a fast and
                                        reliable delivery option, ensuring the pellets arrive on time.</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <hr>
                <div class="col mb-4">
                    <h4 class="heading4b" style="text-transform:uppercase">Packaging Options</h4>
                </div>
                <div class="col mb-4">
                    <p>To suit the varying needs of our customers, Benex wood pellets are available in different packaging formats:</p>
                </div>
                <div class="col-12">
                    <div class="row">
                        <div class="col mb-4">
                            <div class="card">
                                <div class="card-body">
                                    <h3 class="d-inline-block" style="color: #ea6d00">#1.)Bulk: </h3>
                                    <p> Ideal for large-scale industrial use or businesses with significant energy requirements, our bulk packaging allows for efficient storage and handling.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col mb-4">
                            <div class="card">
                                <div class="card-body">
                                    <h3 class="d-inline-block" style="color: #ea6d00">#2.) Bagged on Pallets: </h3>
                                    <p>For easier handling and transportation, we offer bagged pellets that are neatly stacked on pallets. This packaging format is ideal for both household and commercial customers, allowing for convenient storage and use.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col mb-4">
                            <div class="card">
                                <div class="card-body">
                                    <h3 class="d-inline-block" style="color: #ea6d00">#3.) Big Bags: </h3>
                                    <p>Our big bag option is perfect for customers who need a substantial quantity of wood pellets without the logistical challenges of handling bulk shipments.</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <hr>
                <div class="col mb-4">
                    <h4 class="heading4b" style="text-transform:uppercase">Why Choose Benex Wood Pellets ?</h4>
                </div>

                <div class="col-12">
                    <div class="row">
                        <div class="col mb-4">
                            <div class="card">
                                <div class="card-body">
                                    <h3 class="d-inline-block" style="color: #ea6d00">#1.) Sustainability: </h3>
                                    <p>Benex is committed to promoting sustainable energy sources. Our wood pellets are made from renewable materials, helping reduce reliance on fossil fuels and lowering carbon emissions.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col mb-4">
                            <div class="card">
                                <div class="card-body">
                                    <h3 class="d-inline-block" style="color: #ea6d00">#2.) Quality Assurance: </h3>
                                    <p>Each batch of Benex wood pellets undergoes rigorous testing to ensure it meets industry standards for moisture content, ash production, and energy output. You can count on our pellets for consistent quality and performance.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col mb-4">
                            <div class="card">
                                <div class="card-body">
                                    <h3 class="d-inline-block" style="color: #ea6d00">#3.) Cost Efficiency: </h3>
                                    <p>Our wood pellets offer excellent value for money, providing an affordable yet efficient alternative to conventional fuels. With competitive pricing and long-lasting burn times, Benex wood pellets help you save on energy costs while supporting the environment.</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <p>Benex wood pellets are the perfect solution for customers looking for a reliable, eco-friendly, and cost-effective energy source. Whether you need fuel for your home, business, or industrial operations, our premium wood pellets provide the performance and quality you can trust.</p>

            </div>
        </div>
    </div>

@endsection
@push('script')
@endpush
