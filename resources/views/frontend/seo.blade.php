@extends('frontend.layouts.app')
@section('title', 'Webixytech')
@section('maincontent')
{{-- hero --}}
<section class="hero2">
    <div class="container position-relative py-4 zi-10">
        <div class="row">
            <div class="col-lg-8 col-12">
                <h1 class="fs36 text-white mb-4">Boost Your Web Traffic & Make Your Ranking #1 With Best SEO Company</h1>
                <p class="ff-poppins fs18 text-white mb-4">We are amongst the top SEO services provider companies and offer world-class exposure, transparency, and dedication to our digital marketing clients. We always welcome new and innovative ideas and encourage a creative approach to provide the best end results.</p>
                <span class="col-12 pill-list">
                    <span class="item"><img src="{{asset('images/Assured-eCommerc.webp')}}" alt="icon" /> Website Auditing Services</span>
                    <span class="item"><img src="{{asset('images/Result-Oriented.webp')}}" alt="icon" /> Guaranteed Results</span>
                    <span class="item"><img src="{{asset('images/Easy-and-Transparent.webp')}}" alt="icon"/> Aggressive Local SEO</span>
                    <span class="item"><img src="{{asset('images/Easy-and-Transparent.webp')}}" alt="icon"/> Backlink Building & Indexing</span>
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
                        <button class="button11 col-lg-4 col-8">Submit</button>
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
                <h2 class="fs44">Boost Your Market Traffic With Best SEO Company & Scale Up Your Sales</h2>
                <p class="fs18 ff-poppins"><b>Webixy Technologies</b> is a leading high-quality end-to-end Professional SEO services provider. Our team of knowledgeable digital marketing professionals is committed to creating interesting material that not only fits your brand identity but also efficiently interacts with your target market. Using innovative SEO techniques strong link building and careful content optimization, we make sure your website gets maximum exposure in search engine results. Our dedication to quality goes beyond our technical knowledge; we also provide individualized customer service available around the clock to immediately answer your inquiries and concerns. You may rely on Webixy Technologies to improve your online profile and reach your marketing objectives by means of our constant attention to customer satisfaction and our dedication to producing outstanding outcomes.</p>
            </div>
            <div class="col-lg-6 col-12">
                <div class="row">
                    <div class="col-lg-6 col-12 mb-3">
                        <div class="card p-3" style="border-radius: 10px;">
                            <div class="card-body pb-2">
                                <img width="50" height="50"  src="{{asset('images/stat-3.webp')}}" style="background: var(--color-blue2);padding:10px;border-radius:10px;margin-bottom:10px;"/>
                                <h3 class="fs42"><span class="count" data-count="22">200</span> <span>+</span></h3>
                                <p class="fs16 fw-bold m-0" class="text-white">Ranking Websites</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-12 mb-3">
                        <div class="card p-3" style="border-radius: 10px;">
                            <div class="card-body pb-2">
                                <img width="50" height="50"  src="{{asset('images/stat-1.webp')}}" style="background: var(--color-blue2);padding:10px;border-radius:10px;margin-bottom:10px;"/>
                                <h3 class="fs42"><span class="count" data-count="22">80</span> <span>+</span></h3>
                                <p class="fs16 fw-bold m-0" class="text-white">SEO Strategies</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-12 mb-3">
                        <div class="card p-3" style="border-radius: 10px;">
                            <div class="card-body pb-2">
                                <img width="50" height="50"  src="{{asset('images/stat-2.webp')}}" style="background: var(--color-blue2);padding:10px;border-radius:10px;margin-bottom:10px;"/>
                                <h3 class="fs42"><span class="count" data-count="22">98</span> <span>%</span></h3>
                                <p class="fs16 fw-bold m-0" class="text-white"> Success Rate </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-12 mb-3">
                        <div class="card p-3" style="border-radius: 10px;">
                            <div class="card-body pb-2">
                                <img width="50" height="50"  src="{{asset('images/stat-4.webp')}}" style="background: var(--color-blue2);padding:10px;border-radius:10px;margin-bottom:10px;"/>
                                <h3 class="fs42"><span class="count" data-count="22">780</span> <span>+</span></h3>
                                <p class="fs16 fw-bold m-0" class="text-white">Active Customers</p>
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
<section id="happyclients" class="col-12 pt-0">
    <div class="col-lg-12 col-12 py-4" style="background: var(--color-blue1);">
        <h3 class="fs44 text-center text-white">Our Previous Clients </h3>
    </div>
    <div class="container">
        <div class="row">
            {{-- <div class="col-lg-12 col-12">
                <h3 class="fs44 text-center">Our Previous Clients </h3>
            </div> --}}
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

{{-- cta --}}
<section id="" class="cta">
    <div class="container">
        <div class="col-lg-12 text-center">
                <h4 class="my-4 text-white">Boost Your Sales – Get a Free SEO Audit Report with Webixy Today!</h4>
                <div class="col-12 text-center"><a href="#" class="button11">Connect Now</a></div>
        </div>
    </div>
</section>
{{-- cta --}}

{{-- be found --}}
<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-12">
                <h2 class="fs36">How Best SEO Company Scale Up Your Business? </h2>
                <p class="fs16 ff-poppins">SEO is a digital marketing method that makes a huge contribution to the growth of any website. Conducting it the right way requires thorough knowledge of the subject and its various aspects, be it link building, content, and keyword optimization, local and international SEO, and analytics and reporting. From conducting the right keyword research, to strategically integrating them into content, everything requires special expertise. </p>
                <p class="fs16 ff-poppins">Webixy Technologies, the best SEO Company & most affordable SEO company service provider deliver strategies that help clients reach their maximum target audience in the most efficient way possible. We implement practices that reduce bounce rates, increase content engagement, and conduct campaigns that promote more lead conversion. </p>
                <p class="fs16 ff-poppins">Our clients entrust us with their vision to build and expand their brand. We bring you a team that works tirelessly to deliver excellence in the most timely and efficient manner. </p>
            </div>
            <div class="col-lg-5 col-12 align-self-center ps-3">
                <span class="col-12" style="background: var(--color-blue1);display:inline-block;" class="rounded">
                    <img class="img-fluid rounded border-5" src="{{asset('images/grow.webp')}}" alt="Grow Scaled" style="margin-top:20px;margin-left: -20px;margin-bottom: -20px;" />
                </span>
            </div>
        </div>
    </div>
</section>
{{-- be found --}}

{{-- 360 --}}
<section id="s360s">
    <div class="container">
        <div class="col-12 text-center">
            <h3 class="fs36">Best SEO Company Drives Best Ranking Results With Top Strategic Services</h3>
            <p class="ff-poppins">As the best SEO company, we provide customer-centric services and the best digital marketing services for your business. We make sure to create organic backlinks and drive organic traffic to your website.</p>
        </div>
        <div class="row">
            <div class="col-lg-4 col-12 my-3">
                <div class="card p-3" style="border-radius: 10px;">
                    <div class="card-body">
                        <span class="d-inline-block m-auto mb-3" style="background:var(--color-blue4);padding:10px 20px;border-radius:8px;">
                            <img width="35" height="35" src="{{asset('images/Start-up-SEO-services.webp')}}" style="filter:brightness(0) invert(1);"/>
                        </span>
                        <h4>Aggressive Local SEO For Start-ups</h4>
                        <p class="fs14">Our Aggressive Local SEO For Startups company offers the ideal way to improve your online visibility and lure more clients. Being the Best SEO agency, we present thorough plans to improve your local search results. We will help your company stand out and properly reach your target market by maximizing your website, developing citations, and using social media. </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-12 my-3">
                <div class="card p-3" style="border-radius: 10px;">
                    <div class="card-body">
                        <span class="d-inline-block m-auto mb-3" style="background:var(--color-blue4);padding:10px 20px;border-radius:8px;">
                            <img width="35" height="35" src="{{asset('images/Enterprise-SEO-services.webp')}}" style="filter:brightness(0) invert(1);"/>
                        </span>
                        <h4>Backlink Indexing For Enterprises</h4>
                        <p class="fs14">Being a Professional SEO agency, we provide a complete strategy for obtaining premium backlinks including broken link building, guest blogging, and hand outreach. We'll help you attract more visitors and boost your online success by strengthening the authority and exposure of your website.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-12 my-3">
                <div class="card p-3" style="border-radius: 10px;">
                    <div class="card-body">
                        <span class="d-inline-block m-auto mb-3" style="background:var(--color-blue4);padding:10px 20px;border-radius:8px;">
                            <img width="35" height="35" src="{{asset('images/Mobile-apps-SEO.webp')}}" style="filter:brightness(0) invert(1);"/>
                        </span>
                        <h4>Application SEO Service</h4>
                        <p class="fs14">Our Application SEO Services offers companies trying to improve the exposure of their app a complete solution to drive downloads. We'll assist you draw more users and boost the income of your software by maximizing your app store placement, using social media, and supporting favorable reviews.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-12 my-3">
                <div class="card p-3" style="border-radius: 10px;">
                    <div class="card-body">
                        <span class="d-inline-block m-auto mb-3" style="background:var(--color-blue4);padding:10px 20px;border-radius:8px;">
                            <img width="35" height="35" src="{{asset('images/Content-management-services.webp')}}" style="filter:brightness(0) invert(1);"/>
                        </span>
                        <h4>On Page Optimization</h4>
                        <p class="fs14">Businesses trying to raise the search engine rating of their website and get more natural traffic will find the ideal solution in our On-Page Optimization service. Being an affordable SEO company, we provide a thorough method for maximizing the content, structure, and code of your website for the best view. Using tested on-page SEO strategies will help your website rank better in search results and attract more focused visitors.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-12 my-3">
                <div class="card p-3" style="border-radius: 10px;">
                    <div class="card-body">
                        <span class="d-inline-block m-auto mb-3" style="background:var(--color-blue4);padding:10px 20px;border-radius:8px;">
                            <img width="35" height="35" src="{{asset('images/E-commerce-SEO.webp')}}" style="filter:brightness(0) invert(1);"/>
                        </span>
                        <h4>Parasite SEO Services</h4>
                        <p class="fs14">Our Parasite SEO Services provide a strong approach to raising the search engine results of your website and increasing natural traffic. Being a top SEO company, our area of expertise is using the power of existing websites to raise your profile and draw focused traffic. Using our professional parasitic SEO techniques can help you rapidly increase your web visibility and meet company objectives.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-12 my-3">
                <div class="card p-3" style="border-radius: 10px;">
                    <div class="card-body">
                        <span class="d-inline-block m-auto mb-3" style="background:var(--color-blue4);padding:10px 20px;border-radius:8px;">
                            <img width="35" height="35" src="{{asset('images/Google-Recovery-Services.webp')}}" style="filter:brightness(0) invert(1);"/>
                        </span>
                        <h4>E-commerce SEO Services</h4>
                        <p class="fs14">Our E-commerce SEO Services are designed to help internet companies boost revenues, draw new clients, and raise their profile. Being the best SEO company, we provide a complete strategy to maximize your e-commerce website for search engines so that your goods and services show up prominently in search results and thus reach your target market efficiently.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-12 my-3">
                <div class="card p-3" style="border-radius: 10px;">
                    <div class="card-body">
                        <span class="d-inline-block m-auto mb-3" style="background:var(--color-blue4);padding:10px 20px;border-radius:8px;">
                            <img width="35" height="35" src="{{asset('images/Google-Recovery-Services.webp')}}" style="filter:brightness(0) invert(1);"/>
                        </span>
                        <h4>GMB Optimization Services</h4>
                        <p class="fs14">Our GMB Optimization Services are meant to enable nearby companies to raise Google Maps visibility and draw more clients. Being the best SEO company, our area of expertise is maximizing your Google My Business listing to guarantee it shows clearly in local search results, so increasing foot traffic and online interaction.</p>
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
        <div class="col-lg-12 text-center"><h3 class="fs36 text-white">Listen To Our Previous Successors & Choose Your Best SEO Company</h3>
            <p class="fs16 ff-poppins text-white text-center">Take a look at how our Search Engine Optimization Services and <a href="" style="color:#fff;font-weight:bold;"> PPC Services</a> evolve your brand to come to the top at the SERPs. </p>
        </div>
        <div class="row pt-5">
            <div class="col-lg-6 col-12">
                <h3 class="fs32 text-white">Variant Fashion</h3>
                <p class="ff-poppins fs16 text-white">Renowned fashion brand Variant Fashion aimed to improve its online presence to match its outstanding offline stores as it was known for its distinctive and fashionable accessories. Working with our affordable SEO services for startups, they met their objective. Variant Fashion's search engine visibility was raised, more online traffic attracted, and revenues increased, all thanks to Webixy Technolgy's professional SEO services.</p>
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
            <h3 class="fs36">Premium Tools Our Best SEO Company Mastered In</h3>
            {{-- <p class="ff-poppins">Our team assists you in unlocking the complete potential of your website with our result-oriented SEO Services in India</p>        </div> --}}
        <div class="row">
            <div class="col-lg-4 col-12 my-3">
                <div class="card p-3 text-center" style="border-radius: 10px;">
                    <div class="card-body">
                        <span class="d-inline-block m-auto mb-3">
                            <img width="50" height="50" src="{{asset('images/semrush.png')}}">
                        </span>
                        <h4>SEMrush</h4>
                        <p class="fs14">A complete SEO system providing keyword research, competitor analysis, backlink auditing, and more. It offers tools and a lot of data to help you measure your improvement and maximize your website for search engines. </p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-12 my-3">
                <div class="card p-3 text-center" style="border-radius: 10px;">
                    <div class="card-body">
                        <span class="d-inline-block m-auto mb-3">
                            <img width="50" height="50" src="{{asset('images/Moz-Pro@2x.webp')}}">
                        </span>
                        <h4>Moz Pro</h4>
                        <p class="fs14">A well-liked SEO package that includes link building, keyword research, site audits, and rank tracking. To assist you in increasing the search engine optimization of your website, Moz Pro presents strong capabilities and a simple interface. </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-12 my-3">
                <div class="card p-3 text-center" style="border-radius: 10px;">
                    <div class="card-body">
                        <span class="d-inline-block m-auto mb-3">
                            <img width="50" height="50" src="{{asset('images/Google-Analyics@2x.png')}}">
                        </span>
                        <h4>Google Analytics</h4>
                        <p class="fs14">A free online tool, Google Analytics offers insightful analysis of user behavior, website traffic, and conversions. Making informed judgments and knowing how users engage with your website depend on Google Analytics.  </p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-12 my-3">
                <div class="card p-3 text-center" style="border-radius: 10px;">
                    <div class="card-body">
                        <span class="d-inline-block m-auto mb-3">
                            <img width="50" height="50" src="{{asset('images/Majestic-SEO_2x-removebg.avif')}}">
                        </span>
                        <h4>Majestic SEO</h4>
                        <p class="fs14">Backlink analysis tool that clarifies the backlink profile of your website and points up areas needing link development. Majestic SEO offers thorough backlink information including reference flow, anchor text, and referring domains.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-12 my-3">
                <div class="card p-3 text-center" style="border-radius: 10px;">
                    <div class="card-body">
                        <span class="d-inline-block m-auto mb-3">
                            <img width="50" height="50" src="{{asset('images/Yoast_Logo.png')}}">
                        </span>
                        <h4>Yoast SEO</h4>
                        <p class="fs14">One well-liked plugin for PHP SEO that makes the content of your website easily search engine friendly. For those using PHP, Yoast SEO is a great tool with tools including sitemap creation, keyword optimization, and meta description writing. </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-12 my-3">
                <div class="card p-3 text-center" style="border-radius: 10px;">
                    <div class="card-body">
                        <span class="d-inline-block m-auto mb-3">
                            <img width="50" height="50" src="{{asset('images/AHREF@2x.png')}}">
                        </span>
                        <h4>AHREF</h4>
                        <p class="fs14">Features of this thorough SEO backlink checker and competitor analysis tool include site audits and keyword research. Ahrefs offers a variety of information on the backlink profiles, keywords, and website performance of your rivals, so pointing up areas needing work. </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- tools --}}

{{-- why --}}
<section id="s360s1" class="pt-0">
    <div class="col-12 py-4 text-center text-white mb-4" style="background: var(--color-blue1);">
        <h3 class="fs36">Highlighting The Profit Of Working Our Search Engine Optimization Company</h3>
    </div>
    <div class="container">
        <div class="col-12 text-center">
            {{-- <h3 class="fs36">Highlighting The Profit Of Working Our Search Engine Optimization Company</h3> --}}
            {{-- <p>Here Is All That Experts At Our Seo Agency Do For You apart from the listed SEO Professional Services</p> --}}
        </div>
        <div class="row">
            <div class="col-lg-4 col-12 my-3">
                <div class="card p-3" style="border-radius: 10px;">
                    <div class="card-body">
                        <span class="d-inline-block m-auto mb-3">
                            <img width="50" height="50" src="{{asset('images/Keywords-Research.webp')}}">
                        </span>
                        <h4>Keywords Research</h4>
                        <p class="fs14">A deep understanding of keyword research is paramount. Identifying the most relevant and high-volume keywords that align with your business goals is crucial for driving organic traffic.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-12 my-3">
                <div class="card p-3 " style="border-radius: 10px;">
                    <div class="card-body">
                        <span class="d-inline-block m-auto mb-3">
                            <img width="50" height="50" src="{{asset('images/Website-Audit.webp')}}">
                        </span>
                        <h4>On-Page Optimization</h4>
                        <p class="fs14">Expertise in on-page optimization involves optimizing website content, structure, and technical elements to improve search engine visibility. This includes factors like meta tags, header tags, image optimization, and internal linking.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-12 my-3">
                <div class="card p-3 " style="border-radius: 10px;">
                    <div class="card-body">
                        <span class="d-inline-block m-auto mb-3">
                            <img width="50" height="50" src="{{asset('images/Traffic-Generation.webp')}}">
                        </span>
                        <h4>Backlink Building</h4>
                        <p class="fs14">A skilled SEO company will excel at building high-quality backlinks from reputable websites. These backlinks act as endorsements, signaling to search engines that your website is valuable and relevant. </p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-12 my-3">
                <div class="card p-3 " style="border-radius: 10px;">
                    <div class="card-body">
                        <span class="d-inline-block m-auto mb-3">
                            <img width="50" height="50" src="{{asset('images/Competitive-Analysis.webp')}}">
                        </span>
                        <h4>Local SEO</h4>
                        <p class="fs14">Local SEO is crucial for companies having a physical presence. To score highly in local search results, an experienced SEO company will maximize your online listings, handle Google My Business, and apply other tactics. </p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-12 my-3">
                <div class="card p-3" style="border-radius: 10px;">
                    <div class="card-body">
                        <span class="d-inline-block m-auto mb-3">
                            <img width="50" height="50" src="{{asset('images/Technical-SEO.webp')}}">
                        </span>
                        <h4>Technical SEO</h4>
                        <p class="fs14">Making sure your website is search engine friendly depends on knowing technical SEO. This covers problems with site speed, mobile friendliness, and correct indexing. </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-12 my-3">
                <div class="card p-3" style="border-radius: 10px;">
                    <div class="card-body">
                        <span class="d-inline-block m-auto mb-3">
                            <img width="50" height="50" src="{{asset('images/Search-Engineenalty.webp')}}">
                        </span>
                        <h4>Content Marketing</h4>
                        <p class="fs14">A good SEO plan usually calls for producing excellent, interesting material that draws in and keeps users. Content generation, optimization, and distribution should all be strong points of expertise for an SEO business. </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- why --}}

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
            <div class="col-lg-3 col-12 text-white">
                <h3 class="fs32">Who Requires Our Search Engine Optimization Services</h3>
                <p class="fs16  text-white">Retailers, wholesalers, logistics service providers, and even real state businesses are making potential earnings just through our Search Engine Marketing services. We will take your brand and business to a completely new level by enhancing your brand visibility and making it reachable in top search results.</p>
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


{{-- how --}}
<section id="s360s" class=" d-none">
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


{{-- process --}}
<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-12">
                <h3 class="fs32">Understand The Strategy Of Best SEO Company</h3>
                <p class="ff-poppins">We keep transparency between our offerings and being one of the top SEO expert agency for startups, we address several professional strategies in order to provide optimal outcomes to any website we create or to any company we assist. </p>
                <p class="ff-poppins">Let's go over in detail our approach and the framework we apply to improve your search ranking. Reading this will help you to understand why we are a professional SEO services company. </p>
            </div>
            <div class="col-lg-6 col-12">
                <div class="process">
                    <ul>
                        <li>
                            <img src="{{asset('images/Research.svg')}}" class="img-fluid" />
                            <span>
                                <h4>Initial Consultation and Analysis</h4>
                                <p>We compile competitive data, client information, and objectives to perform an extensive online audit & list terms pertinent to the intended readership.</p>
                            </span>
                        </li>
                        <li>
                            <img src="{{asset('images/Promote.svg')}}" class="img-fluid" />
                            <span>
                                <h4>Keyword Research and Optimization </h4>
                                <p>Formulate a focused keyword plan. Perfect on-page components (headers, meta descriptions, titles). Check quick loading times and mobile friendliness.</p>
                            </span>
                        </li>
                        <li>
                            <img src="{{asset('images/Analyze.svg')}}" class="img-fluid" />
                            <span>
                                <h4>Content Creation and Optimization </h4>
                                <p>We create relevant, excellent material (blog entries, papers)or you can say we make content search engine and user friendly by incorporating organic  keywords. </p>
                            </span>
                        </li>
                        <li>
                            <img src="{{asset('images/Optimize.svg')}}" class="img-fluid" />
                            <span>
                                <h4>Off-Page Optimization </h4>
                                <p>Create organic backlinks from credible websites & uses social media to raise profile, also we use forums and online communities.</p>
                            </span>
                        </li>
                        <li>
                            <img src="{{asset('images/Deploy-Run.svg')}}" class="img-fluid" />
                            <span>
                                <h4>Technical SEO </h4>
                                <p>We address technological problems influencing website functionality & refine XML sitemaps and website architecture, also we put rich snippet schema markup into use. </p>
                            </span>
                        </li>
                        <li>
                            <img src="{{asset('images/Deploy-Run.svg')}}" class="img-fluid" />
                            <span>
                                <h4>Analytics and Reporting</h4>
                                <p>Track analytics, website performance & examine information to find areas needing work so we can easily send the client frequent reports.</p>
                            </span>
                        </li>
                        <li>
                            <img src="{{asset('images/Deploy-Run.svg')}}" class="img-fluid" />
                            <span>
                                <h4>Ongoing Optimization and Monitoring</h4>
                                <p>We track search engine algorithm changes always to adapt with strategies needed to keep ranking & stay updated with tactics to rank websites with our services.</p>
                            </span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- process --}}
{{-- cta --}}
<section id="" class="cta">
    <div class="container">
        <div class="col-lg-12 text-center">
                <h4 class="my-4 text-white">Are You Ready To Grow Your Search Results With the Best SEO Company? Get Top Rankings !!</h4>
                <div class="col-12 text-center"><a href="#" class="button9">Get Traffic</a></div>
        </div>
    </div>
</section>
{{-- cta --}}
{{-- why choose us --}}
<section id="whychooseus">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-7 col-12">
                <div class="col-12" style="background: var(--color-blue1);
            width: 100%;
            height: 100%;
            padding: 50px 82px 0px 70px;
            border-top-right-radius: 60px;
            position: relative;
            z-index: 3;">
        <h3 class="text-white fs36">Why Should Anyone Choose Webixy Technologies for Best SEO Solutions?</h3>
        <p class="text-white ff-poppins">We are the promoters of innovation and keep our aim at transforming our client's vision into reality. Our team does so with the following services.</p>
        {{-- <p class="text-white ff-poppins">Here are the qualities that make us the leading SEO marketing agency.</p> --}}
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
    background: linear-gradient(90deg, var(--color-blue1) 6.14%, var(--color-blue2) 83.37%);
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
                            <h4>Quality End-to-End Development</h4>
                            <p>Our high-quality and end-to-end SEO strategies designing and implementation services help us lead the finest team of digital marketers in the industry.</p>
                        </div>
                        <div class="item">
                            <span>02</span>
                            <h4>Brilliant Strategy Generation</h4>
                            <p>We specialize in designing and implementing engaging and goal-driven content that embodies our client business’ ideas and visions and promotes organic traffic.</p>
                        </div>
                        <div class="item">
                            <span>03</span>
                            <h4>Leading Practices Implementation</h4>
                            <p> We have a proficient team of SEO experts who utilize the leading practices of SEO, such as link building, content optimization, etc. to their maximum potential increase its ranking capabilities.  </p>
                        </div>
                        <div class="item">
                            <span>04</span>
                            <h4>24x7 Customer Support</h4>
                            <p>We have an experienced customer care and support team that is available 24x7 to address your queries and assist you with your orders.</p>
                        </div>
                        <div class="item">
                            <span>05</span>
                            <h4>High Transparency</h4>
                            <p>We believe in making long-lasting relations with our valued clients and that can be possible only with transparent and honest business practices. </p>
                        </div>
                        <div class="item">
                            <span>06</span>
                            <h4>Proven Track Record</h4>
                            <p>We have an impressive track record of having helped hundreds of businesses achieve their targets</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- why choose us --}}

{{-- cta --}}
<section id="" class="cta">
    <div class="container">
        <div class="col-lg-12 text-center">
                <h4 class="my-4 text-white">Subscribe To Our Newsletter For Latest Update</h4>
                <div class="col-6 text-center mx-auto newsletter">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Email Address" aria-label="Email Address" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                          <span class="input-group-text" id="basic-addon2">
                            <button class="button5"> Subscribe</button>
                          </span>
                        </div>
                      </div>
                </div>
        </div>
    </div>
</section>
{{-- cta --}}

{{-- faq --}}
<section id="faq">
    <div class="container">
        <h3 class="text-center fs36 mb-4">Frequently Asked Question</h3>
        <div class="col-lg-12">
            <div class="accordion" id="accordionExample2">
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        How to rank number 1 in SEO
                    </button>
                  </h2>
                  <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample" style="">
                    <div class="accordion-body">
                        It's simple to rank #1 in SEO, maximize on-page aspects (keywords, content, meta tags), guarantee technical SEO (mobile-friendly, fast, structured), create excellent backlinks, and track your development. Points which are crucially important are consistency, patience, and keeping current with SEO trends.
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Can SEO be free?
                    </button>
                  </h2>
                  <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        Yes, you can use free SEO tools to structure a strategy and execute your website SEO for free. You can use free tools like Google Keyword Planner, Ahrefs, SEMRush & others to find keywords & create an audit report for your website while generating free Backlinks.
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Is SEO worth it for small businesses?
                    </button>
                  </h2>
                  <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        Yes, tiny companies would find great value in SEO. It will enable you to naturally approach your target audience and outshine more established rivals. Affordable SEO services for small businesses available from Webixy Technologies might yield a noteworthy return on investment.
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingfoud">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        How long does it take to see results from SEO?
                      </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingfoud" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        The competition of your sector, the present condition of your website, and the selected SEO strategies will all affect the timeframe for results & ranking from SEO. Although some changes could be obvious in a few months, major changes usually require constant effort over six to twelve months. For best SEO company services, Webixy Technologies provides a clear chronology and progress monitoring.
                      </div>
                    </div>
                  </div>

                  <div class="accordion-item">
                    <h2 class="accordion-header" id="headingfive">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        How do I choose a good SEO agency
                      </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingfive" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        When choosing an SEO agency, take into account their track record, experience, communication ability, and pricing policies. Professional SEO services provider Webixy Technologies boasts a track record of running effective SEO campaigns.
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="headingsix">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        What is the importance of keyword research in SEO?
                      </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingsix" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        Finding the most pertinent search phrases your target audience is utilizing depends on keyword research. Advanced keyword research tools available at Webixy Technologies help to maximize your website content and raise your search engine results.
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="headingseven">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        How often should I monitor my SEO progress?
                      </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingseven" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        Tracking the performance of your website and spotting areas needing development depend on consistent monitoring of your SEO development. To let you know how your campaign is doing, Webixy Technologies offers thorough reports and analytics.
                      </div>
                    </div>
                  </div>

                  <div class="accordion-item">
                    <h2 class="accordion-header" id="headingeight">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        How much does SEO cost?
                      </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingeight" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        The company, the range of services, and your particular business requirements will all affect SEO cost greatly. Affordable SEO services catered to several budgets and company sizes are provided by Webixy Technologies. We offer tailored price schemes depending on your objectives and expectations.
                      </div>
                    </div>
                  </div>

                  <div class="accordion-item">
                    <h2 class="accordion-header" id="headingnine">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Do I need to provide content for SEO?
                      </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingnine" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        Yes, search engine optimization depends much on the content. Good, pertinent content draws in and interacts with your target market. Webixy Technologies can help you create and optimize materials so they complement your SEO objectives.
                      </div>
                    </div>
                  </div>

                  <div class="accordion-item">
                    <h2 class="accordion-header" id="headingten">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Can SEO help my local business?
                      </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingten" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        Absolutely! Businesses aiming at clients in a certain geographical area must have local SEO. Top SEO marketing agency for small businesses Webixy Technologies specializes in local SEO techniques to assist you boost your web presence and draw more local clients.
                      </div>
                    </div>
                  </div>

              </div>

        </div>
    </div>
</section>
{{-- faq --}}



{{-- cta --}}
<section id="" class="cta">
    <div class="container">
        <div class="col-lg-12 text-center">
                <h4 class="my-4 text-white">Want to see your business on Top SERPs? Webixy is your trusted partner for professional SEO services provider</h4>
                <div class="col-12 text-center"><a href="#" class="button9">Connect with Experts</a></div>
        </div>
    </div>
</section>
{{-- cta --}}



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

