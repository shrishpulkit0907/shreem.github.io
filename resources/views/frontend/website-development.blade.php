@extends('frontend.layouts.app')
@section('title', 'Webixytech')
@section('maincontent')
{{-- hero --}}
<section class="hero2">
    <div class="container position-relative py-4 zi-10">
        <div class="row">
            <div class="col-lg-8 col-12">
                <h1 class="fs36 text-white mb-4">Elevate your ROI with our Website Development Services</h1>
                <p class="ff-poppins fs18 text-white mb-4">Highlight your brand and amplify your message with our Social Media Marketing services.</p>
                <span class="col-12 pill-list">
                    <span class="item"><img src="{{asset('images/Frame1.png')}}" alt="icon" />  Tailored Framework Solutions </span>
                    <span class="item"><img src="{{asset('images/Frame-1.png')}}" alt="icon" />  Expertise in Diverse Industries </span>
                    <span class="item"><img src="{{asset('images/Frame-2.png')}}" alt="icon"/> Collaborative Brainstorming </span>
                    <span class="item"><img src="{{asset('images/Frame-3.png')}}" alt="icon"/> Scalable and Future-Ready Solutions </span>
                    <span class="item"><img src="{{asset('images/Frame-4.png')}}" alt="icon"/>  Efficient Development Process </span>
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
                <h2 class="fs44">
                    Get Your Hands on Ideal Web Development Services to Uplift Your Business</h2>
                    <h3> Mееting divеrsе cliеnt nееds with prеcision and еxpеrtisе </h3>
                <p class="fs18 ff-poppins">Wе havе a provеn track rеcord of complеting projеcts succеssfully. Additionally, wе havе еxpеriеncе in catеring to a widе rangе of cliеnt rеquirеmеnts with grеat accuracy and a high lеvеl of skill and knowlеdgе in thе fiеld. This combination of еxpеriеncе, vеrsatility, and proficiеncy positions us as a rеliablе and capablе providеr of framеwork sеrvicеs.</p>
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
                <h2 class="fs36"> Stay Digitally Competitive with Innovative &amp; Dedicated Framework Development Company </h2>
                <p class="fs16 ff-poppins">We, at Webixytech believe in crafting frameworks for web development web applications with the latest frameworks instead of waiting on the corners of the competition. We have team of professionals who take of the development and designing process with cost-effective solutions. We offer engaging websites to our customers to boost the efficiency of the web service, web application, and web development. These frameworks can enhance the activities of the website.If you want to ensure the success of your business then you have come to the right place. </p>
            </div>
            <div class="col-lg-5 col-12 align-self-center">
                <img class="img-fluid rounded border-5" src="{{asset('images/DigitallyCompetitive.png')}}" alt="Grow Scaled" />
            </div>
        </div>
    </div>
</section>
{{-- be found --}}

{{-- 360 --}}
<section id="s360s">
    <div class="container">
        <div class="col-12 text-center">
            <h3 class="fs36"> Our Range of Web Development Services </h3>
            <p class="ff-poppins"> We are empowering business to have a robust solution, customized for scalable and seamless integration. Save time &amp; effort with our optimized solutions to complete project within the deadline. With our framework development services redefine your digital landscape.  </p>
        </div>
        <div class="row">
            <div class="col-lg-4 col-12 my-3">
                <div class="card p-3" style="border-radius: 10px;">
                    <div class="card-body">
                        <span class="d-inline-block m-auto mb-3" style="background:var(--color-blue);padding:10px;border-radius:10px;">
                            <img width="35" height="35" src="{{asset('images/icons.png')}}" style="filter:brightness(0) invert(1);"/>
                        </span>
                        <h4> Cake PHP Development </h4>
                        <p class="fs14">
                            CakePHP is an open-source rapid development framework that works on the model-view-controller approach. It is mostly used to build static, custom web applications quickly, with minimum code. We have a team of professional CakePHP developers that builds dynamic, fast, and scalable web applications for your business enterprise.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-12 my-3">
                <div class="card p-3" style="border-radius: 10px;">
                    <div class="card-body">
                        <span class="d-inline-block m-auto mb-3" style="background:var(--color-green);padding:10px;border-radius:10px;">
                            <img width="35" height="35" src="{{asset('images/icons2.png')}}" style="filter:brightness(0) invert(1);"/>
                        </span>
                        <h4> Laravel Framework Development </h4>
                        <p class="fs14"> Laravel is a framework used by small, medium, and large business enterprises to build web applications easily and quickly. With years of experience in Laravel development, our team of developers provides specialized framework development services; we create highly customized web applications that fulfill your business requirements. </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-12 my-3">
                <div class="card p-3" style="border-radius: 10px;">
                    <div class="card-body">
                        <span class="d-inline-block m-auto mb-3" style="background:var(--color-green);padding:10px;border-radius:10px;">
                            <img width="35" height="35" src="{{asset('images/icons3.png')}}" style="filter:brightness(0) invert(1);"/>
                        </span>
                        <h4> Angular Development </h4>
                        <p class="fs14"> AngularJS is a Javascript-based framework that helps you create web applications. This open-source framework from Google develop and test applications with ease, using a client-side model controller view. We use the latest AngularJS techniques to implement effective AngularJS development solutions for your business. </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-12 my-3">
                <div class="card p-3" style="border-radius: 10px;">
                    <div class="card-body">
                        <span class="d-inline-block m-auto mb-3" style="background:var(--color-green);padding:10px;border-radius:10px;">
                            <img width="35" height="35" src="{{asset('images/icons4.png')}}" style="filter:brightness(0) invert(1);"/>
                        </span>
                        <h4>CodeIgniter Development </h4>
                        <p class="fs14"> CodeIgniter is a robust PHP framework featuring a small footprint and enables the development of simple, elegant, and fully-functional web applications. Our CodeIgniter developers are versed in managing the whole CI project lifecycle, ranging from ideation and web application development to integration and updates. </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-12 my-3">
                <div class="card p-3" style="border-radius: 10px;">
                    <div class="card-body">
                        <span class="d-inline-block m-auto mb-3" style="background:var(--color-green);padding:10px;border-radius:10px;">
                            <img width="35" height="35" src="{{asset('images/icons5.png')}}" style="filter:brightness(0) invert(1);"/>
                        </span>
                        <h4> Node.js Development </h4>
                        <p class="fs14"> Node.js is an open-source, cross-platform, Javascript-based framework helping to build fast and scalable web applications. It makes use of an event-driven, non-blocking I/O model that is perfect for making lightweight, efficient web applications that run across different devices. We are one of the leading Framework development companies providing high-performance and scalable web application development solutions. </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-12 my-3">
                <div class="card p-3" style="border-radius: 10px;">
                    <div class="card-body">
                        <span class="d-inline-block m-auto mb-3" style="background:var(--color-green);padding:10px;border-radius:10px;">
                            <img width="35" height="35" src="{{asset('images/WordPress.png')}}" style="filter:brightness(0) invert(1);"/>
                        </span>
                        <h4>WordPress Development</h4>
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
        <div class="col-lg-12 text-center"><h3 class="fs36 text-white">How have We Succeeded as an Web Development Services Provider So Far? </h3>
            <p class="fs16 ff-poppins text-white text-center">See how our Web Development agency transforms the business of our clients.  </p>
        </div>
        <div class="row pt-5">
            <div class="col-lg-6 col-12">
                <h3 class="fs32 text-white">Web Development for USA-Based Home Decor Brand to Secure Revenue &amp; Drive Conversion</h3>
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
            <h3 class="fs36">Technology Stack Infused in our Web Development Services </h3>
            <p class="ff-poppins">
                Escalate your brand and boost your Sales with our team and their bag full of technologies and Frameworks.
                </p>
        </div>
        <div class="row">
            <div class="col-lg-3 col-12 my-3">
                <div class="card p-0 overflow-hidden" style="border-radius: 10px;">
                    <div class="card-header p-0">
                        <span class="col-12 d-inline-block m-auto mb-0" style="color: #fff;font-size: 22px;font-style: normal;font-weight: 700;line-height: normal;border-bottom: 1px solid rgba(0, 0, 0, 0.10);background: #45187E;padding: 13px 15px;">
                            <h4 class="m-0">Web Development</h4>
                        </span>
                    </div>
                    <div class="card-body">
                        <ul class="list1">
                            <li><img  alt="JavaScript" src="{{asset('images/JavaScript.png')}}"/> JavaScript  </li>
                            <li><img  alt="PHP" src="{{asset('images/Python.png')}}"/> Python  </li>
                            <li><img  alt="HTML" src="{{asset('images/Ruby.png')}}"/>Ruby</li>
                            <li><img width="80" height="80" decoding="async" alt="CSS" src="{{asset('images/Ajax_nwlogo.png')}}"/>Ajax  </li>
                            <li><img  alt="PHP" src="{{asset('images/JSon_nwlogo.png')}}"/>JSON </li>
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
                            <li><img src="{{asset('images/vscode.png')}}" alt="Angular"/> Visual Studio Codе </li>
                            <li><img src="{{asset('images/Sublimе.png')}}" alt="React"/> Sublimе Tеxt </li>
                            <li><img src="{{asset('images/Git.png')}}" alt="React"/> Git</li>
                            <li><img src="{{asset('images/WordPress_nwlogo.png')}}" alt="Angular"/>WordPress</li>
                            <li><img src="{{asset('images/Magento_nwlogo.png')}}" alt="React"/>Magento</li>
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
                                <li><img src="{{asset('images/Rеact.png')}}" alt="Angular"/> Rеact </li>
                                <li><img src="{{asset('images/Angular.png')}}" alt="React"/> Angular</li>
                                {{-- <li><img src="{{asset('images/Django.png')}}" alt="React"/> Django</li> --}}
                                <li><img src="{{asset('images/Laravel_nwlogo.png')}}" alt="Angular"/>Laravel</li>
                                <li><img src="{{asset('images/codeigniter_nwlogo.png')}}" alt="React"/>CodeIgniter</li>
                                <li><img src="{{asset('images/cakephp-icon_nwlogo.png')}}" alt="React"/>CakePHP</li>
                                </ul>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-12 my-3">
                <div class="card p-0 overflow-hidden" style="border-radius: 10px;">
                    <div class="card-header p-0">
                        <span class="col-12 d-inline-block m-auto mb-0" style="color: #fff;font-size: 22px;font-style: normal;font-weight: 700;line-height: normal;border-bottom: 1px solid rgba(0, 0, 0, 0.10);background: #45187E;padding: 13px 15px;">
                            <h4 class="m-0">Services</h4>
                        </span>
                    </div>
                    <div class="card-body">
                        <ul class="list1">
                                <li><img src="{{asset('images/jQueryUI_nwlogo.png')}}" alt="Google Cloud" /> jQuery UI</li>
                                <li><img src="{{asset('images/RESTful.png')}}" alt="Amazon Web Services" />  RESTful APIs</li>
                                <li><img src="{{asset('images/Wеbhooks.png')}}" alt="Microsoft Azure" /> Wеbhooks</li>
                                {{-- <li><img src="{{asset('images/Salesforce-Marketing-Cloud.png')}}" alt="IBM Cloud" />Salesforce Marketing Cloud</li> --}}
                                <li><img src="{{asset('images/My-SQL.webp')}}" alt="IBM Cloud" width="44px;" /> MY SQL </li>
                                <li><img src="{{asset('images/maria.webp')}}" alt="IBM Cloud" width="44px;" /> mariaDB</li>
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
                        <p class="fs14">Conjoins with more customers and forms a community around your brand through Instagram social media marketing. Webixytech's marketing experts enhance your business profile, launch sponsored ads, rely on Instagram reels, and post IG stories to tell the brand story. Shake hands with us and let us refine your Instagram marketing with analytics.</p>
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
                        <p class="fs14">Webixytech as Web Development service providers knows how to establish a professional reputation for the brand across social media channels. We focus on building the right strategy to differentiate your brand from others. To ensure success in this segment, we handle your page, form valuable marketing posts, and connect with the industry with apt practices.</p>
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
                        <p class="fs14">Convert more visitors into your customers through Webixytech's Pinterest media marketing strategies. Our experts will make sure that each of your pins is categorized correctly including text on images, keyword-optimized descriptions, and powerful CTAs. Furthermore, we keep an eye on Pinterest analytics to identify performance and can improve if needed.</p>
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
                <h3 class="fs32">Our E-commerce Development Process</h3>
                <p class="ff-poppins">Know how we help businesses to share their brand story across all the social media channels to increase their leads or sales.</p>
            </div>
            <div class="col-lg-6 col-12">
                <div class="process">
                    <ul>
                        <li>
                            <img src="{{asset('images/Research.svg')}}" class="img-fluid" />
                            <span>
                                <h4>Discovery</h4>
                                <ul>
                                    <li><i class="fa fa-circle" aria-hidden="true"></i> Understanding eCommerce web development needs. </li>
                                    <li><i class="fa fa-circle" aria-hidden="true"></i> Getting the gist of your retail business strategy. </li>
                                    <li><i class="fa fa-circle" aria-hidden="true"></i> Performing initial research meeting your business goals. </li>
                                    </ul>
                            </span>
                        </li>
                        <li>
                            <img src="{{asset('images/Promote.svg')}}" class="img-fluid" />
                            <span>
                                <h4> Define </h4>
                                <ul>
                                    <li><i class="fa fa-circle" aria-hidden="true"></i> Creating initial requirement strategy. </li>
                                    <li><i class="fa fa-circle" aria-hidden="true"></i> Defining the development model. </li>
                                    <li><i class="fa fa-circle" aria-hidden="true"></i> Deciding the list of features &amp; functionalities. </li>
                                    </ul>
                            </span>
                        </li>
                        <li>
                            <img src="{{asset('images/Analyze.svg')}}" class="img-fluid" />
                            <span>
                                <h4> Design </h4>
                                <ul>
                                    <li><i class="fa fa-circle" aria-hidden="true"></i> Create team create initial level wireframes. </li>
                                    <li><i class="fa fa-circle" aria-hidden="true"></i> Adding aesthetic appeal to the design. </li>
                                    <li><i class="fa fa-circle" aria-hidden="true"></i> Giving final design touch for impressive UI/UX. </li>
                                    </ul>
                            </span>
                        </li>
                        <li>
                            <img src="{{asset('images/Optimize.svg')}}" class="img-fluid" />
                            <span>
                                <h4>Development</h4>
                                <ul>
                                    <li><i class="fa fa-circle" aria-hidden="true"></i> Create team create initial level wireframes. </li>
                                    <li><i class="fa fa-circle" aria-hidden="true"></i> Adding aesthetic appeal to the design. </li>
                                    <li><i class="fa fa-circle" aria-hidden="true"></i> Giving final design touch for impressive UI/UX. </li>
                                    </ul>
                            </span>
                        </li>
                        <li>
                            <img src="{{asset('images/Deploy-Run.svg')}}" class="img-fluid" />
                            <span>
                                <h4>Deploy</h4>
                                <ul>
                                    <li><i class="fa fa-circle" aria-hidden="true"></i> Perform end-to-end testing before release. </li>
                                    <li><i class="fa fa-circle" aria-hidden="true"></i> Fixing all the inconsistencies to ensure seamlessness. </li>
                                    <li><i class="fa fa-circle" aria-hidden="true"></i> Deploying eCommerce app as per the timeline.</li>
                                    </ul>
                            </span>
                        </li>
                        <li>
                            <img src="{{asset('images/Deploy-Run.svg')}}" class="img-fluid" />
                            <span>
                                <h4>Maintenance</h4>
                                <ul >
                                    <li><i class="fa fa-circle" aria-hidden="true"></i> Keeping a close check on the application. </li>
                                    <li><i class="fa fa-circle" aria-hidden="true"></i> Maintaining the app at regular intervals. </li>
                                    <li><i class="fa fa-circle" aria-hidden="true"></i> Upgrading security protocols to ensure safety.</li>
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
        <h3 class="text-white fs36"> Why Choose Webixytech as Your Tech Partner </h3>
        <p class="text-white ff-poppins"> As a reliable and best eCommerce website development company in India, we have proven expertise and two decades of experience to make quite a difference. </p>
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
                            <h4>Trustworthy Services </h4>
                            <p> At <a href="#">Webixytech</a>, we assign a specific expert to your brand depending on your social media marketing goals and needs. Those experts are available for you every time and are just a call away.</p>
                        </div>
                        <div class="item">
                            <span>02</span>
                            <h4> Proven Expertise </h4>
                            <p>We work with a client-centric approach and create tailor-made solutions that match the client’s requirements and expectations to perfection.</p>
                        </div>
                        <div class="item">
                            <span>03</span>
                            <h4>Cost-effective Solutions</h4>
                            <p>Webixytech being a renowned SMM Service providers serves cost-effective solutions that fetch impressive ROI for clients.</p>
                        </div>
                        <div class="item">
                            <span>04</span>
                            <h4>Results-Driven Methods</h4>
                            <p>We ensure that our client will get a subject matter expert. Our team has both paid and organic strategists and with them, we implement a tactic to maximize your conversions.</p>
                        </div>
                        <div class="item">
                            <span>05</span>
                            <h4>Reputable Clientele </h4>
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

