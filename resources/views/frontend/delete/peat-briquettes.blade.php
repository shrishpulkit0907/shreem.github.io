@extends('frontend.layouts.app')
@section('title', 'Benex')
@section('maincontent')

    <!-- hero -->
    <div class="col-12 hero peatbriquettes">
        <div class="container col-xxl-12 px-4 py-5">
            <div class="row flex-lg-row align-items-center g-5 py-5">
                <div class="col-lg-6">
                    <div class="caption w-20">
                        <h1 class="display-5 fw-bold lh-1 mb-3 text-white">Peat Briquettes</h1>
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
                <h5 class="heading2">Peat Briquettes by Benex</h5>

                <div class="col">
                    <p style="text-align: left;">At Benex, we offer high-quality peat briquettes that are perfect for a variety of heating applications. Peat has been used for centuries as a reliable source of energy, and today, our peat briquettes continue this tradition by providing an affordable, eco-friendly, and efficient fuel option. Whether you are heating your home, running industrial operations, or looking for an alternative energy source for your business, Benex peat briquettes deliver consistent, long-lasting heat.</p>
                </div>

                <div class="col mb-4">
                    <h4 class="heading4b" style="text-transform:uppercase">Types of Peat Briquettes</h4>
                </div>
                <div class="col">
                    <p>Benex supplies peat briquettes in two distinct types to meet different energy needs:</p>
                </div>
                <div class="col-12">
                    <div class="row">
                        <div class="col-6 mb-4">
                            <div class="card">
                                <div class="card-body">
                                    <h3 class="d-inline-block" style="color: #ea6d00">#1.) BT1:</h3>
                                    <p>The BT1 peat briquettes are designed for high-efficiency heating applications. With their high energy density, these briquettes are suitable for both household consumers and commercial operations that require a steady and reliable heat source. They burn slowly, ensuring longer heating times, which makes them ideal for stoves, boilers, and fireplaces.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 mb-4">
                            <div class="card">
                                <div class="card-body">
                                    <h3 class="d-inline-block" style="color: #ea6d00">#2.) BT2:</h3>
                                    <p>Our BT2 peat briquettes are tailored for larger industrial use where high temperatures and long burn durations are essential. These briquettes are slightly denser and more compact than the BT1 variety, making them suitable for large-scale heating needs in industries such as manufacturing, processing plants, and power generation facilities.</p>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>

                <hr>
                <div class="col mb-4">
                    <h4 class="heading4b" style="text-transform:uppercase">Raw Material: Peat</h4>
                </div>
                <div class="col mb-4"><p>The foundation of our briquettes is natural peat, a well-known material sourced from rich peatlands. Peat is composed of decayed organic matter and has been used as a fuel for centuries due to its high calorific value. By processing this organic matter into briquettes, we create an energy-efficient and sustainable fuel source. Peat is also carbon-efficient, making it a more environmentally friendly alternative to coal and other fossil fuels.</p></div>
                <div class="col mb-4"><p>Our peat briquettes are carefully manufactured to maintain their structure and ensure maximum heat output. During production, the moisture content is reduced to create a briquette that burns evenly, produces minimal ash, and emits less smoke, resulting in cleaner combustion.</p></div>



                <hr>
                <div class="col mb-4">
                    <h4 class="heading4b" style="text-transform:uppercase">Applications of Peat Briquettes</h4>
                </div>
                <div class="col mb-4">
                    <p>Benex peat briquettes are versatile and cater to a wide range of energy needs:</p>
                </div>
                <div class="col-12">
                    <div class="row">
                        <div class="col mb-4">
                            <div class="card">
                                <div class="card-body">
                                    <h3 class="d-inline-block" style="color: #ea6d00">#1.) Household Consumers: </h3>
                                    <p> For those seeking a reliable and affordable alternative for home heating, peat briquettes offer an excellent solution. Whether used in fireplaces, stoves, or boilers, our peat briquettes provide consistent heat, ensuring your home stays warm throughout the winter. They are also easy to handle and store, making them convenient for household use.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col mb-4">
                            <div class="card">
                                <div class="card-body">
                                    <h3 class="d-inline-block" style="color: #ea6d00">#2.) Industrial Use: </h3>
                                    <p> Benex peat briquettes are designed to meet the demands of heavy-duty industrial operations. Industries that rely on continuous high-temperature heating, such as factories, workshops, and processing plants, benefit from the steady heat output and long burn times of our briquettes. Moreover, peat briquettes are cost-effective, reducing fuel expenses for large-scale operations.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col mb-4">
                            <div class="card">
                                <div class="card-body">
                                    <h3 class="d-inline-block" style="color: #ea6d00">#2.) Businesses: </h3>
                                    <p> Commercial businesses, including hotels, office buildings, and agricultural operations, can use peat briquettes to reduce their energy costs while also contributing to environmental sustainability. With their efficient burn and low emissions, Benex peat briquettes are an ideal fuel source for businesses looking for greener energy alternatives.</p>
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
                    <p>We understand that timely and safe transportation is critical to ensure your fuel supply is uninterrupted. Benex offers multiple transportation methods to ensure our peat briquettes reach our customers in the best possible condition:</p>
                </div>
                <div class="col-12">
                    <div class="row">
                        <div class="col mb-4">
                            <div class="card">
                                <div class="card-body">
                                    <h3 class="d-inline-block" style="color: #ea6d00">#1.) By Rail: </h3>
                                    <p>For bulk orders and long-distance transportation, we provide delivery by rail. This method is especially suitable for industrial and commercial customers looking to receive large quantities of briquettes efficiently.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col mb-4">
                            <div class="card">
                                <div class="card-body">
                                    <h3 class="d-inline-block" style="color: #ea6d00">#2.) By Ship: </h3>
                                    <p>Benex offers international shipping services for customers located overseas. Our logistics team ensures that the briquettes are securely packed and shipped to maintain their quality during transit.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col mb-4">
                            <div class="card">
                                <div class="card-body">
                                    <h3 class="d-inline-block" style="color: #ea6d00">#3.) By Road Transport: </h3>
                                    <p>For domestic and regional customers, we provide delivery by road. This ensures quick and reliable transportation of our peat briquettes to local businesses, households, and industries.</p>
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
                    <p>Benex understands that different customers have different storage needs, which is why we offer several packaging options for our peat briquettes:</p>
                </div>
                <div class="col-12">
                    <div class="row">
                        <div class="col mb-4">
                            <div class="card">
                                <div class="card-body">
                                    <h3 class="d-inline-block" style="color: #ea6d00">#.1) Bulk: </h3>
                                    <p>Our bulk packaging option is perfect for industrial customers who need large quantities of peat briquettes. Delivered in loose form, this option allows for easy handling and storage at your facility.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col mb-4">
                            <div class="card">
                                <div class="card-body">
                                    <h3 class="d-inline-block" style="color: #ea6d00">#.2) Palletized Bags: </h3>
                                    <p> For smaller-scale businesses and household consumers, we offer palletized bags that are easy to handle and store. These bags are neatly stacked on pallets for convenient transportation and storage, allowing you to purchase briquettes in manageable quantities.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col mb-4">
                            <div class="card">
                                <div class="card-body">
                                    <h3 class="d-inline-block" style="color: #ea6d00">#.3) Bagged on Pallets:</h3>
                                    <p> Our bagged-on-pallet option provides an efficient way to transport peat briquettes while keeping them protected from the elements. This format is perfect for customers who need a balanced combination of bulk quantities and ease of storage.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col mb-4">
                            <div class="card">
                                <div class="card-body">
                                    <h3 class="d-inline-block" style="color: #ea6d00">#.4) Big Bags:</h3>
                                    <p> For medium-scale operations or those who require a larger amount of briquettes without dealing with bulk packaging, we offer big bags. These bags are durable and easy to store, making them ideal for both commercial and industrial customers.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <hr>
                <div class="col mb-4">
                    <h4 class="heading4b" style="text-transform:uppercase">Why Choose Benex Peat Briquettes?</h4>
                </div>

                <div class="col-12">
                    <div class="row">
                        <div class="col mb-4">
                            <div class="card">
                                <div class="card-body">
                                    <h3 class="d-inline-block" style="color: #ea6d00">#1.) Sustainability: </h3>
                                    <p>Benex is committed to producing eco-friendly energy solutions. By choosing our peat briquettes, you are opting for a renewable fuel source that helps reduce the carbon footprint compared to traditional fossil fuels. Peat is a sustainable resource, and our production methods are designed to minimize environmental impact.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col mb-4">
                            <div class="card">
                                <div class="card-body">
                                    <h3 class="d-inline-block" style="color: #ea6d00">#2.) High Energy Efficiency: </h3>
                                    <p>Our peat briquettes are designed to provide maximum heat output with minimal waste. They burn longer and cleaner than many other types of solid fuel, making them an efficient choice for both domestic and industrial heating.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col mb-4">
                            <div class="card">
                                <div class="card-body">
                                    <h3 class="d-inline-block" style="color: #ea6d00">#3.) Cost-Effective: </h3>
                                    <p> Peat briquettes offer excellent value for money. With their high energy density, long burn times, and affordable pricing, our briquettes are a cost-effective alternative to more expensive fuels such as gas, oil, and electricity.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col mb-4">
                            <div class="card">
                                <div class="card-body">
                                    <h3 class="d-inline-block" style="color: #ea6d00">#4.) Easy Storage and Handling: </h3>
                                    <p> Our peat briquettes are compact, easy to store, and simple to handle. Whether you choose bulk or bagged packaging, you can store them safely and access them conveniently whenever needed.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col mb-4">
                            <div class="card">
                                <div class="card-body">
                                    <h3 class="d-inline-block" style="color: #ea6d00">#5.) Versatility: </h3>
                                    <p> Whether you're heating a small home or running a large-scale industrial facility, our peat briquettes are versatile enough to meet your needs. With multiple packaging options and two types to choose from, Benex offers the flexibility to suit your specific energy requirements.</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <p>Benex peat briquettes are a top-tier fuel solution designed to meet the demands of households, businesses, and industries alike. Whether you're looking for a cost-effective way to heat your home or need a sustainable fuel source for industrial use, our peat briquettes provide the reliable, high-performance heating solution you can count on.</p>

            </div>
        </div>
    </div>

@endsection
@push('script')
@endpush
