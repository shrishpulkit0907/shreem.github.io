@extends('frontend.layouts.app')
@section('title', 'Webixytech')
@section('maincontent')
{{-- hero --}}
<section class="hero2">
    <div class="container position-relative py-4 zi-10">
        <div class="row">
            <div class="col-lg-8 col-12">
                <h1 class="fs36 text-white mb-4">Elevate your ROI with our Social Media Marketing Services</h1>
                <p class="ff-poppins fs18 text-white mb-4">Highlight your brand and amplify your message with our Social Media Marketing services.</p>
                <span class="col-12 pill-list">
                    <span class="item"><img src="{{asset('images/bannericon-1.svg')}}" alt="icon" /> 360-degree social media audit</span>
                    <span class="item"><img src="{{asset('images/bannericon-2.svg')}}" alt="icon" />Data-backed optimization ideas</span>
                    <span class="item"><img src="{{asset('images/bannericon-3.svg')}}" alt="icon"/> 24/7 social media monitoring</span>
                    <span class="item"><img src="{{asset('images/bannericon-4.svg')}}" alt="icon"/> Expertise of 100+ people</span>
                    <span class="item"><img src="{{asset('images/bannericon-5.svg')}}" alt="icon"/> Full-fledged ROI tracking</span>
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
                        <button class="button9 col-lg-4 col-6">Submit</button>
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
                <h2 class="fs44">Get Your Hands on Ideal Social Media Marketing Services in India to Uplift Your Business</h2>
                <p class="fs18 ff-poppins">Social Media Marketing is a marketing strategy that harnesses the unfolded power of social media channels. Through this, escalation of brand, increment of traffic, and amplification of sales becomes effortless for a business. From social media engagement to social media analytics, we provide scratch-to-end social media marketing solutions that cater to your specific business needs. Our vision is clear to us i.e., to make our client satisfied. If you are ready to make your brand an established one, our team is ready to help you in the best possible way.</p>
            </div>
            <div class="col-lg-6 col-12">
                <div class="row">
                    <div class="col-lg-6 col-12 mb-3">
                        <div class="card p-3" style="border-radius: 10px;">
                            <div class="card-body pb-2">
                                <img width="50" height="50"  src="{{asset('images/stat-3.webp')}}" style="background: var(--gradient4);padding:10px;border-radius:10px;margin-bottom:10px;"/>
                                <h3 class="fs42"><span class="count" data-count="22">700</span> <span>+</span></h3>
                                <p class="fs16 fw-bold m-0" class="text-white">Satisfied Clients</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-12 mb-3">
                        <div class="card p-3" style="border-radius: 10px;">
                            <div class="card-body pb-2">
                                <img width="50" height="50"  src="{{asset('images/stat-1.webp')}}" style="background: var(--gradient4);padding:10px;border-radius:10px;margin-bottom:10px;"/>
                                <h3 class="fs42"><span class="count" data-count="22">80</span> <span>+</span></h3>
                                <p class="fs16 fw-bold m-0" class="text-white">Global Brands</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-12 mb-3">
                        <div class="card p-3" style="border-radius: 10px;">
                            <div class="card-body pb-2">
                                <img width="50" height="50"  src="{{asset('images/stat-2.webp')}}" style="background: var(--gradient4);padding:10px;border-radius:10px;margin-bottom:10px;"/>
                                <h3 class="fs42"><span class="count" data-count="22">97</span> <span>%</span></h3>
                                <p class="fs16 fw-bold m-0" class="text-white">Satisfaction Rate</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-12 mb-3">
                        <div class="card p-3" style="border-radius: 10px;">
                            <div class="card-body pb-2">
                                <img width="50" height="50"  src="{{asset('images/stat-4.webp')}}" style="background: var(--gradient4);padding:10px;border-radius:10px;margin-bottom:10px;"/>
                                <h3 class="fs42"><span class="count" data-count="22">15</span> <span>+</span></h3>
                                <p class="fs16 fw-bold m-0" class="text-white">Years of Experience</p>
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
                <h3 class="fs44 text-center">Our Reputed Clients </h3>
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
                <h2 class="fs36">Escalate your Brand with Webixytech on the way to Increased Revenue</h2>
                <p class="fs16 ff-poppins">The World is now moving ahead from the traditional methods of marketing to the new paradigm. Every business thus needs to step up to remain aligned with the market and Social Media marketing is the best way to do it. Therefore, seek our impeccable social media marketing services to elevate your brand and inflate your business.</p>
                <p class="fs16 ff-poppins">Our team of marketing professionals has their forte in social media management services. We think that social media offers valuable information about customer preferences and needs. Thus, we begin with customizing the solutions as per those insights to target a maximum number of people to fulfill all your fixed objectives.</p>
                <p class="fs16 ff-poppins">With our strategic or tactical approach, we try to ensure that your social media presence will bring the desired success for you. Choose our Social media marketing services to unleash the full potential of social media channels to uplift your business. Our experts will make your brand visible enough that it can knock on the locked doors to expand miraculously.</p>
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
            <h3 class="fs36">Seek the Social Media Marketing Services that your Business Demands!</h3>
            <p class="ff-poppins">Drive more sales by spreading your brand among the right sphere of the audience with our various kinds of services. </p>
        </div>
        <div class="row">
            <div class="col-lg-4 col-12 my-3">
                <div class="card p-3" style="border-radius: 10px;">
                    <div class="card-body">
                        <span class="d-inline-block m-auto mb-3" style="background:var(--color-blue);padding:10px;border-radius:10px;">
                            <img width="35" height="35" src="{{asset('images/service-1.svg')}}" style="filter:brightness(0) invert(1);"/>
                        </span>
                        <h4>Search Engine Optimization (SEO)</h4>
                        <p class="fs14">
                            Attract or bring more users and increase your brand visibility with integrated <a href="#">SEO services</a>  and social media marketing services in India. Webixytech is a social media marketing agency whose experts perform extensive keyword research to produce SEO-optimized content to address customers’ search intent to increase search traffic. Besides this, we create videos, infographics, and images to bring more users to your website.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-12 my-3">
                <div class="card p-3" style="border-radius: 10px;">
                    <div class="card-body">
                        <span class="d-inline-block m-auto mb-3" style="background:var(--color-green);padding:10px;border-radius:10px;">
                            <img width="35" height="35" src="{{asset('images/Enterprise-SEO-services.webp')}}" style="filter:brightness(0) invert(1);"/>
                        </span>
                        <h4>PPC (Pay-per-click) Advertising</h4>
                        <p class="fs14">
                            Draw more attention to your live PPC ads with our impeccable social media <a href="#">PPC services</a>. We take a step forward to first understand your target audience, spot high-performing keywords, execute sponsored updates, and use enthralling images or videos and captions to elevate the return on your ad spend all over the social media channels.
                            </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-12 my-3">
                <div class="card p-3" style="border-radius: 10px;">
                    <div class="card-body">
                        <span class="d-inline-block m-auto mb-3" style="background:var(--color-green);padding:10px;border-radius:10px;">
                            <img width="35" height="35" src="{{asset('images/Mobile-apps-SEO.webp')}}" style="filter:brightness(0) invert(1);"/>
                        </span>
                        <h4>Website Designing &amp; Development</h4>
                        <p class="fs14">
                            Webixytech SMM Services in India is known best for its results. We try to implement consistent page branding and show your social media reviews on your website to establish social proof to leave positive impressions on the audience. Furthermore, we embed social media elements such as social share icons and social feeds on your website for visitors to increase action.
                            </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-12 my-3">
                <div class="card p-3" style="border-radius: 10px;">
                    <div class="card-body">
                        <span class="d-inline-block m-auto mb-3" style="background:var(--color-green);padding:10px;border-radius:10px;">
                            <img width="35" height="35" src="{{asset('images/service-4.svg')}}" style="filter:brightness(0) invert(1);"/>
                        </span>
                        <h4>Email Marketing</h4>
                        <p class="fs14">
                            Spread your online visibility and generate more lead conversions with commendable
                            <a href="">email marketing solutions</a>. As a social media marketing agency, we integrate email marketing with your SMM tactics to form an unparalleled customer experience. We figure out your niche market, and craft email content, and SMM strategy that can fulfill your business objectives. Moreover, we email your social media profiles to boost your engagement.

                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-12 my-3">
                <div class="card p-3" style="border-radius: 10px;">
                    <div class="card-body">
                        <span class="d-inline-block m-auto mb-3" style="background:var(--color-green);padding:10px;border-radius:10px;">
                            <img width="35" height="35" src="{{asset('images/service-5.svg')}}" style="filter:brightness(0) invert(1);"/>
                        </span>
                        <h4>Content Writing</h4>
                        <p class="fs14">From your website to Instagram and Twitter to your LinkedIn marketing page, all need insightful content to convey your brand message. Leave your content creation to our social media marketing experts and seek quality content that connects with your audience. We perform deep research, adopt the brand voice, and form valuable content to amplify your marketing progress.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-12 my-3">
                <div class="card p-3" style="border-radius: 10px;">
                    <div class="card-body">
                        <span class="d-inline-block m-auto mb-3" style="background:var(--color-green);padding:10px;border-radius:10px;">
                            <img width="35" height="35" src="{{asset('images/service-6.svg')}}" style="filter:brightness(0) invert(1);"/>
                        </span>
                        <h4>Link Building</h4>
                        <p class="fs14">
                            Our Social media marketing services strive hard to maximize LinkedIn social media marketing and other platforms to revamp your link-building strategies. Our geeks will enhance your Pinterest marketing tactics to pin back the link to your website. We also submit your content to renowned bloggers or niche groups to attain quality backlinks.
                            </p>
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
        <div class="col-lg-12 text-center"><h3 class="fs36 text-white">How have We Succeeded as an SMM Services Provider So Far? </h3>
            <p class="fs16 ff-poppins text-white text-center">See how our Social Media marketing agency transforms the business of our clients.  </p>
        </div>
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
            <h3 class="fs36">Technology Stack Infused in our Social Media Marketing Services </h3>
            <p class="ff-poppins">
                Escalate your brand and boost your Sales with our team and their bag full of technologies and Frameworks.
                </p>
        </div>
        <div class="row">
            <div class="col-lg-3 col-12 my-3">
                <div class="card p-0 overflow-hidden" style="border-radius: 10px;">
                    <div class="card-header p-0">
                        <span class="col-12 d-inline-block m-auto mb-0" style="color: #fff;font-size: 22px;font-style: normal;font-weight: 700;line-height: normal;border-bottom: 1px solid rgba(0, 0, 0, 0.10);background: #45187E;padding: 13px 15px;">
                            <h4 class="m-0">Platforms</h4>
                        </span>
                    </div>
                    <div class="card-body">
                        <ul class="list1">
                            <li><img  alt="JavaScript" src="{{asset('images/Instagram.svg')}}"/>Instagram </li>
                            <li><img  alt="PHP" src="{{asset('images/Facebook.svg')}}"/>Facebook </li>
                            <li><img  alt="HTML" src="{{asset('images/Youtube.svg')}}"/>YouTube </li>
                            <li><img width="80" height="80" decoding="async" alt="CSS" src="{{asset('images/Whatsapp.png')}}"/>WhatsApp </li>
                            <li><img  alt="PHP" src="{{asset('images/Linkedin.svg')}}"/>LinkedIn </li>
                            <li><img  alt="PHP" src="{{asset('images/Twitter.svg')}}"/>Twitter </li>
                            </ul>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-12 my-3">
                <div class="card p-0 overflow-hidden" style="border-radius: 10px;">
                    <div class="card-header p-0">
                        <span class="col-12 d-inline-block m-auto mb-0" style="color: #fff;font-size: 22px;font-style: normal;font-weight: 700;line-height: normal;border-bottom: 1px solid rgba(0, 0, 0, 0.10);background: #45187E;padding: 13px 15px;">
                            <h4 class="m-0">Tools</h4>
                        </span>
                    </div>
                    <div class="card-body">
                        <ul class="list1">
                            <li><img src="{{asset('images/Hootsuite.png')}}" alt="Angular"/>Hootsuite</li>
                            <li><img src="{{asset('images/Canva.png')}}" alt="React"/>Canva</li>
                            <li><img src="{{asset('images/Buffer.png')}}" alt="React"/>Buffer</li>
                            <li><img src="{{asset('images/Sprout-social.png')}}" alt="Angular"/>Sprout Social</li>
                            <li><img src="{{asset('images/Later.png')}}" alt="React"/>Later</li>
                            <li><img src="{{asset('images/Hubspot.png')}}" alt="React"/>HubSpot</li>
                            </ul>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-12 my-3">
                <div class="card p-0 overflow-hidden" style="border-radius: 10px;">
                    <div class="card-header p-0">
                        <span class="col-12 d-inline-block m-auto mb-0" style="color: #fff;font-size: 22px;font-style: normal;font-weight: 700;line-height: normal;border-bottom: 1px solid rgba(0, 0, 0, 0.10);background: #45187E;padding: 13px 15px;">
                            <h4 class="m-0">Framework</h4>
                        </span>
                    </div>
                    <div class="card-body">
                        <ul class="list1">
                                <li><img src="{{asset('images/SOSTAC.png')}}" alt="Angular"/>SOSTAC</li>
                                <li><img src="{{asset('images/AIDA.png')}}" alt="React"/>AIDA</li>
                                <li><img src="{{asset('images/Smart-Goals.png')}}" alt="React"/>SMART Goals</li>
                                <li><img src="{{asset('images/SWOT-Analysis.png')}}" alt="Angular"/>SWOT Analysis</li>
                                <li><img src="{{asset('images/RACE.png')}}" alt="React"/>RACE</li>
                                <li><img src="{{asset('images/PEST-Analysis.png')}}" alt="React"/>PEST Analysis</li>
                                </ul>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-12 my-3">
                <div class="card p-0 overflow-hidden" style="border-radius: 10px;">
                    <div class="card-header p-0">
                        <span class="col-12 d-inline-block m-auto mb-0" style="color: #fff;font-size: 22px;font-style: normal;font-weight: 700;line-height: normal;border-bottom: 1px solid rgba(0, 0, 0, 0.10);background: #45187E;padding: 13px 15px;">
                            <h4 class="m-0">Databases</h4>
                        </span>
                    </div>
                    <div class="card-body">
                        <ul class="list1">
                                <li><img src="{{asset('images/Oracle-Eloqua.png')}}" alt="Google Cloud" /> Oracle Eloqua</li>
                                <li><img src="{{asset('images/Hubspot-CRM.png')}}" alt="Amazon Web Services" /> HubSpot CRM</li>
                                <li><img src="{{asset('images/Adobe-Marketing-Cloud.png')}}" alt="Microsoft Azure" />Adobe Marketing Cloud</li>
                                <li><img src="{{asset('images/Salesforce-Marketing-Cloud.png')}}" alt="IBM Cloud" />Salesforce Marketing Cloud</li>
                                <li><img src="{{asset('images/SocialBaker.png')}}" alt="IBM Cloud" width="44px;" />Socialbakers Suite</li>
                                <li><img src="{{asset('images/Talkwalker.png')}}" alt="IBM Cloud" width="44px;" />Talkwalker Analytics</li>
                                </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- tools --}}

{{-- what --}}
<section id="s360s" class="">
    <div class="container">
        <div class="col-12 text-center">
            <h3 class="fs36">What Webixytech can Offer you under the tag of Social Media Marketing Services?</h3>
            <p>As we are migrating to the digital world, traditional marketing methods are disappearing gradually. Thus, let us help you indulge in the social market and find new conversion opportunities to surpass the competition by reaching out to new customers.</p>
        </div>
        <div class="row">
            <div class="col-lg-4 col-12 my-3">
                <div class="card p-3" style="border-radius: 10px;">
                    <div class="card-body">
                        <span class="d-inline-block m-auto mb-3">
                            <img width="50" height="50" src="{{asset('images/solution-1.svg')}}">
                        </span>
                        <h4>Facebook Marketing</h4>
                        <p class="fs14">Facebook marketing is one of the reasonable forms of marketing. Check your high level of customer support and attract traffic to your website with Webixytech SMM services in India. Our team will determine your budget, manage your profile, optimize the Facebook ad, and perform regular optimization to spread your visibility and establish brand visibility.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-12 my-3">
                <div class="card p-3 " style="border-radius: 10px;">
                    <div class="card-body">
                        <span class="d-inline-block m-auto mb-3">
                            <img width="50" height="50" src="{{asset('images/solution-2.svg')}}">
                        </span>
                        <h4>Instagram Marketing</h4>
                        <p class="fs14">Conjoins with more customers and forms a community around your brand through Instagram social media marketing. Webixytech’s marketing experts enhance your business profile, launch sponsored ads, rely on Instagram reels, and post IG stories to tell the brand story. Shake hands with us and let us refine your Instagram marketing with analytics.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-12 my-3">
                <div class="card p-3 " style="border-radius: 10px;">
                    <div class="card-body">
                        <span class="d-inline-block m-auto mb-3">
                            <img width="50" height="50" src="{{asset('images/solution-3.svg')}}">
                        </span>
                        <h4>YouTube Marketing</h4>
                        <p class="fs14">Amplify your YouTube media marketing impact to engage more users and compel them to take action. Our team has its forte in it and can help you know about your targetted audience, refine your video quality, and make your content the same enthralling regarding your ideal customers.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-12 my-3">
                <div class="card p-3 " style="border-radius: 10px;">
                    <div class="card-body">
                        <span class="d-inline-block m-auto mb-3">
                            <img width="50" height="50" src="{{asset('images/solution-4.svg')}}">
                        </span>
                        <h4>LinkedIn Marketing</h4>
                        <p class="fs14">Webixytech as SMM service providers knows how to establish a professional reputation for the brand across social media channels. We focus on building the right strategy to differentiate your brand from others. To ensure success in this segment, we handle your page, form valuable marketing posts, and connect with the industry with apt practices.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-12 my-3">
                <div class="card p-3" style="border-radius: 10px;">
                    <div class="card-body">
                        <span class="d-inline-block m-auto mb-3">
                            <img width="50" height="50" src="{{asset('images/solution-5.svg')}}">
                        </span>
                        <h4>Twitter Marketing</h4>
                        <p class="fs14">Invest in Twitter marketing and see how your brand goes viral. As a team of Twitter Marketing agency, we use data analytics tools to measure the analytics, identify the target audience, and creation of ideal marketing tactics to generate traffic to your online store. Rely on your team to have a plan that fulfills your objectives.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-12 my-3">
                <div class="card p-3" style="border-radius: 10px;">
                    <div class="card-body">
                        <span class="d-inline-block m-auto mb-3">
                            <img width="50" height="50" src="{{asset('images/solution-6.SVG')}}">
                        </span>
                        <h4>Pinterest Marketing</h4>
                        <p class="fs14">Convert more visitors into your customers through Webixytech’s Pinterest media marketing strategies. Our experts will make sure that each of your pins is categorized correctly including text on images, keyword-optimized descriptions, and powerful CTAs. Furthermore, we keep an eye on Pinterest analytics to identify performance and can improve if needed.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- what --}}

{{-- why --}}
<section id="s360s" class="">
    <div class="container">
        <div class="col-12 text-center">
            <h3 class="fs36">What our Experts Can Bring Forth for Your Business?</h3>
            <p>Still in the dilemma of whether to go with our Social media marketing services? Read to know what it can bring to your business.</p>
        </div>
        <div class="row">
            <div class="col-lg-4 col-12 my-3">
                <div class="card p-3" style="border-radius: 10px;">
                    <div class="card-body">
                        <span class="d-inline-block m-auto mb-3">
                            <img width="50" height="50" src="{{asset('images/benefits-1.svg')}}">
                        </span>
                        <h4>Improved Online Exposure</h4>
                        <p class="fs14">Social media is spreading its tentacles and platforms like Facebook, Twitter, and LinkedIn can easily increase exposure and interest in your company. With an effective social media strategy, you can simply generate more leads, and more engagement through your content that allows you to connect with a wider set of audience.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-12 my-3">
                <div class="card p-3 " style="border-radius: 10px;">
                    <div class="card-body">
                        <span class="d-inline-block m-auto mb-3">
                            <img width="50" height="50" src="{{asset('images/benefits-2.svg')}}">
                        </span>
                        <h4>Particular Audience Targeting</h4>
                        <p class="fs14">No matter how valuable and right your content is, it will not generate leads or conversions until and unless it reaches the right audience. Thus, our experts will analyze who is your niche audience and then craft ideas and content to address their needs.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-12 my-3">
                <div class="card p-3 " style="border-radius: 10px;">
                    <div class="card-body">
                        <span class="d-inline-block m-auto mb-3">
                            <img width="50" height="50" src="{{asset('images/benefits-3.svg')}}">
                        </span>
                        <h4>Enhanced Search Rankings</h4>
                        <p class="fs14">Search engines like Google and Bing integrate updates, tweets, and profiles in their search page to showcase the importance of social interaction. The more people share your content on your social media platforms, the more traffic will come on your website and it will increase your search rankings.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-12 my-3">
                <div class="card p-3 " style="border-radius: 10px;">
                    <div class="card-body">
                        <span class="d-inline-block m-auto mb-3">
                            <img width="50" height="50" src="{{asset('images/benefits-4.svg')}}">
                        </span>
                        <h4>Complete Brand Control</h4>
                        <p class="fs14">Webixytech, a social media marketing agency, formed packages suitable for your needs and finances. It denotes complete control over your budget, brand, and social media.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-12 my-3">
                <div class="card p-3" style="border-radius: 10px;">
                    <div class="card-body">
                        <span class="d-inline-block m-auto mb-3">
                            <img width="50" height="50" src="{{asset('images/benefits-5.svg')}}">
                        </span>
                        <h4>Refined Customer Reach</h4>
                        <p class="fs14">Half of the people use social media for product research and the other half look for recommendations by social media influencers. Therefore, Webixytech, with a robust social media marketing strategy boosts your brand awareness and puts your company in front of the right audience.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-12 my-3">
                <div class="card p-3" style="border-radius: 10px;">
                    <div class="card-body">
                        <span class="d-inline-block m-auto mb-3">
                            <img width="50" height="50" src="{{asset('images/benefits-6.svg')}}">
                        </span>
                        <h4>Better Customer Trust</h4>
                        <p class="fs14">Our social media marketing team shares valuable information and engages in online conversations regarding the company to keep a grasp on the target audience. It is a crucial tactic to attain customer trust and build unending relationships with the customers.</p>
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
            <div class="col-lg-3 col-12">
                <h3 class="fs32">Industries our Social Media Marketing Agency Caters to</h3>
                <p class="fs16">With our team of adroit professionals and their experience of years, our social media marketing services will take your brand to the next level. We enhance your brand visibility and make it quite popular among the masses.</p>
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
                <h3 class="fs32">Our Services Roadmap Right from Scratch to the End</h3>
                <p class="ff-poppins">Know how we help businesses to share their brand story across all the social media channels to increase their leads or sales.</p>
            </div>
            <div class="col-lg-6 col-12">
                <div class="process">
                    <ul>
                        <li>
                            <img src="{{asset('images/Research.svg')}}" class="img-fluid" />
                            <span>
                                <h4>Meeting or Discussion</h4>
                                <p>
                                    It is the first step where we go ahead to understand what are the actual requirements of your business.
                                    </p>
                            </span>
                        </li>
                        <li>
                            <img src="{{asset('images/Promote.svg')}}" class="img-fluid" />
                            <span>
                                <h4>Planning</h4>
                                <p>
                                    Once we understand what you want, we begin to form a plan or strategy to provide robust social media marketing services.
                                    </p>
                            </span>
                        </li>
                        <li>
                            <img src="{{asset('images/Analyze.svg')}}" class="img-fluid" />
                            <span>
                                <h4>Implementation</h4>
                                <p>
                                    Without wasting time, we implement the suggested tactic or strategy to attain results as soon as possible.
                                    </p>
                            </span>
                        </li>
                        <li>
                            <img src="{{asset('images/Optimize.svg')}}" class="img-fluid" />
                            <span>
                                <h4>Tracking </h4>
                                <p>
                                    It is necessary to keep an eye to ensure whether the suggested plan is going on smoothly or in the right direction or not.
                                    </p>
                            </span>
                        </li>
                        <li>
                            <img src="{{asset('images/Deploy-Run.svg')}}" class="img-fluid" />
                            <span>
                                <h4>Re-Structuring</h4>
                                <p>
                                    Then after inspection, we make needed alterations in the strategy that have to be there to gain the expected result.
                                    </p>
                            </span>
                        </li>
                        <li>
                            <img src="{{asset('images/Deploy-Run.svg')}}" class="img-fluid" />
                            <span>
                                <h4>Maintenance or Assistance</h4>
                                <p>
                                    Maintenance services are as necessary as deploying a strategy. Sustaining the strategy is the catch here; our team knows it well.
                                    </p>
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
        <h3 class="text-white fs36">Webixytech: An Ideal Choice for Social Media Marketing Services in India!</h3>
        <p class="text-white ff-poppins">Forge new connections to strengthen the position of your brand in the market with our splendid social media marketing services. </p>
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
                            <h4>Dedicated Account Managers</h4>
                            <p> At <a href="#">Webixytech</a>, we assign a specific expert to your brand depending on your social media marketing goals and needs. Those experts are available for you every time and are just a call away.</p>
                        </div>
                        <div class="item">
                            <span>02</span>
                            <h4>Client-centric Approach</h4>
                            <p>We work with a client-centric approach and create tailor-made solutions that match the client’s requirements and expectations to perfection.</p>
                        </div>
                        <div class="item">
                            <span>03</span>
                            <h4>Cost-effective Solutions</h4>
                            <p>Webixytech being a renowned SMM Service providers serves cost-effective solutions that fetch impressive ROI for clients.</p>
                        </div>
                        <div class="item">
                            <span>04</span>
                            <h4>Paid &amp; Organic Team</h4>
                            <p>We ensure that our client will get a subject matter expert. Our team has both paid and organic strategists and with them, we implement a tactic to maximize your conversions.</p>
                        </div>
                        <div class="item">
                            <span>05</span>
                            <h4>Extensive Onboarding Process</h4>
                            <p>
                                Our consultants let you have an in-depth knowledge of our social media marketing strategy to make you aware of the way we will attain the results.
                                </p>
                        </div>
                        <div class="item">
                            <span>06</span>
                            <h4>Familiarity with Latest Trends</h4>
                            <p>
                                As domain specialists, our experts ensure they integrate the latest trends and techniques in every campaign they design.
                                </p>
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
                        What are the usages of social media marketing services?
                    </button>
                  </h2>
                  <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample" style="">
                    <div class="accordion-body">
It can be used for multiple purposes other than marketing or branding. Here the most significant usage of the same is highlighted.
<ul>
    <li>Promotion of the products, brand, and services</li>
    <li>Introduction and awareness of the brand</li>
    <li>Retargeting of already interested or existing customers</li>
    <li>Sending online followers to your official website</li>
    <li>Bringing attention to the special brand offerings like some promo or events</li>
    </ul>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">

                        What is the difference between a post and an ad on social media?


                    </button>
                  </h2>
                  <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        When you are posting something, you are letting your followers or consumers know only about it. It is there for all the general public to see. On the other hand, ad on social media is paid advertising. Create your unique ad, target your audience with the correct demographics and interests, and make sure that your brand stands next to the right people.
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">

                        What are social media marketing services?

                    </button>
                  </h2>
                  <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                    <div class="accordion-body">

                        Social media marketing services include the usage of platforms like Facebook, Twitter, and Instagram to promote the brand with its culture, products, and services. Most of social media marketing agencies like Webixytech focus on engagements, followers, and conversions.

                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingfoud">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">


                        How do I market my business on social media?


                      </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingfoud" data-bs-parent="#accordionExample">
                      <div class="accordion-body">

When it comes to knowing about the way how you should market your business on social media, here are the necessary steps given:

                      </div>
                    </div>
                  </div>

                  <div class="accordion-item">
                    <h2 class="accordion-header" id="headingfive">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">

                        What are the five pillars of marketing?


                      </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingfive" data-bs-parent="#accordionExample">
                      <div class="accordion-body">

The known or crucial 5 pillars of marketing are Product, Price, Promotion, Place, and People. It is a framework that assists in guiding marketing strategies and keeps the marketers on the right track.

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
                        <button class="button9 col-lg-4 col-6">Submit</button>
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

