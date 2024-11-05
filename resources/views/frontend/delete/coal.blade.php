@extends('frontend.layouts.app')
@section('title', 'Benex')
@section('maincontent')

    <!-- hero -->
    <div class="col-12 hero coal">
        <div class="container col-xxl-12 px-4 py-5">
            <div class="row flex-lg-row align-items-center g-5 py-5">
                <div class="col-lg-6">
                    <div class="caption w-20">
                        <h1 class="display-5 fw-bold lh-1 mb-3 text-white">Coal</h1>
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
                <h5 class="heading2">Coal by Benex</h5>

                <div class="col">
                    <p style="text-align: left;">Benex is a trusted supplier of high-quality coal, catering to a wide range of customers, including household consumers, industries, and businesses. We offer a variety of coal types and sizes to ensure that you get the most efficient and cost-effective fuel for your heating or industrial energy needs. With our commitment to quality and reliability, Benex coal is the preferred choice for customers looking for a dependable energy source.</p>
                </div>

                <div class="col mb-4">
                    <h4 class="heading4b" style="text-transform:uppercase">Types of Coal</h4>
                </div>
                <div class="col">
                    <p>Benex offers a variety of coal types to suit different applications and fuel requirements:</p>
                </div>
                <div class="col-12">
                    <div class="row">
                        <div class="col-6 mb-4">
                            <div class="card">
                                <div class="card-body">
                                    <h3 class="d-inline-block" style="color: #ea6d00">#1.) D Coal:</h3>
                                    <p>Known for its high calorific value, D coal is ideal for both household heating and smaller-scale industrial applications. It burns steadily, providing consistent heat over an extended period.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 mb-4">
                            <div class="card">
                                <div class="card-body">
                                    <h3 class="d-inline-block" style="color: #ea6d00">#2.) DG Coal:</h3>
                                    <p class="d-inline">DG coal is a versatile type of coal, particularly well-suited for industrial furnaces and boilers. Its moderate ash content and steady heat output make it a cost-effective solution for a wide range of commercial uses.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col mb-4">
                            <div class="card">
                                <div class="card-body">
                                    <h3 class="d-inline-block" style="color: #ea6d00">#3.) 3B Coal:</h3>
                                    <p class="d-inline">This grade of coal is popular in both domestic and industrial sectors. With a balance between energy output and ash production, 3B coal is a reliable choice for customers who need efficient fuel without compromising on performance.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col mb-4">
                            <div class="card">
                                <div class="card-body">
                                    <h3 class="d-inline-block" style="color: #ea6d00">#4.) S Coal:</h3>
                                    <p class="d-inline">A premium-grade coal, S coal is known for its low sulfur content and high energy efficiency. It is particularly favored by industries that require high-temperature outputs and clean-burning fuels for their operations.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col mb-4">
                            <div class="card">
                                <div class="card-body">
                                    <h3 class="d-inline-block" style="color: #ea6d00">#4.) Other Coal Types:</h3>
                                    <p class="d-inline">In addition to our standard grades, we also offer other types of coal to meet specific requirements, ensuring that we have the right product for any application.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <hr>
                <div class="col mb-4">
                    <h4 class="heading4b" style="text-transform:uppercase">Particle Sizes</h4>
                </div>
                <div class="col mb-4"><p>Benex provides coal in a variety of particle sizes, tailored to meet the specific needs of our customers:</p></div>
                <div class="col-12">
                    <div class="row">
                        <div class="col mb-4">
                            <div class="card">
                                <div class="card-body">
                                    <h3 class="d-inline-block" style="color: #ea6d00">#1.) 0-5 mm:</h3>
                                    <p>Fine coal particles, ideal for use in small-scale heating systems such as pellet stoves or household boilers. This size is perfect for customers looking for easily combustible coal for home use.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col mb-4">
                            <div class="card">
                                <div class="card-body">
                                    <h3 class="d-inline-block" style="color: #ea6d00">#2.) 5-25 mm:</h3>
                                    <p>Medium-sized coal particles, suitable for a wide range of commercial applications, including small industrial furnaces and heating systems. This size ensures efficient combustion and a steady heat output.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col mb-4">
                            <div class="card">
                                <div class="card-body">
                                    <h3 class="d-inline-block" style="color: #ea6d00">#3.) 25-30 mm:</h3>
                                    <p>This size is often used in larger commercial and industrial heating systems. It offers an excellent balance between burn time and heat output, making it ideal for businesses that need reliable fuel for long-term heating.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col mb-4">
                            <div class="card">
                                <div class="card-body">
                                    <h3 class="d-inline-block" style="color: #ea6d00">#4.) 30-50 mm:</h3>
                                    <p>Large coal particles, designed for use in heavy-duty industrial furnaces and boilers. This size is ideal for industries that require sustained high temperatures over long periods.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col mb-4">
                            <div class="card">
                                <div class="card-body">
                                    <h3 class="d-inline-block" style="color: #ea6d00">#4.) 50-200 mm:</h3>
                                    <p> Extra-large coal pieces, perfect for use in large industrial applications, including power plants and manufacturing facilities. These coal sizes provide high energy output and extended burn times, ensuring efficient heating for large-scale operations.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col mb-4">
                            <div class="card">
                                <div class="card-body">
                                    <h3 class="d-inline-block" style="color: #ea6d00">#4.) Other Sizes:</h3>
                                    <p> In addition to the standard sizes, Benex also offers customized coal sizes to meet the unique requirements of our customers.</p>
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
                    <p>Benex coal is a versatile fuel source, suitable for a variety of sectors:</p>
                </div>
                <div class="col-12">
                    <div class="row">
                        <div class="col mb-4">
                            <div class="card">
                                <div class="card-body">
                                    <h3 class="d-inline-block" style="color: #ea6d00">#1.) Household Consumers: </h3>
                                    <p> For households that rely on coal as a primary or supplementary heating source, Benex offers clean-burning, efficient coal in various particle sizes. Whether you use a small coal stove or a boiler, our coal ensures consistent warmth and comfort throughout the winter months.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col mb-4">
                            <div class="card">
                                <div class="card-body">
                                    <h3 class="d-inline-block" style="color: #ea6d00">#2.) Industrial Use: </h3>
                                    <p>Benex coal is a reliable fuel option for industries that require high-energy output for their operations. From manufacturing plants to energy generation facilities, our coal delivers the performance needed to power large-scale industrial processes.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col mb-4">
                            <div class="card">
                                <div class="card-body">
                                    <h3 class="d-inline-block" style="color: #ea6d00">#3.) Businesses: </h3>
                                    <p> Commercial establishments, such as hotels, schools, and office buildings, can also benefit from using coal as an alternative or supplementary heating source. With Benex coal, businesses can lower their energy costs while maintaining consistent heating for their facilities.</p>
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
                    <p>At Benex, we understand that efficient and timely delivery is crucial for our customers. We offer a variety of transportation options to ensure that our coal reaches you in the best possible condition</p>
                </div>
                <div class="col-12">
                    <div class="row">
                        <div class="col mb-4">
                            <div class="card">
                                <div class="card-body">
                                    <h3 class="d-inline-block" style="color: #ea6d00">#1.) By Rail: </h3>
                                    <p>For large-volume orders, we provide delivery by rail, ensuring a reliable and efficient supply chain for businesses and industries that require significant quantities of coal.</p></p>
                                </div>
                            </div>
                        </div>

                        <div class="col mb-4">
                            <div class="card">
                                <div class="card-body">
                                    <h3 class="d-inline-block" style="color: #ea6d00">#2.) By Ship: </h3>
                                    <p>Benex coal is shipped to international destinations, offering a dependable supply of high-quality coal to customers around the world.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col mb-4">
                            <div class="card">
                                <div class="card-body">
                                    <h3 class="d-inline-block" style="color: #ea6d00">#3.) By Road Transport: </h3>
                                    <p>For regional and local deliveries, our road transport services ensure that your coal arrives promptly and safely, making sure there are no delays in your heating or energy needs.</p>
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
                    <p>Benex offers a variety of packaging options to accommodate the specific needs of our customers:</p>
                </div>
                <div class="col-12">
                    <div class="row">
                        <div class="col mb-4">
                            <div class="card">
                                <div class="card-body">
                                    <h3 class="d-inline-block" style="color: #ea6d00">#1.) Bulk: </h3>
                                    <p>Our bulk coal deliveries are ideal for industries and businesses that require large quantities of coal. Bulk packaging ensures easy storage and handling for large-scale operations.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col mb-4">
                            <div class="card">
                                <div class="card-body">
                                    <h3 class="d-inline-block" style="color: #ea6d00">#2.) Bagged on Pallets: </h3>
                                    <p>For customers who prefer easier handling and storage, we offer bagged coal neatly arranged on pallets. This packaging is perfect for both household consumers and smaller businesses, making it easy to store and use coal as needed.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col mb-4">
                            <div class="card">
                                <div class="card-body">
                                    <h3 class="d-inline-block" style="color: #ea6d00">#3.) Big Bags: </h3>
                                    <p>Benex also offers coal in large bags, which are perfect for businesses and industries that need significant quantities of coal but do not have the infrastructure to handle bulk shipments. Big bags provide a convenient and efficient solution for storing and transporting coal..</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <hr>
                <div class="col mb-4">
                    <h4 class="heading4b" style="text-transform:uppercase">Why Choose Benex Coal ?</h4>
                </div>

                <div class="col-12">
                    <div class="row">
                        <div class="col mb-4">
                            <div class="card">
                                <div class="card-body">
                                    <h3 class="d-inline-block" style="color: #ea6d00">#1.) Consistent Quality: </h3>
                                    <p>Benex coal undergoes rigorous quality control to ensure that every batch meets industry standards for calorific value, ash content, and moisture levels. This means you get coal that burns efficiently and delivers consistent heat.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col mb-4">
                            <div class="card">
                                <div class="card-body">
                                    <h3 class="d-inline-block" style="color: #ea6d00">#2.) Sustainability: </h3>
                                    <p>Benex is committed to offering coal that is responsibly sourced, ensuring minimal environmental impact. We strive to provide fuel solutions that balance energy needs with sustainability.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col mb-4">
                            <div class="card">
                                <div class="card-body">
                                    <h3 class="d-inline-block" style="color: #ea6d00">#3.) Cost-Effective: </h3>
                                    <p> Our coal is competitively priced, offering excellent value for money. Whether you are a household consumer or a large industrial business, Benex coal provides a cost-effective energy solution.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col mb-4">
                            <div class="card">
                                <div class="card-body">
                                    <h3 class="d-inline-block" style="color: #ea6d00">#4.) Reliable Supply Chain: </h3>
                                    <p>With our efficient transportation and packaging options, Benex ensures that you receive your coal on time and in perfect condition, no matter the size of your order.</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <p>Benex coal is your trusted partner for efficient, high-quality fuel. Whether you need coal for household heating, industrial use, or commercial energy needs, Benex has the right product to meet your requirements. Contact us today to learn more about our coal products and how they can benefit your operations.</p>

            </div>
        </div>
    </div>

@endsection
@push('script')
@endpush
