@extends('layouts.frontend')
@section('content')

<div class="wrapper">
    <x-section-title title="all blogs" />
    <div class="row my80">
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

</div>

@endsection
