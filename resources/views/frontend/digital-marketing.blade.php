@extends('frontend.layouts.app')
@section('title', 'Webixytech')
@section('maincontent')
{{-- hero --}}
<section class="hero2">
    <div class="container position-relative py-4 zi-10">
        <div class="row">
            <div class="col-lg-8 col-12">
                <h1 class="fs36 text-white mb-4">Digital Marketing Services</h1>
                <p class="ff-poppins fs18 text-white mb-4">Attain a top brand position with strategic &amp; best digital marketing services in India from industry leaders.Webixytech is one of the leading digital marketing company you can trust on. Get comprehensive services package in one place.</p>
                <span class="col-12 pill-list">
                    <span class="item"><img src="{{asset('images/seoicon.webp')}}" alt="icon" /> SEO</span>
                    <span class="item"><img src="{{asset('images/Pay-Per-Click.webp')}}" alt="icon" />PPC</span>
                    <span class="item"><img src="{{asset('images/SMO.webp')}}" alt="icon"/>SMO</span>
                    <span class="item"><img src="{{asset('images/ORM.webp')}}" alt="icon"/>ORM</span>
                    <span class="item"><img src="{{asset('images/emailmarketingintegration.webp')}}" alt="icon" />Email Marketing</span>
                    <span class="item"><img src="{{asset('images/Predictive-Analytics@1x.webp')}}" />Google Analytics</span>
                </span>
            </div>
            <div class="col-lg-4 col-12">
                <div class="card p-4 border-1" style="border-radius: 10px;">
                    <div class="card-body">
                        <h3 class="fs26">Contact Us</h3>
                        <div class="row">
                            <div class="col-lg-12 col-12 my-2">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Full Name *">
                                  </div>
                            </div>
                            <div class="col-lg-12 col-12 my-2">
                                <div class="form-group">
                                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Business Email Address *">
                                  </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-12 my-2">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Phone Number *">
                                  </div>
                            </div>
                            <div class="col-lg-12 col-12 my-2">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Organization /Institution *">
                                  </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-12 my-2">
                                <div class="form-group">
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Message *"></textarea>
                                  </div>
                            </div>
                        </div>
                        <div class="row mt-3">
                        <button class="button9 col-lg-4 col-8">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- hero --}}

{{-- boost --}}
<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-12">
                <h2 class="fs44">Get Significant Boost to Your Business with Digital Marketing Company</h2>
                <p class="fs18 ff-poppins">Webixytech is the right strategic digital marketing agency to provide you with a solution that brings the desired
                    digital presence to your business. We empower your digital marketing website to get desired engagement, sales, and overall revenue across different platforms.<br>
                    From lead generation and brand awareness to customer acquisition and retention, our digital marketing company does it all for you.</p>
            </div>
            <div class="col-lg-6 col-12">
                <div class="row">
                    <div class="col-lg-6 col-12 mb-3">
                        <div class="card p-3" style="border-radius: 10px;">
                            <div class="card-body pb-2">
                                <img width="50" height="50"  src="{{asset('images/experience.webp')}}" style="background: var(--gradient4);padding:10px;border-radius:10px;margin-bottom:10px;"/>
                                <h3 class="fs42"><span class="count" data-count="22">22</span> <span>+</span></h3>
                                <p class="fs16 fw-bold m-0" class="text-white">Years of Expertise</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-12 mb-3">
                        <div class="card p-3" style="border-radius: 10px;">
                            <div class="card-body pb-2">
                                <img width="50" height="50"  src="{{asset('images/Top-Brands.webp')}}" style="background: var(--gradient4);padding:10px;border-radius:10px;margin-bottom:10px;"/>
                                <h3 class="fs42"><span class="count" data-count="22">50</span> <span>+</span></h3>
                                <p class="fs16 fw-bold m-0" class="text-white">Global Top Brands &amp; Enterprises Served</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-12 mb-3">
                        <div class="card p-3" style="border-radius: 10px;">
                            <div class="card-body pb-2">
                                <img width="50" height="50"  src="{{asset('images/stat-3.webp')}}" style="background: var(--gradient4);padding:10px;border-radius:10px;margin-bottom:10px;"/>
                                <h3 class="fs42"><span class="count" data-count="22">300</span> <span>+</span></h3>
                                <p class="fs16 fw-bold m-0" class="text-white">Industry-best tech professionals</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-12 mb-3">
                        <div class="card p-3" style="border-radius: 10px;">
                            <div class="card-body pb-2">
                                <img width="50" height="50"  src="{{asset('images/Happy-client.webp')}}" style="background: var(--gradient4);padding:10px;border-radius:10px;margin-bottom:10px;"/>
                                <h3 class="fs42"><span class="count" data-count="22">600</span> <span>+</span></h3>
                                <p class="fs16 fw-bold m-0" class="text-white">Happy Clients</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- boost --}}

{{-- happy clients --}}
<section id="happyclients" class="col-12">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-12">
                <h3 class="fs44 text-center">Our Happy Clients</h3>
            </div>
            <div class="col-lg-12 col-12 ourclients-grid">
                <div class="row">
                    <div class="col-lg-3 col-12 item"><img width="579" height="168" src="https://www.orangemantra.com/wp-content/uploads/2024/05/Group-16-1.png" alt="Clients" class="img-fluid" /></div>
                    <div class="col-lg-3 col-12 item"><img width="579" height="168" src="https://www.orangemantra.com/wp-content/uploads/2024/05/Group-16-1.png" alt="Clients" class="img-fluid" /></div>
                    <div class="col-lg-3 col-12 item"><img width="681" height="288" src="https://www.orangemantra.com/wp-content/uploads/2024/05/Nestle-1.png" alt="Clients" class="img-fluid"></div>
                    <div class="col-lg-3 col-12 item"><img width="681" height="288" src="https://www.orangemantra.com/wp-content/uploads/2024/05/Nestle-1.png" alt="Clients" class="img-fluid"></div>
                    <div class="col-lg-3 col-12 item"><img width="681" height="288" src="https://www.orangemantra.com/wp-content/uploads/2024/05/ikea.png" alt="Clients" class="img-fluid"/></div>
                    <div class="col-lg-3 col-12 item"><img width="681" height="288" src="https://www.orangemantra.com/wp-content/uploads/2024/05/ikea.png" alt="Clients" class="img-fluid"/></div>
                    <div class="col-lg-3 col-12 item"><img width="681" height="288" src="https://www.orangemantra.com/wp-content/uploads/2024/05/hero.png" alt="Clients" class="img-fluid"/></div>
                    <div class="col-lg-3 col-12 item"><img width="681" height="288" src="https://www.orangemantra.com/wp-content/uploads/2024/05/hero.png" alt="Clients" class="img-fluid"/></div>
                    <div class="col-lg-3 col-12 item"><img width="681" height="288" src="https://www.orangemantra.com/wp-content/uploads/2024/05/Haldiram.png" alt="Clients" class="img-fluid"/></div>
                    <div class="col-lg-3 col-12 item"><img width="681" height="288" src="https://www.orangemantra.com/wp-content/uploads/2024/05/Haldiram.png" alt="Clients" class="img-fluid"/></div>
                    <div class="col-lg-3 col-12 item"><img width="681" height="288" src="https://www.orangemantra.com/wp-content/uploads/2024/05/EIcher.png" alt="Clients" class="img-fluid"/></div>
                    <div class="col-lg-3 col-12 item"><img width="681" height="288" src="https://www.orangemantra.com/wp-content/uploads/2024/05/EIcher.png" alt="Clients" class="img-fluid"/></div>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- happy clients --}}

{{-- be found --}}
<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-12">
                <h2 class="fs36">Be found, grow, and accelerate business digitally—extensively!</h2>
                <p class="fs16 ff-poppins">Embracing digitization is just halfway to business success. It is
                    also imperative to extend your online marketplace reach. Thus,
                    reap the benefits of ROI-driven digital marketing solutions. As a
                    thriving digital marketing company, we offer you strategic,
                    streamlined, and success-oriented end-to-end marketing services to
                    attain substantial results. Therefore, leverage the unique and
                    lucrative online marketing ideas generated by our digital
                    marketing experts. And experience your business growth ahead.</p>
            </div>
            <div class="col-lg-5 col-12 align-self-center">
                <img class="img-fluid rounded border-5" src="https://www.orangemantra.com/wp-content/uploads/2023/11/grow-scaled-1.jpg" alt="Grow Scaled" />
            </div>
        </div>
    </div>
</section>
{{-- be found --}}

{{-- 360 --}}
<section id="s360s">
    <div class="container">
        <div class="col-12 text-center">
            <h3 class="fs36">360- Degree Digital Marketing Services for Companies of All Kinds</h3>
            <p class="ff-poppins">As your value-driven digital marketing agency in India, we are here
                to meet all your brand’s advertising needs with our expert-level
                services. Our extensive services for your digital marketing website will allow you to grow your business immensely. </p>
        </div>
        <div class="row">
            <div class="col-lg-4 col-12 my-3">
                <div class="card p-3" style="border-radius: 10px;">
                    <div class="card-body">
                        <span class="d-inline-block m-auto mb-3" style="background:var(--color-green);padding:10px;border-radius:10px;">
                            <img width="35" height="35" src="{{asset('images/Content-Marketing.webp')}}" style="filter:brightness(0) invert(1);"/>
                        </span>
                        <h4>Content Marketing</h4>
                        <p class="fs14">Let the experts create out-of-the-box content for your website,
                            mobile app, ad campaigns, and social media. The informative
                            content defines your brand and is effectively marketed by our
                            experts to create a unique persona.</p>
                            <a class="cta" href="/services/content-marketing-services/">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-12 my-3">
                <div class="card p-3" style="border-radius: 10px;">
                    <div class="card-body">
                        <span class="d-inline-block m-auto mb-3" style="background:var(--color-green);padding:10px;border-radius:10px;">
                            <img width="35" height="35" src="{{asset('images/Content-Marketing.webp')}}" style="filter:brightness(0) invert(1);"/>
                        </span>
                        <h4>Content Marketing</h4>
                        <p class="fs14">Let the experts create out-of-the-box content for your website,
                            mobile app, ad campaigns, and social media. The informative
                            content defines your brand and is effectively marketed by our
                            experts to create a unique persona.</p>
                            <a class="cta" href="/services/content-marketing-services/">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-12 my-3">
                <div class="card p-3" style="border-radius: 10px;">
                    <div class="card-body">
                        <span class="d-inline-block m-auto mb-3" style="background:var(--color-green);padding:10px;border-radius:10px;">
                            <img width="35" height="35" src="{{asset('images/Content-Marketing.webp')}}" style="filter:brightness(0) invert(1);"/>
                        </span>
                        <h4>Content Marketing</h4>
                        <p class="fs14">Let the experts create out-of-the-box content for your website,
                            mobile app, ad campaigns, and social media. The informative
                            content defines your brand and is effectively marketed by our
                            experts to create a unique persona.</p>
                            <a class="cta" href="/services/content-marketing-services/">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-12 my-3">
                <div class="card p-3" style="border-radius: 10px;">
                    <div class="card-body">
                        <span class="d-inline-block m-auto mb-3" style="background:var(--color-green);padding:10px;border-radius:10px;">
                            <img width="35" height="35" src="{{asset('images/Content-Marketing.webp')}}" style="filter:brightness(0) invert(1);"/>
                        </span>
                        <h4>Content Marketing</h4>
                        <p class="fs14">Let the experts create out-of-the-box content for your website,
                            mobile app, ad campaigns, and social media. The informative
                            content defines your brand and is effectively marketed by our
                            experts to create a unique persona.</p>
                            <a class="cta" href="/services/content-marketing-services/">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-12 my-3">
                <div class="card p-3" style="border-radius: 10px;">
                    <div class="card-body">
                        <span class="d-inline-block m-auto mb-3" style="background:var(--color-green);padding:10px;border-radius:10px;">
                            <img width="35" height="35" src="{{asset('images/Content-Marketing.webp')}}" style="filter:brightness(0) invert(1);"/>
                        </span>
                        <h4>Content Marketing</h4>
                        <p class="fs14">Let the experts create out-of-the-box content for your website,
                            mobile app, ad campaigns, and social media. The informative
                            content defines your brand and is effectively marketed by our
                            experts to create a unique persona.</p>
                            <a class="cta" href="/services/content-marketing-services/">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-12 my-3">
                <div class="card p-3" style="border-radius: 10px;">
                    <div class="card-body">
                        <span class="d-inline-block m-auto mb-3" style="background:var(--color-green);padding:10px;border-radius:10px;">
                            <img width="35" height="35" src="{{asset('images/Content-Marketing.webp')}}" style="filter:brightness(0) invert(1);"/>
                        </span>
                        <h4>Content Marketing</h4>
                        <p class="fs14">Let the experts create out-of-the-box content for your website,
                            mobile app, ad campaigns, and social media. The informative
                            content defines your brand and is effectively marketed by our
                            experts to create a unique persona.</p>
                            <a class="cta" href="/services/content-marketing-services/">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-12 my-3">
                <div class="card p-3" style="border-radius: 10px;">
                    <div class="card-body">
                        <span class="d-inline-block m-auto mb-3" style="background:var(--color-green);padding:10px;border-radius:10px;">
                            <img width="35" height="35" src="{{asset('images/Content-Marketing.webp')}}" style="filter:brightness(0) invert(1);"/>
                        </span>
                        <h4>Content Marketing</h4>
                        <p class="fs14">Let the experts create out-of-the-box content for your website,
                            mobile app, ad campaigns, and social media. The informative
                            content defines your brand and is effectively marketed by our
                            experts to create a unique persona.</p>
                            <a class="cta" href="/services/content-marketing-services/">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-12 my-3">
                <div class="card p-3" style="border-radius: 10px;">
                    <div class="card-body">
                        <span class="d-inline-block m-auto mb-3" style="background:var(--color-green);padding:10px;border-radius:10px;">
                            <img width="35" height="35" src="{{asset('images/Content-Marketing.webp')}}" style="filter:brightness(0) invert(1);"/>
                        </span>
                        <h4>Content Marketing</h4>
                        <p class="fs14">Let the experts create out-of-the-box content for your website,
                            mobile app, ad campaigns, and social media. The informative
                            content defines your brand and is effectively marketed by our
                            experts to create a unique persona.</p>
                            <a class="cta" href="/services/content-marketing-services/">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-12 my-3">
                <div class="card p-3" style="border-radius: 10px;">
                    <div class="card-body">
                        <span class="d-inline-block m-auto mb-3" style="background:var(--color-green);padding:10px;border-radius:10px;">
                            <img width="35" height="35" src="{{asset('images/Content-Marketing.webp')}}" style="filter:brightness(0) invert(1);"/>
                        </span>
                        <h4>Content Marketing</h4>
                        <p class="fs14">Let the experts create out-of-the-box content for your website,
                            mobile app, ad campaigns, and social media. The informative
                            content defines your brand and is effectively marketed by our
                            experts to create a unique persona.</p>
                            <a class="cta" href="/services/content-marketing-services/">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- 360 --}}

{{-- explore --}}
<section id="explore">
    <div class="container">
        <div class="col-lg-12 text-center"><h3 class="fs36 text-white">Explore The Projects of Our Digital Marketing Agency</h3></div>
        <div class="row pt-5">
            <div class="col-lg-6 col-12">
                <h3 class="fs32 text-white">SEO for USA-Based Home Decor Brand to Secure Revenue &amp; Drive Conversion</h3>
                <p class="ff-poppins fs16 text-white">Union Home Furniture bring you the latest styles furniture,
                    priced right, so you can create spaces that reflect your
                    personality. Built on the values of modern design with
                    contemporary touch, Union Home Furniture offer home
                    furnishings for your bedroom, living room and office spaces at
                    affordable pricing. They have a strong offline presence and
                    were looking to improve digital presence with SEO.
                    Why Your Business Needs Digital Marketing Services?
                    Webixytech was the perfect digital marketing service
                    provider to their business expansion on digital front.</p>
            </div>
            <div class="col-lg-6 col-12 align-self-center">
                <img src="https://www.orangemantra.com/wp-content/uploads/2023/11/SEO-for-USA-Based-Home-Decor-Brand-to-Secure-Revenue-Drive-Conversion@2x.png" class="img-fluid p-5"/>
            </div>
        </div>
    </div>
</section>
{{-- explore --}}

{{-- tools --}}
<section id="s360s">
    <div class="container">
        <div class="col-12 text-center">
            <h3 class="fs36">Popular Tools that Power Our Digital Marketing Services</h3>
            <p class="ff-poppins">Our digital marketing agency makes best use of latest tools &amp; technologies to
                get your business goals. For developing digital marketing websites we incorporate trending technologies that help your platform to perform better resulting in an increase in traffic on your website. </p>
        </div>
        <div class="row">
            <div class="col-lg-4 col-12 my-3">
                <div class="card p-3 text-center" style="border-radius: 10px;">
                    <div class="card-body">
                        <span class="d-inline-block m-auto mb-3">
                            <img width="50" height="50" src="{{asset('images/semrush.png')}}">
                        </span>
                        <h4>Semrush</h4>
                        <p class="fs14">An all-in-one digital marketing tool to perform a comprehensive
                            technical SEO audit and improve SEO strategy for better business
                            outcomes and growth.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-12 my-3">
                <div class="card p-3 text-center" style="border-radius: 10px;">
                    <div class="card-body">
                        <span class="d-inline-block m-auto mb-3">
                            <img width="50" height="50" src="{{asset('images/Ahrefs.avif')}}">
                        </span>
                        <h4>Ahrefs</h4>
                        <p class="fs14">Exclusively designed for digital marketers, this software
                            contains tools for site audits, competitor analysis, keyword
                            research, link building, and rank tracking.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-12 my-3">
                <div class="card p-3 text-center" style="border-radius: 10px;">
                    <div class="card-body">
                        <span class="d-inline-block m-auto mb-3">
                            <img width="50" height="50" src="{{asset('images/google-analytics.avif')}}">
                        </span>
                        <h4>Google Analytics</h4>
                        <p class="fs14">The premier choice of digital marketing experts as it provides a
                            ton of actionable insights into how your audience is engaging
                            with your website.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-12 my-3">
                <div class="card p-3 text-center" style="border-radius: 10px;">
                    <div class="card-body">
                        <span class="d-inline-block m-auto mb-3">
                            <img width="50" height="50" src="{{asset('images/screaming-frog.avif')}}">
                        </span>
                        <h4>Screaming Frog SEO</h4>
                        <p class="fs14">A user-friendly SEO crawling tool that provides useful
                            SEO-related information about your site that you can use to
                            tweak your SEO strategy strategy strategy strategy strategy.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-12 my-3">
                <div class="card p-3 text-center" style="border-radius: 10px;">
                    <div class="card-body">
                        <span class="d-inline-block m-auto mb-3">
                            <img width="50" height="50" src="{{asset('images/google-trends.avif')}}">
                        </span>
                        <h4>Google Trends</h4>
                        <p class="fs14">A tool that helps us provide the best digital marketing service
                            to identify trends and popular search queries in Google Search
                            across various locations and languages.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-12 my-3">
                <div class="card p-3 text-center" style="border-radius: 10px;">
                    <div class="card-body">
                        <span class="d-inline-block m-auto mb-3">
                            <img width="50" height="50" src="{{asset('images/canva-1.avif')}}">
                        </span>
                        <h4>Canva</h4>
                        <p class="fs14">A great tool for designing professional-looking graphics. It
                            offers a vast collection of templates that can be used to create
                            social posts, infographics, CTA buttons, etc.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- tools --}}

{{-- why --}}
<section id="s360s">
    <div class="container">
        <div class="col-12 text-center">
            <h3 class="fs36">Why Your Business Needs Digital Marketing Services?</h3>
        </div>
        <div class="row">
            <div class="col-lg-4 col-12 my-3">
                <div class="card p-3 text-center" style="border-radius: 10px;">
                    <div class="card-body">
                        <span class="d-inline-block m-auto mb-3">
                            <img width="50" height="50" src="{{asset('images/Support-Brand-Value.webp')}}">
                        </span>
                        <h4>Support brand value</h4>
                        <p class="fs14">Digital marketing firms assist your company in expanding its
                            reach and making your offerings stand out in a competitive
                            market.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-12 my-3">
                <div class="card p-3 text-center" style="border-radius: 10px;">
                    <div class="card-body">
                        <span class="d-inline-block m-auto mb-3">
                            <img width="50" height="50" src="{{asset('images/Boost-User-Relationship.png')}}">
                        </span>
                        <h4>Boost user relationships</h4>
                        <p class="fs14">Our analytics helps to dig out the crucial and concise user
                            needs and help you target the potential audience on the
                            receiving end.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-12 my-3">
                <div class="card p-3 text-center" style="border-radius: 10px;">
                    <div class="card-body">
                        <span class="d-inline-block m-auto mb-3">
                            <img width="50" height="50" src="{{asset('images/Web-Traffic.webp')}}">
                        </span>
                        <h4>Drive more traffic</h4>
                        <p class="fs14">Digital marketing agency helps to propel multiple cross-channel
                            business opportunities to enable exceptional user experience.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-12 my-3">
                <div class="card p-3 text-center" style="border-radius: 10px;">
                    <div class="card-body">
                        <span class="d-inline-block m-auto mb-3">
                            <img width="50" height="50" src="{{asset('images/Stay-On-Top.webp')}}">
                        </span>
                        <h4>Stay on top</h4>
                        <p class="fs14">These marketing services allow you to use multiple channels with
                            a consistent funnel to check for seamless connectivity.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-12 my-3">
                <div class="card p-3 text-center" style="border-radius: 10px;">
                    <div class="card-body">
                        <span class="d-inline-block m-auto mb-3">
                            <img width="50" height="50" src="{{asset('images/Increase-in-competition.webp')}}">
                        </span>
                        <h4>Increase in competition</h4>
                        <p class="fs14">Digital marketing experts help small to mid-sized enterprises to
                            compete head-to-head with multinational firms.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-12 my-3">
                <div class="card p-3 text-center" style="border-radius: 10px;">
                    <div class="card-body">
                        <span class="d-inline-block m-auto mb-3">
                            <img width="50" height="50" src="{{asset('images/Improve-conversion-rate.webp')}}">
                        </span>
                        <h4>Improve conversion rates</h4>
                        <p class="fs14">Attract numerous leads, businesses, conversions, opportunities,
                            and users to your brand products and services.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- why --}}

{{-- how --}}
<section id="s360s">
    <div class="container">
        <div class="col-12 text-center">
            <h3 class="fs36">How to Choose a Value-Driven Digital Marketing Agency For your Project</h3>
        </div>
        <div class="row">
            <div class="col-lg-4 col-12 my-3">
                <div class="card p-3 " style="border-radius: 10px;">
                    <div class="card-body px-3">
                        <span class="d-inline-block m-auto mb-3">
                            <img width="50" height="50" src="{{asset('images/Reliable-Services2.webp')}}">
                        </span>
                        <h4>Reliable Services</h4>
                        <p class="fs14">Before you select a reliable digital marketing agency for your firm also check for their variety of services.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-12 my-3">
                <div class="card p-3 " style="border-radius: 10px;">
                    <div class="card-body px-3">
                        <span class="d-inline-block m-auto mb-3">
                            <img width="50" height="50" src="{{asset('images/credible-Solutions.webp')}}">
                        </span>
                        <h4>Credible Solutions</h4>
                        <p class="fs14">When you have the list of agencies, thoroughly read their reviews and testimonials to evaluate their reliability.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-12 my-3">
                <div class="card p-3 " style="border-radius: 10px;">
                    <div class="card-body px-3">
                        <span class="d-inline-block m-auto mb-3">
                            <img width="50" height="50" src="{{asset('images/compatible-partner.png')}}">
                        </span>
                        <h4>Compatible Partner</h4>
                        <p class="fs14">Evaluate their ethics if it aligns with your business needs. So, you should check for their industrial experience.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-12 my-3">
                <div class="card p-3" style="border-radius: 10px;">
                    <div class="card-body px-3">
                        <span class="d-inline-block m-auto mb-3">
                            <img width="50" height="50" src="{{asset('images/mobilebenefits5.png')}}">
                        </span>
                        <h4>Extensive Support</h4>
                        <p class="fs14">Check if the digital marketing services provider also offers continuous support and maintenance.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-12 my-3">
                <div class="card p-3" style="border-radius: 10px;">
                    <div class="card-body px-3">
                        <span class="d-inline-block m-auto mb-3">
                            <img width="50" height="50" src="{{asset('images/mobilebenefits2.png')}}">
                        </span>
                        <h4>Security Policy</h4>
                        <p class="fs14">You should check how firms should secure your private data and maintain an NDA policy.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-12 my-3">
                <div class="card p-3 text-center" style="border-radius: 10px;">
                    <div class="card-body">
                            &nbsp;
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- how --}}

{{-- industries --}}
<section id="industries">
    <style>
        #owl-carousel4 .item {
    margin: 10px;
    background: red;
}
.owl-carousel4 .owl-item .item{margin: 10px;display: inline-block;border: solid 1px #ccc;border-radius: 10px;overflow: hidden;}
#owl-carousel4 .item img {
    display: block;
    height: auto;
}

.owl-carousel4 .owl-item {
    min-height: 1px;
    float: left;
    -webkit-backface-visibility: hidden;
    -webkit-touch-callout: none;
}
.owl-carousel4 .owl-nav{display: none !important;}
    </style>
    <div class="container-fluid px-4">
        <div class="row">
            <div class="col-lg-3 col-12">
                <h3 class="fs32">Industries We Cater</h3>
                <p class="fs16">Our digital marketing solutions meet needs of various industries. With advanced techniques our digital marketing agency help in Healthcare, Finance, Education, Retail, Travel and Automotive to enhance customer engagement, streamline operations and drive growth.</p>
            </div>
            <div class="col-lg-8 col-12">
                <div class="owl-carousel4 overflow-hidden">
                    <div class="item"><img src="{{asset('images/In-manufacturing.webp')}}" class="img-fluid"/></div>
                    <div class="item"><img src="{{asset('images/In-healthcare.webp')}}" class="img-fluid"/></div>
                    <div class="item"><img src="{{asset('images/In-entertainment.webp')}}" class="img-fluid"/></div>
                    <div class="item"><img src="{{asset('images/In-realestate.webp')}}" class="img-fluid"/></div>
                    <div class="item"><img src="{{asset('images/Logistics-Fleet.avif')}}" class="img-fluid"/></div>
                    <div class="item"><img src="{{asset('images/In-travel.webp')}}" class="img-fluid"/></div>
                    <div class="item"><img src="{{asset('images/In-Fintech.webp')}}" class="img-fluid"/></div>
                    <div class="item"><img src="{{asset('images/In-bank.webp')}}" class="img-fluid"/></div>
                  </div>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- industries --}}

{{-- process --}}
<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-12">
                <h3 class="fs32">Step By Step Process At Our Digital Marketing Company</h3>
                <p class="ff-poppins">At Webixytech, we offer digital marketing services with a
                    proper step by step process. Our marketing experts help to
                    integrate your unique business needs and get feedback at every
                    interval.</p>
            </div>
            <div class="col-lg-6 col-12">
                <div class="process">
                    <ul>
                        <li>
                            <img src="{{asset('images/Research.svg')}}" class="img-fluid" />
                            <span>
                                <h4>Research</h4>
                                <p>At this stage, all the information is collected that will be
                                    required to make decision. Information collected is the raw
                                    material to build strategy &amp; create campaign.</p>
                            </span>
                        </li>
                        <li>
                            <img src="{{asset('images/Promote.svg')}}" class="img-fluid" />
                            <span>
                                <h4>Promote</h4>
                                <p>Once goal is defined, we will start promoting campaigns
                                    developed. The more you engage traffic to your website, the
                                    higher is the conversion rate.</p>
                            </span>
                        </li>
                        <li>
                            <img src="{{asset('images/Analyze.svg')}}" class="img-fluid" />
                            <span>
                                <h4>Analyze</h4>
                                <p>Once campaigns are start promoting, it’s time to start
                                    monitoring their performance. Analyzing is important to keep a
                                    check on the outcome of digital marketing work.</p>
                            </span>
                        </li>
                        <li>
                            <img src="{{asset('images/Optimize.svg')}}" class="img-fluid" />
                            <span>
                                <h4>Optimize</h4>
                                <p>After deep analysis, changes are performed within the
                                    campaign. Changes could be in the form of content &amp; design for
                                    desired business outcome.</p>
                            </span>
                        </li>
                        <li>
                            <img src="{{asset('images/Deploy-Run.svg')}}" class="img-fluid" />
                            <span>
                                <h4>Deploy &amp; Run</h4>
                                <ul>
                                    <li>Operational readiness</li>
                                    <li>Performance Validation</li>
                                    <li>Post-deployment Validation</li>
                                    <li>Continuous improvement</li>
                                    </ul>
                            </span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- process --}}

{{-- why choose us --}}
<section id="whychooseus">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-7 col-12">
                <div class="col-12" style="background: #45187e;
            width: 100%;
            height: 100%;
            padding: 50px 82px 0px 70px;
            border-top-right-radius: 60px;
            position: relative;
            z-index: 3;">
        <h3 class="text-white fs36">Why Webixytech as Your Extended Digital Marketing Team</h3>
        <p class="text-white ff-poppins">As a leading digital marketing company, Webixytech understands every unique business requirement. Because our skilled digital marketing experts focus to grow your digital success. And craft customized solutions to increase conversion opportunities.</p>
                </div>
            </div>
            <div class="col-lg-5 col-12">
                <style>
                    .owl-carousel5 .item {margin: 10px;background: #fff;padding: 30px;}
                    .owl-carousel5 .owl-item .item{margin: 10px;display: inline-block;border: solid 1px #ccc;border-radius: 10px;overflow: hidden;width: 90%;}
                    .owl-carousel5 .item img {display: block;height: auto;width: 100%; }
                    .owl-carousel5 .owl-item {min-height: 1px;float: left;-webkit-backface-visibility: hidden;-webkit-touch-callout: none;}
                    .owl-carousel5 .owl-nav{display: none !important;}
                    .owl-carousel5 .owl-item .item span{font-size: 75px;
    font-style: normal;
    font-weight: 800;
    line-height: normal;
    background: linear-gradient(90deg, #09095B 6.14%, #6F134A 83.37%);
    background-clip: text;
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    margin-top: 10px;
    opacity: 0.5;}
                    .owl-carousel5 .owl-item .item h4{color: #000;
    font-size: 24px;
    font-style: normal;
    font-weight: 600;
    line-height: 137.523%;}
                    .owl-carousel5 .owl-item .item p{    color: #000;
    font-size: 18px;
    font-style: normal;
    font-weight: 400;
    line-height: 153.523%;
}
                </style>
                <div class="inner" style="position: relative;z-index: 3;margin-left: -100px;margin-top: 30px;">
                    <div class="owl-carousel5 overflow-hidden">
                        <div class="item">
                            <span>01</span>
                            <h4>Custom Marketing Framework</h4>
                            <p>Our digital marketing company ensures to gather your firm’s needs and buyers’ personas. We review your digital marketing website and the strategies and measure your online presence. And these KPIs, brand value, and user experience help us to examine your pitfalls. So, we create a structured marketing framework to optimize every digital touchpoint.</p>
                        </div>
                        <div class="item">
                            <span>02</span>
                            <h4>Data-focused Services</h4>
                            <p>Online business works on online data collected from different sources. So, our services recognize data as a critical factor in the success of any business. We conduct an in-depth analysis of your brand’s strengths, weaknesses, threats, and opportunities. And then, we create customized metrics to produce action-oriented results.</p>
                        </div>
                        <div class="item">
                            <span>03</span>
                            <h4>Omnichannel Flow</h4>
                            <p>Online businesses must establish an omnichannel presence to engage a large audience. Users expect a personalized experience across all channels. So, we conduct user analysis and assess your company’s current needs. And we create an omnichannel personalized solution to boost ROI and brand reputation.</p>
                        </div>
                        <div class="item">
                            <span>04</span>
                            <h4>Industrial Experience</h4>
                            <p>We provide industry-specific digital marketing experts with years of experience. So, they monitor trends, business strategies, and workflows as per industry standards. And the information gathered assists them in strategizing your company’s SEO guidelines. Our digital marketing agency will provide marketing solutions to improve your reach.</p>
                        </div>
                        <div class="item">
                            <span>05</span>
                            <h4>Campaign Evaluation</h4>
                            <p>Our professional team monitors every stage of digital marketing of your firm. Plus, regular monitoring metrics and strategies will help to get the results. We ensure to use smart tools like Google Analytics to measure online metrics. And implement our winning approach to get the potential audience towards your products.</p>
                        </div>
                        <div class="item">
                            <span>06</span>
                            <h4>Competitive Pricing</h4>
                            <p>As one of the best digital marketing services in India, we offer result-driven services. We look at your company’s online presence, as well as its strategies and other metrics. As a result, it gives us an idea of your roadblocks and how to overcome them. And you get full <a href="/services/search-engine-optimization/">SEO services</a> for significant benefits without breaking the bank.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- why choose us --}}

{{-- faq --}}
<section id="faq">
    <div class="container">
        <h3 class="text-center fs36 mb-4">Frequently Asked Question</h3>
        <div class="col-lg-12">
            <div class="accordion" id="accordionExample2">
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
What do digital marketing experts do?
                    </button>
                  </h2>
                  <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample" style="">
                    <div class="accordion-body">
                        Digital marketing experts understand how to build and deploy
                        effective digital marketing strategies. A digital marketing website marketer understands how to connect with an online audience. They
                        ensure that your brand engages with your target customers
                        right from the first point of contact to after-sales service.
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">

Would my business really benefit from online marketing
services?

                    </button>
                  </h2>
                  <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        Having an online representation of your business is necessary
                        in today’s digital era. However, your digital presence won’t
                        have any impact unless you market it successfully. Every
                        business would benefit from an effective digital marketing
                        strategy and the professional support of a digital marketing
                        company.
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
Do you provide reports of the work done?
                    </button>
                  </h2>
                  <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        Yes. We believe in maintaining complete transparency by
                        providing weekly and monthly reports to our clients. For any
                        queries, you may contact our experts directly.
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingfoud">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">

Which digital marketing services are best for my business?

                      </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingfoud" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        Most businesses will need a well-optimized website design and
                        custom web analytics integration for improving performance.
                        Later, SEO, PPC, and Local SEO Services will be needed to
                        drive more leads and sales. Then, the website marketing services that are best for your business depend on several factors such as your business goals, budget, target audience, product/service, etc. Contact a digital marketing company for deep insights.
                      </div>
                    </div>
                  </div>

                  <div class="accordion-item">
                    <h2 class="accordion-header" id="headingfive">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">

What is SEO Copywriting?

                      </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingfive" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        SEO copywriting seeks to get the client’s web page ranking in
                        search engine results pages. A comprehensive SEO strategy
                        requires copywriting techniques beyond using keywords.
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="headingsix">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">

How cost-effective is digital marketing compared with
traditional marketing?

                      </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingsix" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        Digital marketing is generally less expensive than traditional
                        marketing because it does not require the printing of
                        advertisements or the payment of radio and television stations
                        for commercials. Traditional marketing may be more effective
                        for a company looking to target a larger audience within a
                        specific demographic. Also, checkout following benefits of a
                        digital marketing companies:

                      </div>
                    </div>
                  </div>
              </div>

        </div>
    </div>
</section>
{{-- faq --}}







{{-- lets get started --}}
<section id="letsgetstarted">
    <div class="container" style="max-width: 1300px;">
        <div class="row">
            <div class="col-lg-6 col-12 my-auto align-self-center">
                <h3 class="text-white fs44">Let’s Get Started</h3>
            <p class="fs18 ff-poppins text-white">Drop a message; we'll reach out to explore your digital requirements together. Let's shape your online success collaboratively.</p>
            </div>
            <div class="col-lg-6 col-12">
                <div class="card p-4" style="border-radius: 10px;">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6 col-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Full Name *">
                                  </div>
                            </div>
                            <div class="col-lg-6 col-12">
                                <div class="form-group">
                                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Business Email Address *">
                                  </div>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-lg-6 col-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Phone Number *">
                                  </div>
                            </div>
                            <div class="col-lg-6 col-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Organization /Institution *">
                                  </div>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-lg-12 col-12">
                                <div class="form-group">
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Message *"></textarea>
                                  </div>
                            </div>
                        </div>
                        <div class="row mt-3">
                        <button class="button9 col-lg-4 col-8">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- lets get started --}}
@endsection
@push('script')

@endpush

