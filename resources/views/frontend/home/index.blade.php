@extends('layouts.frontend')
@section('content')
<div id="bannerSection" class="overflow-hidden vh-100 ">
    <div class="back-circle-one"></div>
    <div class="back-circle-two"></div>
    <div class="back-circle-three"></div>
    <div class="back-circle-four"></div>
    <div class="back-circle-five"></div>
    <div class="row justify-content-center align-items-center vh-100">
        <div class="col-sm-10 col-md-8  col-xl-5">
            <div id="curcleWrapper" class="">
                <div class="banner-image">
                    <div class="layer-one"></div>
                    <div class="layer-two"></div>
                    <div class="layer-three"></div>
                </div>
                <div class="laguage-image">
                    <div class="one" data-parallax='{"y":150, "x":0}'></div>
                    <div class="two" data-parallax='{"y":160, "x":50}'></div>
                    <div class="three" data-parallax='{"y":150, "x":90}'></div>
                    <div class="four" data-parallax='{"y":-10, "x":150}'></div>
                    <div class="five" data-parallax='{"y":-100, "x":150}'></div>
                    <div class="six" data-parallax='{"y":-150, "x":150}'></div>
                    <div class="seven" data-parallax='{"y":-150, "x":10}'></div>
                    <div class="eight" data-parallax='{"y":-150, "x":-150}'></div>
                    <div class="nine" data-parallax='{"y":-150, "x":-150}'></div>
                    <div class="ten" data-parallax='{"y":-50, "x":-150}'></div>
                    <div class="elaven" data-parallax='{"y":150, "x":-150}'></div>
                    <div class="twelve" data-parallax='{"y":150, "x":-150}'></div>

                </div>

            </div>
        </div>

    </div>
</div>


<div id="aboutSection" class="my80">
    <div class="wrapper">
        <x-section-title title="about" />
        <div class="row justify-content-center">
            <div class="col-md-5" id="leftSiteContent">
                <div class="left-site">
                    <ul class="nav nav-pills mb-3 justify-content-center" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home"
                                aria-selected="true">1</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile"
                                aria-selected="false">Education</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact"
                                aria-selected="false">Hobbies</button>
                        </li>
                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                            aria-labelledby="pills-home-tab">
                            <div class="d-flex flex-column align-items-center justify-content-center gap-2">
                                <img src="{{asset('assets/images/profile.jpg')}}"
                                    class="img-fluid box-shadow rounded p-1 w-75 border-success border" alt=""
                                    srcset="">
                                <h5 class="mt-2">MD RUPOM EHSAN</h5>
                                <p class="p-0">jn.software enginner at <a href="https://techpark.org/"
                                        target="_blank">Techpark IT</a></p>
                            </div>

                            <div class="center">
                                <div id="social-test">
                                    <ul class="social">
                                        <li>
                                            <a href="https://www.facebook.com/rupom.ehsan.5/" title=""><span
                                                    class="iconify" data-icon="logos:facebook"></span></a>
                                        </li>
                                        <li><a href="https://twitter.com/EhsanRupom" title=""><span class="iconify"
                                                    data-icon="devicon:twitter"></span></a></li>
                                        <li>
                                            <a href="https://www.youtube.com/channel/UChAz_f_ngfpsBTSC2OgrRug?view_as=subscriber"
                                                title=""><span class="iconify"
                                                    data-icon="entypo-social:youtube-with-circle"></span></a>
                                        </li>
                                        <li><a href="https://github.com/rupomehsan" title=""><span class="iconify"
                                                    data-icon="devicon:github"></span></a></li>
                                        <li><a href="https://github.com/rupomehsan" title=""><span class="iconify"
                                                    data-icon="devicon:linkedin"></span></a></li>


                                    </ul>
                                </div>
                            </div>
                            <hr class="my-2">
                            <div class="d-flex justify-content-between align-items-center mx-lg-5" id="cvPart">
                                <p class="text-uppercase">Download my cv</p>
                                <div class="downArrow bounce">
                                    <img width="40" height="40" alt=""
                                        src="{{asset('assets/images/download-arrow.png')}}">
                                </div>
                                <a href="cv.docx" download="">
                                    <span class="iconify" data-icon="el:download" style="color: red;" data-width="30"
                                        data-height="30"></span>
                                </a>
                            </div>

                        </div>

                        <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                            aria-labelledby="pills-profile-tab">
                            <h3 class="text-center">Education</h3>

                            <hr class="my-4">
                            <p><span>BSc -->></span> in Computer Science and Engineering(CSE) at Bangladesh
                                Institute of science and technology <br /> Session : 2014 - 15 </p>
                            <p class="my-3"><span>Hsc -->></span> Tamirulmillat kamil madrasah <br />Session : 2011-12,
                                Group : Science</p>
                            </p>
                            <p><span>Ssc -->></span> Muradpur Islamia Alim madrasah <br />Session : 2009-10,
                                Group : Science</p>
                            </p>
                        </div>
                        <div class="tab-pane fade" id="pills-contact" role="tabpanel"
                            aria-labelledby="pills-contact-tab">
                            <h3 class="text-center">hobbies</h3>
                            <hr class="my-4">
                            <p><span>travelling -->></span> " I love to travel because not only is it the ultimate
                                adventure but it also exposes you to new types of people, different ways of
                                living, and opens up your mind. I just like to walk around in beautiful places
                                that resemble the chareteritics of paradies that are explained in the holy quran."</p>
                            <p><span>gaming -->></span>i would like to Play game in my free times </p>
                            <p><span>sports -->></span>Playing individual sports (criket,football,badminton, etc.)
                            </p>

                            <p><span>technology -->></span>Keeping up with the latest developments in technology</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="left-site">
                    <ul class="nav nav-pills mb-3 justify-content-center" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="pills-about-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-about" type="button" role="tab" aria-controls="pills-home"
                                aria-selected="true">1</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link text-uppercase" id="pills-profession-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-profession" type="button" role="tab"
                                aria-controls="pills-profile" aria-selected="false">PROFESSION</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link text-uppercase" id="pills-service-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-service" type="button" role="tab" aria-controls="pills-contact"
                                aria-selected="false">service</button>
                        </li>
                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-about" role="tabpanel"
                            aria-labelledby="pills-about-tab">
                            <div class="">
                                <h4 style="padding-bottom: 30px;margin-top: 10px;" class="text-center">SOME WORDS ABOUT
                                    ME</h4>
                                <hr class="my-4">
                                <p>
                                    HELLO. I'M RUPOM EHSAN FROM BNAGLADESH. I AM A FULLSTACK WEB DEVELOPER WORKING
                                    WITH LOCAL AND INTERNATIONAL CLIENTS SINCE 2018. I CAN DESIGN OR REDESIGN YOUR
                                    EXISITING WEBSITES OR WEB APPLICATION.BUILD SOCIAL PROFILES , GAIN REVENUE AND
                                    PROFITS.ITS NOT ONLY MY PROFESSION ITS MY PASSION.<br>
                                    <span>MISSION--&gt;</span>WE DELIVER UNIQUE QUALITY AND RESPONSIVE DESIGN FOR
                                    WEBSITE.<br>
                                    <span>MISSION--&gt;</span>WE ARE PROVIDE USER FRIENDLY ENTERFACE, PIXEL IDEALIZE
                                    FORMATE,W3C LEGITIMATE CODE TO THE USER. <br>
                                    <span>MISSION--&gt;</span> WE FOLLOW ALL THE STANDARDS OF GOOGLE SEARCH ENGINE
                                    OPTIMIZATION.<br>
                                    <span>MISSION--&gt;</span> WE FOLLOW ALL THE STANDARDS OF GOOGLE SEARCH ENGINE
                                    OPTIMIZATION.<br>

                                </p>
                            </div>



                        </div>

                        <div class="tab-pane fade" id="pills-profession" role="tabpanel"
                            aria-labelledby="pills-profession-tab">
                            <h4 class="text-center">Profession </h4>
                            <hr class="my-4">
                            <div>
                                <p>
                                    <span>CCN Infotech Ltd -->></span>
                                    Working as a junior software engineer , as well as frontend and backend both
                                    technology at CCN Infotech Ltd, Location — Bashundhara R/A
                                    June 2022 - PRESENT.
                                </p>

                                <p>
                                    <span> Project X Ltd -->></span>
                                    I worked as a Backend developer at Project X Ltd, Location — Khilkeht,nikunja 2,
                                    September 2021 - May 2022.
                                </p>

                                <p>
                                    <span>Agamisoft -->></span>
                                    I worked as an intern for a Frontend developer . March 2021 - September 2021.
                                </p>
                            </div>
                            <hr class="my-4">
                            <p class="text-center">YOU CAN HIRE ME ON</p>
                            <hr class="my-4">

                            <div class="social2">
                                <ul>
                                    <li>
                                        <a target="_blank" href="https://www.freelancer.com/u/rupomehsan">
                                            <img src="{{asset('assets')}}/images/freelancer.jpg">
                                        </a>
                                        <span>FREELANCER</span>
                                    </li>
                                    <li>
                                        <a target="_blank" href="https://www.fiverr.com/rupom_ehsan?up_rollout=true">
                                            <img src="{{asset('assets')}}/images/fiver.jpg">
                                        </a>
                                        <span>FIVER</span>
                                    </li>
                                    <li>
                                        <a target="_blank"
                                            href="https://www.upwork.com/freelancers/~010e8a7dea092d1282">
                                            <img src="{{asset('assets')}}/images/upwork.jpg">
                                        </a>
                                        <span>UPWORK</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-service" role="tabpanel"
                            aria-labelledby="pills-service-tab">
                            <h4 class="text-center">service</h4>
                            <hr class="my-4">
                            <div class="row">
                                <div class="col-md-4 col-sm-4 col-xs-4">
                                    <div class="serviceBox">
                                        <div class="service-icon"><span class="iconify" data-icon="mdi:web"
                                                style="color: red;" data-width="40" data-height="40"></span></div>
                                        <p class="title">Web Design</p>

                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-4 col-xs-4">
                                    <div class="serviceBox">
                                        <div class="service-icon"><span class="iconify" data-icon="bi:server"
                                                style="color: red;" data-width="40" data-height="40"></span></i>
                                        </div>
                                        <p class="title">Web Development</p>

                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-4 col-xs-4">
                                    <div class="serviceBox">
                                        <div class="service-icon"><span class="iconify" data-icon="fa6-solid:rocket"
                                                style="color: red;" data-width="40" data-height="40"></span>
                                        </div>
                                        <p class="title">MOBILE APPLICATION</p>

                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-4 col-xs-4">
                                    <div class="serviceBox">
                                        <div class="service-icon"><span class="iconify" data-icon="mdi:web"
                                                style="color: red;" data-width="40" data-height="40"></span></div>
                                        <p class="title">RESPONSIVE DESIGN</p>

                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-4 col-xs-4">
                                    <div class="serviceBox">
                                        <div class="service-icon"><span class="iconify" data-icon="bi:server"
                                                style="color: red;" data-width="40" data-height="40"></span></i>
                                        </div>
                                        <p class="title">Ecommerce</p>

                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-4 col-xs-4">
                                    <div class="serviceBox">
                                        <div class="service-icon"><span class="iconify" data-icon="fa6-solid:rocket"
                                                style="color: red;" data-width="40" data-height="40"></span>
                                        </div>
                                        <p class="title">boosting</p>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<hr>

<div id="skillSection" class="mt-3">
    <div class="wrapper">
        <x-section-title title="skill" />
        <div>
            <div class="left-site">
                <ul class="nav nav-pills mb-3 justify-content-center" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="pills-programing-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-programing" type="button" role="tab" aria-controls="pills-programing"
                            aria-selected="true">PROGRAMING</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-graphics-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-graphics" type="button" role="tab" aria-controls="pills-graphics"
                            aria-selected="false">GRAPHICS</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-language-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-language" type="button" role="tab" aria-controls="pills-language"
                            aria-selected="false">LANGUAGE</button>
                    </li>
                </ul>
                <div class="tab-content my-5" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-programing" role="tabpanel"
                        aria-labelledby="pills-programing-tab">
                        <div class="pricing-wrap">
                            <div class="theme-container">
                                <div class="row">
                                    <div class="col-md-12  main-row">
                                        <div class="pricing-box clrbg-before clrbg-after transition">
                                            <h4>programing skills</h4>
                                            <hr class="my-2">
                                            <div class="row mt70">
                                                <div class="col-md-6">
                                                    <div class="progress green">
                                                        <h3 class="progress-title">HTML5</h3>
                                                        <div class="progress-bar"
                                                            style="width:85%; background:#21da9a;">
                                                            <div class="progress-value">85%</div>
                                                        </div>
                                                    </div>
                                                    <div class="progress pink">
                                                        <h3 class="progress-title">CSS3</h3>
                                                        <div class="progress-bar"
                                                            style="width:70%; background:#ff1170;">
                                                            <div class="progress-value">70%</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="progress green">
                                                        <h3 class="progress-title">javasript</h3>
                                                        <div class="progress-bar"
                                                            style="width:50%; background:#21da9a;">
                                                            <div class="progress-value">50%</div>
                                                        </div>
                                                    </div>
                                                    <div class="progress pink">
                                                        <h3 class="progress-title">php</h3>
                                                        <div class="progress-bar"
                                                            style="width:55%; background:#ff1170;">
                                                            <div class="progress-value">55%</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="progress green">
                                                        <h3 class="progress-title">sql</h3>
                                                        <div class="progress-bar"
                                                            style="width:45%; background:#21da9a;">
                                                            <div class="progress-value">65%</div>
                                                        </div>
                                                    </div>
                                                    <div class="progress pink">
                                                        <h3 class="progress-title">worpdpress</h3>
                                                        <div class="progress-bar"
                                                            style="width:87%; background:#ff1170;">
                                                            <div class="progress-value">60%</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="progress green">
                                                        <h3 class="progress-title">c</h3>
                                                        <div class="progress-bar"
                                                            style="width:40%; background:#21da9a;">
                                                            <div class="progress-value">40%</div>
                                                        </div>
                                                    </div>
                                                    <div class="progress pink">
                                                        <h3 class="progress-title">c++</h3>
                                                        <div class="progress-bar"
                                                            style="width:40%; background:#ff1170;">
                                                            <div class="progress-value">40%</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="pricing-hover clrbg-before clrbg-after transition"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="pills-graphics" role="tabpanel" aria-labelledby="pills-graphics-tab">
                        <div class="pricing-wrap">
                            <div class="theme-container">
                                <div class="row">
                                    <div class="col-md-12  main-row">
                                        <div class="pricing-box clrbg-before clrbg-after transition">
                                            <h4>graphics skills</h4>
                                            <hr class="my-2">
                                            <div class="row mt70">
                                                <div class="col-md-6">
                                                    <div class="progress green">
                                                        <h3 class="progress-title">HTML5</h3>
                                                        <div class="progress-bar"
                                                            style="width:85%; background:#21da9a;">
                                                            <div class="progress-value">85%</div>
                                                        </div>
                                                    </div>
                                                    <div class="progress pink">
                                                        <h3 class="progress-title">CSS3</h3>
                                                        <div class="progress-bar"
                                                            style="width:70%; background:#ff1170;">
                                                            <div class="progress-value">70%</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="progress green">
                                                        <h3 class="progress-title">javasript</h3>
                                                        <div class="progress-bar"
                                                            style="width:50%; background:#21da9a;">
                                                            <div class="progress-value">50%</div>
                                                        </div>
                                                    </div>
                                                    <div class="progress pink">
                                                        <h3 class="progress-title">php</h3>
                                                        <div class="progress-bar"
                                                            style="width:55%; background:#ff1170;">
                                                            <div class="progress-value">55%</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="progress green">
                                                        <h3 class="progress-title">sql</h3>
                                                        <div class="progress-bar"
                                                            style="width:45%; background:#21da9a;">
                                                            <div class="progress-value">65%</div>
                                                        </div>
                                                    </div>
                                                    <div class="progress pink">
                                                        <h3 class="progress-title">worpdpress</h3>
                                                        <div class="progress-bar"
                                                            style="width:87%; background:#ff1170;">
                                                            <div class="progress-value">60%</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="progress green">
                                                        <h3 class="progress-title">c</h3>
                                                        <div class="progress-bar"
                                                            style="width:40%; background:#21da9a;">
                                                            <div class="progress-value">40%</div>
                                                        </div>
                                                    </div>
                                                    <div class="progress pink">
                                                        <h3 class="progress-title">c++</h3>
                                                        <div class="progress-bar"
                                                            style="width:40%; background:#ff1170;">
                                                            <div class="progress-value">40%</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="pricing-hover clrbg-before clrbg-after transition"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>



                    </div>
                    <div class="tab-pane fade" id="pills-language" role="tabpanel" aria-labelledby="pills-language-tab">
                        <div class="pricing-wrap">
                            <div class="theme-container">
                                <div class="row">
                                    <div class="col-md-12  main-row">
                                        <div class="pricing-box clrbg-before clrbg-after transition">
                                            <h4>language skills</h4>
                                            <hr class="my-2">
                                            <div class="row mt70">
                                                <div class="col-md-6">
                                                    <div class="progress green">
                                                        <h3 class="progress-title">HTML5</h3>
                                                        <div class="progress-bar"
                                                            style="width:85%; background:#21da9a;">
                                                            <div class="progress-value">85%</div>
                                                        </div>
                                                    </div>
                                                    <div class="progress pink">
                                                        <h3 class="progress-title">CSS3</h3>
                                                        <div class="progress-bar"
                                                            style="width:70%; background:#ff1170;">
                                                            <div class="progress-value">70%</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="progress green">
                                                        <h3 class="progress-title">javasript</h3>
                                                        <div class="progress-bar"
                                                            style="width:50%; background:#21da9a;">
                                                            <div class="progress-value">50%</div>
                                                        </div>
                                                    </div>
                                                    <div class="progress pink">
                                                        <h3 class="progress-title">php</h3>
                                                        <div class="progress-bar"
                                                            style="width:55%; background:#ff1170;">
                                                            <div class="progress-value">55%</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="progress green">
                                                        <h3 class="progress-title">sql</h3>
                                                        <div class="progress-bar"
                                                            style="width:45%; background:#21da9a;">
                                                            <div class="progress-value">65%</div>
                                                        </div>
                                                    </div>
                                                    <div class="progress pink">
                                                        <h3 class="progress-title">worpdpress</h3>
                                                        <div class="progress-bar"
                                                            style="width:87%; background:#ff1170;">
                                                            <div class="progress-value">60%</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="progress green">
                                                        <h3 class="progress-title">c</h3>
                                                        <div class="progress-bar"
                                                            style="width:40%; background:#21da9a;">
                                                            <div class="progress-value">40%</div>
                                                        </div>
                                                    </div>
                                                    <div class="progress pink">
                                                        <h3 class="progress-title">c++</h3>
                                                        <div class="progress-bar"
                                                            style="width:40%; background:#ff1170;">
                                                            <div class="progress-value">40%</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="pricing-hover clrbg-before clrbg-after transition"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<hr>

<div id="portfolioSection" class="mt-3">
    <div class="wrapper">
        <x-section-title title="Portfolio" />

        <div class="left-site my-5">
            <div class="d-flex align-items-center">
                <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <button class="nav-link text-white active" id="v-pills-home-tab" data-bs-toggle="pill"
                        data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home"
                        aria-selected="true">Home</button>
                    <button class="nav-link text-white" id="v-pills-profile-tab" data-bs-toggle="pill"
                        data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile"
                        aria-selected="false">Profile</button>
                    <button class="nav-link text-white" id="v-pills-messages-tab" data-bs-toggle="pill"
                        data-bs-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages"
                        aria-selected="false">Messages</button>
                    <button class="nav-link text-white" id="v-pills-settings-tab" data-bs-toggle="pill"
                        data-bs-target="#v-pills-settings" type="button" role="tab" aria-controls="v-pills-settings"
                        aria-selected="false">Settings</button>
                </div>
                <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel"
                        aria-labelledby="v-pills-home-tab">

                        <div class="row g-4">
                            <div class="col-md-4 ">
                                <div class=" overflow-hidden">
                                    <img src="{{asset('assets/images/portfolio/landing1.png')}}" height="200"
                                        class="w-100" alt="" width="200">
                                    <a href="#" class="link">
                                        <span data-hover="click here">project link</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-4 ">
                                <div class=" overflow-hidden">
                                    <img src="{{asset('assets/images/portfolio/landing1.png')}}" height="200"
                                        class="w-100" alt="" width="200">
                                    <a href="#" class="link">
                                        <span data-hover="click here">project link</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-4 ">
                                <div class=" overflow-hidden">
                                    <img src="{{asset('assets/images/portfolio/landing1.png')}}" height="200"
                                        class="w-100" alt="" width="200">
                                    <a href="#" class="link">
                                        <span data-hover="click here">project link</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-4 ">
                                <div class=" overflow-hidden">
                                    <img src="{{asset('assets/images/portfolio/landing1.png')}}" height="200"
                                        class="w-100" alt="" width="200">
                                    <a href="#" class="link">
                                        <span data-hover="click here">project link</span>
                                    </a>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="tab-pane fade" id="v-pills-profile" role="tabpanel"
                        aria-labelledby="v-pills-profile-tab">
                        <div class="row g-4">
                            <div class="col-md-4 ">
                                <div class=" overflow-hidden">
                                    <img src="{{asset('assets/images/portfolio/landing1.png')}}" height="200"
                                        class="w-100" alt="" width="200">
                                    <a href="#" class="link">
                                        <span data-hover="click here">project link</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-4 ">
                                <div class=" overflow-hidden">
                                    <img src="{{asset('assets/images/portfolio/landing1.png')}}" height="200"
                                        class="w-100" alt="" width="200">
                                    <a href="#" class="link">
                                        <span data-hover="click here">project link</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-4 ">
                                <div class=" overflow-hidden">
                                    <img src="{{asset('assets/images/portfolio/landing1.png')}}" height="200"
                                        class="w-100" alt="" width="200">
                                    <a href="#" class="link">
                                        <span data-hover="click here">project link</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-4 ">
                                <div class=" overflow-hidden">
                                    <img src="{{asset('assets/images/portfolio/landing1.png')}}" height="200"
                                        class="w-100" alt="" width="200">
                                    <a href="#" class="link">
                                        <span data-hover="click here">project link</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-messages" role="tabpanel"
                        aria-labelledby="v-pills-messages-tab">
                        <div class="row g-4">
                            <div class="col-md-4 ">
                                <div class=" overflow-hidden">
                                    <img src="{{asset('assets/images/portfolio/landing1.png')}}" height="200"
                                        class="w-100" alt="" width="200">
                                    <a href="#" class="link">
                                        <span data-hover="click here">project link</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-4 ">
                                <div class=" overflow-hidden">
                                    <img src="{{asset('assets/images/portfolio/landing1.png')}}" height="200"
                                        class="w-100" alt="" width="200">
                                    <a href="#" class="link">
                                        <span data-hover="click here">project link</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-4 ">
                                <div class=" overflow-hidden">
                                    <img src="{{asset('assets/images/portfolio/landing1.png')}}" height="200"
                                        class="w-100" alt="" width="200">
                                    <a href="#" class="link">
                                        <span data-hover="click here">project link</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-4 ">
                                <div class=" overflow-hidden">
                                    <img src="{{asset('assets/images/portfolio/landing1.png')}}" height="200"
                                        class="w-100" alt="" width="200">
                                    <a href="#" class="link">
                                        <span data-hover="click here">project link</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-settings" role="tabpanel"
                        aria-labelledby="v-pills-settings-tab">
                        <div class="row g-4">
                            <div class="col-md-4 ">
                                <div class=" overflow-hidden">
                                    <img src="{{asset('assets/images/portfolio/landing1.png')}}" height="200"
                                        class="w-100" alt="" width="200">
                                    <a href="#" class="link">
                                        <span data-hover="click here">project link</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-4 ">
                                <div class=" overflow-hidden">
                                    <img src="{{asset('assets/images/portfolio/landing1.png')}}" height="200"
                                        class="w-100" alt="" width="200">
                                    <a href="#" class="link">
                                        <span data-hover="click here">project link</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-4 ">
                                <div class=" overflow-hidden">
                                    <img src="{{asset('assets/images/portfolio/landing1.png')}}" height="200"
                                        class="w-100" alt="" width="200">
                                    <a href="#" class="link">
                                        <span data-hover="click here">project link</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-4 ">
                                <div class=" overflow-hidden">
                                    <img src="{{asset('assets/images/portfolio/landing1.png')}}" height="200"
                                        class="w-100" alt="" width="200">
                                    <a href="#" class="link">
                                        <span data-hover="click here">project link</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="w-25 m-auto my-5">
                <a href="{{url('all-projects')}}" class="link all-btn">
                    <span data-hover="click here" class="py-3 text-gray">see my all porjects</span>
                </a>
            </div>
        </div>
    </div>
</div>
<hr>

<div id="clientSection" class="my80">
    <div class="wrapper">
        <x-section-title title="client" />

        <div class="row wrapper">
            <div class="col-md-12">
                <div id="testimonial-slider" class="owl-carousel">
                    <div class="testimonial">
                        <div class="pic">
                            <img src="{{asset('assets')}}/images/client-1.jpg" alt="">
                        </div>
                        <h3 class="title">Ravi M.</h3>
                        <p class="description"> "I was most impressed by the quality of work and communication."Good
                            Job!!... Will hire him again.</p>
                        <div class="testimonial-content">
                            <div class="testimonial-profile">
                                <h3 class="name">from : US,TEXAS.</h3>
                                <span class="post">Web Developer</span>
                            </div>
                            <ul class="rating">
                                <h3 class="name text-center">rating</h3>
                                <span class="iconify" data-icon="ic:baseline-star-rate" style="color: orange;"></span>
                                <span class="iconify" data-icon="ic:baseline-star-rate" style="color: orange;"></span>
                                <span class="iconify" data-icon="ic:baseline-star-rate" style="color: orange;"></span>
                                <span class="iconify" data-icon="ic:baseline-star-rate" style="color: orange;"></span>
                                <span class="iconify" data-icon="ic:baseline-star-rate" style="color: orange;"></span>
                            </ul>
                        </div>
                    </div>
                    <div class="testimonial">
                        <div class="pic">
                            <img src="{{asset('assets')}}/images/client-2.jpg" alt="">
                        </div>
                        <h3 class="title">ankit mozumder</h3>
                        <p class="description">“I think the main thing that distinguishes Website Design and how
                            seriously they take their work.”</p>
                        <div class="testimonial-content">
                            <div class="testimonial-profile">
                                <h3 class="name">from : india,jaipur</h3>
                                <span class="post">management builder</span>
                            </div>
                            <ul class="rating">
                                <h3 class="name text-center">rating</h3>
                                <span class="iconify" data-icon="ic:baseline-star-rate" style="color: orange;"></span>
                                <span class="iconify" data-icon="ic:baseline-star-rate" style="color: orange;"></span>
                                <span class="iconify" data-icon="ic:baseline-star-rate" style="color: orange;"></span>
                                <span class="iconify" data-icon="ic:baseline-star-rate" style="color: orange;"></span>
                                <span class="iconify" data-icon="ic:baseline-star-rate" style="color: orange;"></span>
                            </ul>
                        </div>
                    </div>
                    <div class="testimonial">
                        <div class="pic">
                            <img src="{{asset('assets')}}/images/client-1.jpg" alt="">
                        </div>
                        <h3 class="title">Ravi M.</h3>
                        <p class="description"> "I was most impressed by the quality of work and communication."Good
                            Job!!... Will hire him again.</p>
                        <div class="testimonial-content">
                            <div class="testimonial-profile">
                                <h3 class="name">from : US,TEXAS.</h3>
                                <span class="post">Web Developer</span>
                            </div>
                            <ul class="rating">
                                <h3 class="name text-center">rating</h3>
                                <span class="iconify" data-icon="ic:baseline-star-rate" style="color: orange;"></span>
                                <span class="iconify" data-icon="ic:baseline-star-rate" style="color: orange;"></span>
                                <span class="iconify" data-icon="ic:baseline-star-rate" style="color: orange;"></span>
                                <span class="iconify" data-icon="ic:baseline-star-rate" style="color: orange;"></span>
                                <span class="iconify" data-icon="ic:baseline-star-rate" style="color: orange;"></span>
                            </ul>
                        </div>
                    </div>
                    <div class="testimonial">
                        <div class="pic">
                            <img src="{{asset('assets')}}/images/client-2.jpg" alt="">
                        </div>
                        <h3 class="title">ankit mozumder</h3>
                        <p class="description">“I think the main thing that distinguishes Website Design and how
                            seriously they take their work.”</p>
                        <div class="testimonial-content">
                            <div class="testimonial-profile">
                                <h3 class="name">from : india,jaipur</h3>
                                <span class="post">management builder</span>
                            </div>
                            <ul class="rating">
                                <h3 class="name text-center">rating</h3>
                                <span class="iconify" data-icon="ic:baseline-star-rate" style="color: orange;"></span>
                                <span class="iconify" data-icon="ic:baseline-star-rate" style="color: orange;"></span>
                                <span class="iconify" data-icon="ic:baseline-star-rate" style="color: orange;"></span>
                                <span class="iconify" data-icon="ic:baseline-star-rate" style="color: orange;"></span>
                                <span class="iconify" data-icon="ic:baseline-star-rate" style="color: orange;"></span>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<hr>

<div id="blogSection" class="my80">
    <div class="wrapper">
        <x-section-title title="blogs" />
        <div class="row">
            <div class="col-md-4">

                <div class="column">
                    <!-- Post-->
                    <div class="post-module">
                        <!-- Thumbnail-->
                        <div class="thumbnail">
                            <div class="date">
                                <div class="day">27</div>
                                <div class="month">Mar</div>
                            </div>
                            <div style="height:300px;">
                                <iframe class="w-100 h-100" src="https://www.youtube.com/embed/c_-b_isI4vg"
                                    title="Full Stack Airbnb Clone with Next.js 13 App Router: React, Tailwind, Prisma, MongoDB, NextAuth 2023"
                                    frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                    allowfullscreen></iframe>
                            </div>
                        </div>
                        <!-- Post Content-->
                        <div class="post-content">
                            <div class="category"> <a href="{{url('blog-details')}}">Details</a></div>
                            <h1 class="title">City Lights in New York</h1>
                            <h2 class="sub_title">The city that never sleeps.</h2>
                            <p class="description">New York, the largest city in the U.S., is an architectural
                                marvel with
                                plenty of historic monuments, magnificent buildings and countless dazzling
                                skyscrapers.</p>
                            <div class="post-meta"><span class="timestamp"><i class="fa fa-clock-">o</i> 6 mins
                                    ago</span><span class="comments"><i class="fa fa-comments"></i><a href="#"> 39
                                        comments</a></span></div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="col-md-4">

                <div class="column">
                    <!-- Post-->
                    <div class="post-module">
                        <!-- Thumbnail-->
                        <div class="thumbnail">
                            <div class="date">
                                <div class="day">27</div>
                                <div class="month">Mar</div>
                            </div>
                            <div style="height:300px;">
                                <!-- <img src="{{asset('')}}" alt=""> -->
                                <div class="h-100 p-0">
                                    <iframe class="w-100 h-100" src="https://www.youtube.com/embed/dTFXufTgfOE"
                                        title="Build a Fullstack E-commerce using Next.js (react.js, mongo, tailwind, styled components)"
                                        frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                        allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>
                        <!-- Post Content-->
                        <div class="post-content">
                            <div class="category"> <a href="{{url('blog-details')}}">Details</a></div>
                            <h1 class="title">City Lights in New York</h1>
                            <h2 class="sub_title">The city that never sleeps.</h2>
                            <p class="description ">New York, the largest city in the U.S., is an architectural
                                marvel with
                                plenty of historic monuments, magnificent buildings and countless dazzling
                                skyscrapers.</p>
                            <div class="post-meta"><span class="timestamp"><i class="fa fa-clock-">o</i> 6 mins
                                    ago</span><span class="comments"><i class="fa fa-comments"></i><a href="#"> 39
                                        comments</a></span></div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-md-4">

                <div class="column">
                    <!-- Post-->
                    <div class="post-module">
                        <!-- Thumbnail-->
                        <div class="thumbnail">
                            <div class="date">
                                <div class="day">27</div>
                                <div class="month">Mar</div>
                            </div><img
                                src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/169963/photo-1429043794791-eb8f26f44081.jpeg" />
                        </div>
                        <!-- Post Content-->
                        <div class="post-content">
                            <div class="category"> <a href="{{url('blog-details')}}">Details</a></div>
                            <h1 class="title">City Lights in New York</h1>
                            <h2 class="sub_title">The city that never sleeps.</h2>
                            <p class="description ">New York, the largest city in the U.S., is an architectural
                                marvel with
                                plenty of historic monuments, magnificent buildings and countless dazzling
                                skyscrapers.</p>
                            <div class="post-meta"><span class="timestamp"><i class="fa fa-clock-">o</i> 6 mins
                                    ago</span><span class="comments"><i class="fa fa-comments"></i><a href="#"> 39
                                        comments</a></span></div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="w-25 m-auto my-5">
            <a href="{{url('all-blogs')}}" class="link all-btn">
                <span data-hover="click here" class="py-3 text-gray">see my all blogs</span>
            </a>
        </div>

    </div>
</div>
<hr>

<section class="contact contact-bg my80" id="contact">
    <div class="wrapper">
        <x-section-title title="Contact" />
        <div class="container-contact100">
            <div class="wrap-contact100">
                <form id="contactForm" class="contact100-form">
                    <div class="wrap-input100 rs2-wrap-input100 validate-input mt-20 " data-validate="Type first name">
                        <input class="input100" type="text" id="first-name" name="first-name" placeholder="First name">
                        <span class="focus-input100"></span>
                    </div>
                    <div class="wrap-input100 rs2-wrap-input100 validate-input mt-20 " data-validate="Type last name">
                        <input class="input100" type="text" id="last-name" name="last-name" placeholder="Last name">
                        <span class="focus-input100"></span>
                    </div>
                    <div class="wrap-input100 validate-input mt-20" data-validate="Valid email is required: ex@abc.xyz">
                        <input id="email" class="input100" type="email" name="email" placeholder="Enter your email">
                        <span class="focus-input100"></span>
                    </div>
                    <div class="wrap-input100 mt-20">
                        <input id="phone" class="input100" type="number" name="phone" placeholder="Enter your phone">
                        <span class="focus-input100"></span>
                    </div>
                    <!--  <label class="label-input100" for="message">Message *</label> -->
                    <div class="wrap-input100 validate-input mt-20" data-validate="Message is required">
                        <textarea id="message" class="input100" name="message"
                            placeholder="Write your opinion"></textarea>
                        <span class="focus-input100"></span>
                    </div>
                    <div class="d-flex justify-content-center align-items-center w-100">
                        <button class="submit-btn">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>

</section>
<script>
    setTimeout(() => {
        ClinetSlider()
        textAnimation()
    }, 2000);
</script>
@endsection
