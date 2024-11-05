@extends('frontend.layouts.app')
@section('title', 'Benex')
@section('maincontent')

    <!-- hero -->
    <div class="col-12 hero woodlogs">
        <div class="container col-xxl-12 px-4 py-5">
            <div class="row flex-lg-row align-items-center g-5 py-5">
                <div class="col-lg-6">
                    <div class="caption w-20">
                        <h1 class="display-5 fw-bold lh-1 mb-3 text-white">Wood Logs</h1>
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
                <h5 class="heading2">Wood Logs by Benex</h5>

                <div class="col">
                    <p style="text-align: left;">Benex offers high-quality wood logs sourced from the finest forests to meet the energy and heating needs of households, businesses, and industries. Our wood logs are a natural, sustainable, and cost-effective fuel solution, providing efficient heat output for a range of applications. Whether you’re looking for a renewable energy source for your fireplace at home, fuel for industrial furnaces, or reliable heating for commercial establishments, Benex wood logs are the perfect solution.</p>
                </div>

                <div class="col mb-4">
                    <h4 class="heading4b" style="text-transform:uppercase">Types of Wood Logs</h4>
                </div>
                <div class="col">
                    <p>Benex offers a variety of wood briquettes, each tailored to meet specific energy requirements and preferences. Our briquettes come in different forms, ensuring that we can provide a solution for every customer’s need:</p>
                </div>
                <div class="col-12">
                    <div class="row">
                        <div class="col-6 mb-4">
                            <div class="card">
                                <div class="card-body">
                                    <h3 class="d-inline-block" style="color: #ea6d00">#1.) Softwood Logs:</h3>
                                    <p>Known for their quick ignition and fast burn, softwood logs are ideal for those who need immediate heat. They’re perfect for fireplaces, wood stoves, and open fires in homes, offering a cozy, warm ambiance in a short time. Though they burn faster than hardwood logs, their lightweight and availability make them a popular choice for households.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 mb-4">
                            <div class="card">
                                <div class="card-body">
                                    <h3 class="d-inline-block" style="color: #ea6d00">#2.) Birch Logs:</h3>
                                    <p>Birch wood is a versatile hardwood that burns relatively fast while offering a moderate heat output. Its beautiful blue flame and low moisture content make it one of the best choices for indoor fireplaces. Birch logs are great for both household and commercial heating solutions, providing clean-burning, efficient warmth.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col mb-4">
                            <div class="card">
                                <div class="card-body">
                                    <h3 class="d-inline-block" style="color: #ea6d00">#3.) Oak Logs:</h3>
                                    <p>For customers seeking long-lasting heat, oak logs are the premium choice. Known for their density and slow burn, oak logs provide sustained warmth, making them ideal for industrial and large-scale heating applications. With a high calorific value and extended burn time, oak logs are perfect for cold winters and heavy-duty heating systems.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col mb-4">
                            <div class="card">
                                <div class="card-body">
                                    <h3 class="d-inline-block" style="color: #ea6d00">#4.) Black Alder Logs:</h3>
                                    <p>Black alder is another high-quality hardwood known for its fast lighting and strong heat production. These logs are highly valued in both household and commercial settings. With less smoke and minimal ash residue, black alder is an environmentally friendly option for those who prioritize clean burning.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <hr>
                <div class="col mb-4">
                    <h4 class="heading4b" style="text-transform:uppercase">Quality Grades</h4>
                </div>
                <div class="col mb-4"><p>Benex offers wood logs in two distinct quality grades to suit varying customer preferences:</p></div>
                <div class="col-12">
                    <div class="row">
                        <div class="col mb-4">
                            <div class="card">
                                <div class="card-body">
                                    <h3 class="d-inline-block" style="color: #ea6d00">#1.) Natural Moisture:</h3>
                                    <p>Logs with natural moisture content are freshly harvested and air-dried. They are suitable for outdoor fires, bonfires, and industrial furnaces, where moisture content is less critical. These logs offer a cost-effective solution for customers who do not require kiln-dried products but still value sustainable heating options.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col mb-4">
                            <div class="card">
                                <div class="card-body">
                                    <h3 class="d-inline-block" style="color: #ea6d00">#2.) Kiln-Dried:</h3>
                                    <p> Kiln-dried wood logs undergo a controlled drying process to reduce moisture content to less than 20%, ensuring maximum heat output and minimal smoke. Kiln-dried logs are ideal for indoor use, as they ignite quickly, burn hotter, and leave very little ash. For households with fireplaces and wood stoves, kiln-dried logs are the most efficient and clean-burning option.</p>
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
                    <p>Benex wood logs are suitable for a wide range of uses across different sectors:</p>
                </div>
                <div class="col-12">
                    <div class="row">
                        <div class="col mb-4">
                            <div class="card">
                                <div class="card-body">
                                    <h3 class="d-inline-block" style="color: #ea6d00">#1.) Household Consumers: </h3>
                                    <p>Whether you have a fireplace, wood stove, or an outdoor fire pit, our wood logs provide a reliable and eco-friendly heating option for your home. Kiln-dried logs, in particular, are perfect for indoor use, ensuring clean burning and optimal heat output for a cozy home environment.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col mb-4">
                            <div class="card">
                                <div class="card-body">
                                    <h3 class="d-inline-block" style="color: #ea6d00">#2.) Industrial Use: </h3>
                                    <p> Industries requiring large quantities of fuel for heating or energy production can rely on our oak and black alder logs for their durability and high calorific value. Benex wood logs provide consistent energy output, reducing the need for frequent fuel replenishment, making them an economical choice for industrial heating systems.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col mb-4">
                            <div class="card">
                                <div class="card-body">
                                    <h3 class="d-inline-block" style="color: #ea6d00">#2.) Businesses: </h3>
                                    <p> Commercial establishments, including hotels, restaurants, and resorts, can benefit from using Benex wood logs as a renewable energy source. Whether for heating large indoor spaces or creating an inviting atmosphere with fireplaces, our wood logs offer a sustainable and cost-efficient solution.</p>
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
                                    <p> For long-distance shipments and bulk orders, we provide delivery by rail. This is the most efficient method for transporting large quantities of wood logs across vast distances, ensuring a smooth and stable supply chain.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col mb-4">
                            <div class="card">
                                <div class="card-body">
                                    <h3 class="d-inline-block" style="color: #ea6d00">#2.) By Ship: </h3>
                                    <p>  For international clients, Benex wood logs are available for shipping by sea. Our global shipping network ensures timely delivery of wood logs, allowing us to meet the needs of customers worldwide.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col mb-4">
                            <div class="card">
                                <div class="card-body">
                                    <h3 class="d-inline-block" style="color: #ea6d00">#3.) By Road Transport: </h3>
                                    <p>For regional and local deliveries, our fleet of trucks ensures that wood logs are delivered quickly and efficiently to your doorstep. Whether it’s a bulk order for industrial use or smaller quantities for household purposes, Benex guarantees fast and safe transport via road.</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <hr>



                <hr>
                <div class="col mb-4">
                    <h4 class="heading4b" style="text-transform:uppercase">Packaging Options</h4>
                </div>
                <div class="col mb-4">
                    <p>We offer several packaging options to make handling, storage, and use of our wood logs as convenient as possible:</p>
                </div>
                <div class="col-12">
                    <div class="row">
                        <div class="col mb-4">
                            <div class="card">
                                <div class="card-body">
                                    <h3 class="d-inline-block" style="color: #ea6d00">#.1) Bagged on Pallets: </h3>
                                    <p> Our wood logs are neatly packed into bags and placed on pallets for easy handling. This option is particularly useful for businesses and households, as it allows for organized storage and minimal effort when retrieving logs for use. The pallets ensure that the wood logs are protected during transportation and can be easily moved with forklifts or pallet jacks.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col mb-4">
                            <div class="card">
                                <div class="card-body">
                                    <h3 class="d-inline-block" style="color: #ea6d00">#.2) Containers: </h3>
                                    <p>For large-scale industrial and commercial needs, we offer wood logs in bulk containers. These containers provide maximum storage capacity and are ideal for long-term fuel supplies. The logs are carefully stacked to optimize space and ensure that you have a steady supply of high-quality wood fuel whenever needed.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col mb-4">
                            <div class="card">
                                <div class="card-body">
                                    <h3 class="d-inline-block" style="color: #ea6d00">#.3) Fire Up Wood Sticks:</h3>
                                    <p> In addition to our standard wood logs, Benex also provides fire-up wood sticks, which are perfect for quickly igniting fires. These small, dry sticks are made from high-quality wood and are a convenient addition to any fire-starting kit. Ideal for both household and commercial use, fire-up wood sticks make starting fires easier and faster, especially when used with larger wood logs.</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <hr>
                <div class="col mb-4">
                    <h4 class="heading4b" style="text-transform:uppercase">Why Choose Benex Wood Logs ?</h4>
                </div>

                <div class="col-12">
                    <div class="row">
                        <div class="col mb-4">
                            <div class="card">
                                <div class="card-body">
                                    <h3 class="d-inline-block" style="color: #ea6d00">#1.) Sustainability: </h3>
                                    <p> At Benex, we are committed to environmental responsibility. Our wood logs are sourced from sustainably managed forests, ensuring that we maintain the balance of nature while providing renewable energy solutions for our customers.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col mb-4">
                            <div class="card">
                                <div class="card-body">
                                    <h3 class="d-inline-block" style="color: #ea6d00">#2.) High Efficiency: </h3>
                                    <p> Whether you choose softwood, birch, oak, or black alder logs, Benex wood logs guarantee high energy output and long burn times. With our kiln-dried options, you can also expect minimal smoke and ash, providing a cleaner and more efficient heating experience.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col mb-4">
                            <div class="card">
                                <div class="card-body">
                                    <h3 class="d-inline-block" style="color: #ea6d00">#3.) Versatility: </h3>
                                    <p> Our wide variety of wood logs means we have the right option for any application. From households seeking a warm, cozy atmosphere to industrial clients looking for reliable and sustainable fuel, Benex wood logs are adaptable to various needs and settings.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col mb-4">
                            <div class="card">
                                <div class="card-body">
                                    <h3 class="d-inline-block" style="color: #ea6d00">#4.) Cost-Effective: </h3>
                                    <p> Benex wood logs offer an affordable alternative to conventional fossil fuels, allowing you to reduce your heating costs while contributing to a greener planet. Our competitively priced products ensure that you get the best value for your money.</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <p>Benex wood logs are the perfect choice for anyone looking for a reliable, efficient, and eco-friendly heating solution. Whether you need wood logs for your home, business, or industrial facility, our premium products will provide the heat you need while supporting sustainable energy practices. Choose Benex for your wood log needs and experience the difference in quality and performance.</p>

            </div>
        </div>
    </div>

@endsection
@push('script')
@endpush
