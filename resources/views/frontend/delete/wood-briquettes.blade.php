@extends('frontend.layouts.app')
@section('title', 'Benex')
@section('maincontent')

    <!-- hero -->
    <div class="col-12 hero woodbriquettes">
        <div class="container col-xxl-12 px-4 py-5">
            <div class="row flex-lg-row align-items-center g-5 py-5">
                <div class="col-lg-6">
                    <div class="caption w-20">
                        <h1 class="display-5 fw-bold lh-1 mb-3 text-white">Briquettes</h1>
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
                <h5 class="heading2">Wood Briquettes by Benex</h5>

                <div class="col">
                    <p style="text-align: left;">Benex is dedicated to offering high-quality, eco-friendly fuel solutions for a wide range of customers. Our wood briquettes are designed to provide an efficient, sustainable, and clean-burning alternative to traditional fuels. Whether you are a homeowner, business, or industrial operation looking for a reliable source of heat, Benex wood briquettes offer an outstanding solution that is both economical and environmentally friendly.</p>
                </div>

                <div class="col mb-4">
                    <h4 class="heading4b" style="text-transform:uppercase">Types of Wood Briquettes</h4>
                </div>
                <div class="col">
                    <p>Benex offers a variety of wood briquettes, each tailored to meet specific energy requirements and preferences. Our briquettes come in different forms, ensuring that we can provide a solution for every customer’s needs:</p>
                </div>
                <div class="col-12">
                    <div class="row">
                        <div class="col-6 mb-4">
                            <div class="card">
                                <div class="card-body">
                                    <h3 class="d-inline-block" style="color: #ea6d00">#1.) RUF  Briquettes:</h3>
                                    <p>These highly compressed rectangular blocks are made from sawdust and other wood by-products. RUF briquettes are renowned for their long burning time and high calorific value, making them an excellent option for both household and industrial use. Their compact shape allows for easy handling and storage.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 mb-4">
                            <div class="card">
                                <div class="card-body">
                                    <h3 class="d-inline-block" style="color: #ea6d00">#2.) PINI KAY Briquettes:</h3>
                                    <p>Recognizable by their unique hexagonal shape with a central hole, PINI KAY briquettes are produced under extreme pressure and high temperatures, ensuring an incredibly dense and long-lasting product. They are perfect for high-intensity, long-duration burns, making them suitable for industrial applications and heavy-duty stoves. The central hole enhances airflow, resulting in an efficient and clean burn.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col mb-4">
                            <div class="card">
                                <div class="card-body">
                                    <h3 class="d-inline-block" style="color: #ea6d00">#3.) NESTRO Briquettes:</h3>
                                    <p>These cylindrical briquettes are made from compressed wood chips and sawdust, offering a dense and slow-burning fuel source. NESTRO briquettes are ideal for customers who require steady heat over an extended period, making them perfect for both households and businesses.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <hr>
                <div class="col mb-4">
                    <h4 class="heading4b" style="text-transform:uppercase">Wood Materials</h4>
                </div>
                <div class="col mb-4"><p>At Benex, we use a variety of high-quality wood species to produce our briquettes, ensuring that they meet the needs of different customers and applications. The type of wood used affects the burning characteristics, and we offer options to match various preferences:</p></div>
                <div class="col-12">
                    <div class="row">
                        <div class="col mb-4">
                            <div class="card">
                                <div class="card-body">
                                    <h3 class="d-inline-block" style="color: #ea6d00">#1.) Softwood:</h3>
                                    <p>Known for its high energy output and fast ignition, softwood briquettes provide a quick and efficient heat source. These briquettes are ideal for households and businesses looking for a fast-burning solution with a clean flame.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col mb-4">
                            <div class="card">
                                <div class="card-body">
                                    <h3 class="d-inline-block" style="color: #ea6d00">#2.) Birch:</h3>
                                    <p>Birch wood is known for its low moisture content and high energy efficiency. Briquettes made from birch offer a long, steady burn with minimal ash production. This makes them suitable for household stoves and fireplaces as well as industrial heating systems.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col mb-4">
                            <div class="card">
                                <div class="card-body">
                                    <h3 class="d-inline-block" style="color: #ea6d00">#3.) Oak:</h3>
                                    <p>Oak briquettes are denser and burn for longer durations. With a higher calorific value than softwood, oak briquettes provide a strong, consistent heat source, making them suitable for larger heating systems and industrial applications where extended burn times are required.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col mb-4">
                            <div class="card">
                                <div class="card-body">
                                    <h3 class="d-inline-block" style="color: #ea6d00">#4.) Mixed Species:</h3>
                                    <p>For customers seeking a cost-effective yet efficient fuel solution, our mixed species briquettes combine different types of wood, delivering a balance between long-lasting heat and affordability. These briquettes are perfect for both residential and commercial use.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <hr>
                <div class="col mb-4">
                    <h4 class="heading4b" style="text-transform:uppercase">Quality Grades</h4>
                </div>
                <div class="col mb-4">
                    <p>Benex wood briquettes are available in multiple quality grades, allowing our customers to select the option that best suits their needs:</p>
                </div>
                <div class="col-12">
                    <div class="row">
                        <div class="col mb-4">
                            <div class="card">
                                <div class="card-body">
                                    <h3 class="d-inline-block" style="color: #ea6d00">#1.) Light: </h3>
                                    <p>Our light briquettes are crafted from premium-grade wood, ensuring minimal ash production and an exceptionally clean burn. These briquettes are ideal for sensitive environments where low emissions and high efficiency are essential, such as in households and smaller commercial settings.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col mb-4">
                            <div class="card">
                                <div class="card-body">
                                    <h3 class="d-inline-block" style="color: #ea6d00">#2.) "Cappuccino": </h3>
                                    <p>This grade strikes a balance between cost and performance. The "Cappuccino" briquettes offer moderate ash content with reliable burn times, making them suitable for businesses and commercial consumers who require consistent heating at a reasonable price.</p>
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
                    <p>Benex wood briquettes are designed for versatile use, ensuring they meet the energy needs of a wide range of customers. Our briquettes provide a reliable and eco-friendly fuel source for various applications:</p>
                </div>
                <div class="col-12">
                    <div class="row">
                        <div class="col mb-4">
                            <div class="card">
                                <div class="card-body">
                                    <h3 class="d-inline-block" style="color: #ea6d00">#1.) Household Consumers: </h3>
                                    <p>For homeowners looking for an efficient and environmentally conscious heating solution, our wood briquettes are an excellent choice. Benex briquettes are perfect for use in wood-burning stoves, fireplaces, and boilers, providing consistent and clean heat throughout your home. Their high energy density ensures long-lasting warmth with minimal ash and emissions.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col mb-4">
                            <div class="card">
                                <div class="card-body">
                                    <h3 class="d-inline-block" style="color: #ea6d00">#2.) Industrial Use: </h3>
                                    <p>Benex briquettes are also suitable for industrial applications, where high heat output and long burn times are critical. Whether for manufacturing processes or large-scale heating systems, our briquettes offer an economical and powerful energy source that minimizes downtime and reduces energy costs.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col mb-4">
                            <div class="card">
                                <div class="card-body">
                                    <h3 class="d-inline-block" style="color: #ea6d00">#3.) Businesses: </h3>
                                    <p>Commercial establishments such as hotels, restaurants, and office buildings can benefit from using Benex wood briquettes as a sustainable fuel alternative. Our briquettes provide an efficient and cost-effective solution for heating, helping businesses reduce their carbon footprint while maintaining optimal energy performance.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="col mb-4">
                    <h4 class="heading4b" style="text-transform:uppercase">Transportation Options</h4>
                </div>
                <div class="col mb-4">
                    <p>At Benex, we understand that reliable and timely delivery is crucial for our customers. That’s why we offer multiple transportation options to ensure our wood briquettes reach you in excellent condition, no matter your location:</p>
                </div>
                <div class="col-12">
                    <div class="row">
                        <div class="col mb-4">
                            <div class="card">
                                <div class="card-body">
                                    <h3 class="d-inline-block" style="color: #ea6d00">#1.) By Rail: </h3>
                                    <p>For long-distance transportation across regions, we provide delivery by rail, ensuring that large bulk orders can be delivered efficiently and cost-effectively.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col mb-4">
                            <div class="card">
                                <div class="card-body">
                                    <h3 class="d-inline-block" style="color: #ea6d00">#2.) By Ship: </h3>
                                    <p> Benex ships wood briquettes to international destinations, ensuring that our global customers have access to our premium fuel products. We ensure secure packaging and handling for long sea journeys.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col mb-4">
                            <div class="card">
                                <div class="card-body">
                                    <h3 class="d-inline-block" style="color: #ea6d00">#3.) By Road Transport: </h3>
                                    <p>For regional and local deliveries, we offer reliable road transport services. Our briquettes are delivered promptly, ensuring that you receive them in optimal condition for immediate use.</p>
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
                    <p>We offer flexible packaging options to suit the unique needs of our diverse customer base. At Benex, we take great care to ensure that our briquettes are packaged to maintain their quality and provide convenient storage and handling:</p>
                </div>
                <div class="col-12">
                    <div class="row">
                        <div class="col mb-4">
                            <div class="card">
                                <div class="card-body">
                                    <h3 class="d-inline-block" style="color: #ea6d00">#.)Packets on Pallets: </h3>
                                    <p>Our wood briquettes are neatly packed in packets and arranged on pallets, ensuring that they are easy to store and handle. This packaging option is ideal for businesses and households alike, offering convenient access to fuel without the need for complex storage solutions.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <hr>
                <div class="col mb-4">
                    <h4 class="heading4b" style="text-transform:uppercase">Why Choose Benex Wood Briquettes ?</h4>
                </div>

                <div class="col-12">
                    <div class="row">
                        <div class="col mb-4">
                            <div class="card">
                                <div class="card-body">
                                    <h3 class="d-inline-block" style="color: #ea6d00">#1.) Sustainable Energy: </h3>
                                    <p>Benex is committed to offering environmentally friendly fuel solutions. Our wood briquettes are made from renewable materials, helping to reduce reliance on fossil fuels and lower carbon emissions. We believe in promoting sustainable energy practices for a greener future.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col mb-4">
                            <div class="card">
                                <div class="card-body">
                                    <h3 class="d-inline-block" style="color: #ea6d00">#2.) High Performance: </h3>
                                    <p> Benex wood briquettes are engineered to deliver high heat output and long burn times, providing reliable energy for all applications. Whether for domestic, commercial, or industrial use, our briquettes ensure consistent performance and optimal energy efficiency.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col mb-4">
                            <div class="card">
                                <div class="card-body">
                                    <h3 class="d-inline-block" style="color: #ea6d00">#3.) Cost-Effective: </h3>
                                    <p>Our wood briquettes provide excellent value for money, offering an affordable alternative to traditional fuel sources. With competitive pricing and superior energy efficiency, Benex briquettes help reduce your heating costs while delivering outstanding results.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col mb-4">
                            <div class="card">
                                <div class="card-body">
                                    <h3 class="d-inline-block" style="color: #ea6d00">#4.) Premium Quality: </h3>
                                    <p>We maintain strict quality control measures to ensure that every batch of Benex briquettes meets industry standards for energy output, moisture content, and ash production. You can trust our briquettes to deliver the consistent and reliable performance you need.</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <p>Benex wood briquettes offer a dependable, eco-friendly, and cost-efficient energy solution for homes, businesses, and industries. Whether you need fuel for household heating, commercial operations, or industrial processes, our briquettes provide a sustainable option that delivers high performance and reduces environmental impact.</p>
                    <p>Contact Benex today to learn more about how our wood briquettes can meet your energy needs!</p>

            </div>
        </div>
    </div>

@endsection
@push('script')
@endpush
