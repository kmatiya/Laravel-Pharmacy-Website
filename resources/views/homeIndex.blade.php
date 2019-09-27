@extends('master')

@section('content')
<aside id="fh5co-hero" class="js-fullheight">
    <div class="flexslider js-fullheight">
        <ul class="slides">
           <li style="background-image: url(images/img_bg_1.jpg);">
               <div class="overlay-gradient"></div>
               <div class="container">
                   <div class="col-md-6 col-md-offset-3 col-md-pull-3 js-fullheight slider-text">
                       <!--div class="slider-text-inner">
                           <div class="desc">
                               <h2>Alato Cabinet</h2>
                               <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove.</p>
                               <p><a href="single.html" class="btn btn-primary btn-outline btn-lg">Purchase Now</a></p>
                           </div>
                       </div-->
                   </div>
               </div>
           </li>
    <li style="background-image: url({{asset('images/img_bg_2.jpg')}});">
               <div class="container">
                   <div class="col-md-6 col-md-offset-3 col-md-pull-3 js-fullheight slider-text">
                       <div class="slider-text-inner">
                           <div class="desc">
                               <h2 style="color:black;">Products always available.</h2>
                               <!--p style="color:white;"></p>
                               <p><a href="single.html" class="btn btn-primary btn-outline btn-lg">Purchase Now</a></p>-->
                           </div>
                       </div>
                   </div>
               </div>
           </li>
    <li style="background-image: url({{asset('images/img_bg_3.jpg')}});">
               <div class="container">
                   <div class="col-md-6 col-md-offset-3 col-md-pull-3 js-fullheight slider-text">
                       <div class="slider-text-inner">
                           <div class="desc">
                               <h2 style="color:black;">Always there to assist.</h2>
                               <p style="color:black;">
                                You can always contact us via calls, email for any assistance you may desire from us.
                                We delight to connect with our clients.
                            </p>
                           </div>
                       </div>
                   </div>
               </div>
           </li>

        <li style="background-image: url({{asset('images/img_bg_4.jpg')}});">
               <div class="container">
                   <div class="col-md-6 col-md-offset-3 col-md-pull-3 js-fullheight slider-text">
                       <div class="slider-text-inner">
                           <div class="desc">
                               <h2 style="color:black;">Always friendly.</h2>
                           </div>
                       </div>
                   </div>
               </div>
           </li>
        <li style="background-image: url({{asset('images/img_bg_5.jpg')}});">
            <div class="container">
                <div class="col-md-6 col-md-offset-3 col-md-pull-3 js-fullheight slider-text">
                    <div class="slider-text-inner">
                        <div class="desc">
                            <h2 style="color:black;">We have well trained and qualified pharmacists and nurses under the Medical Council of Malawi.</h2>
                        </div>
                    </div>
                </div>
            </div>
        </li>
          </ul>
      </div>
</aside>

<div id="fh5co-services" class="fh5co-bg-section">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-4 text-center">
                <div class="feature-center animate-box" data-animate-effect="fadeIn">
                    <span class="icon">
                        <i class="icon-credit-card"></i>
                    </span>
                    <h3>Credit Card</h3>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove</p>
                    <p><a href="#" class="btn btn-primary btn-outline">Learn More</a></p>
                </div>
            </div>
            <div class="col-md-4 col-sm-4 text-center">
                <div class="feature-center animate-box" data-animate-effect="fadeIn">
                    <span class="icon">
                        <i class="icon-wallet"></i>
                    </span>
                    <h3>Save Money</h3>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove</p>
                    <p><a href="#" class="btn btn-primary btn-outline">Learn More</a></p>
                </div>
            </div>
            <div class="col-md-4 col-sm-4 text-center">
                <div class="feature-center animate-box" data-animate-effect="fadeIn">
                    <span class="icon">
                        <i class="icon-paper-plane"></i>
                    </span>
                    <h3>Free Delivery</h3>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove</p>
                    <p class="freeDelivery">This is the learn more paragraph</p>
                    <p class="freeDelivery">Quality health care for you.</p>
                    <p><button class="btn btn-primary btn-outline" id="loadFreeDelivery">Learn More</button></p>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="fh5co-product">
    <div class="container">
        <div class="row animate-box">
            <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                <span>Cool Stuff</span>
                <h2>Products.</h2>
                <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 text-center animate-box">
                <div class="product">
                    <div class="product-grid" style="background-image:url(images/product-1.jpg);">
                        <div class="inner">
                            <p>
                                <a href="single.html" class="icon"><i class="icon-shopping-cart"></i></a>
                                <a href="single.html" class="icon"><i class="icon-eye"></i></a>
                            </p>
                        </div>
                    </div>
                    <div class="desc">
                        <h3><a href="single.html">Gastro intenstinal</a></h3>
                    </div>
                </div>
            </div>
            <div class="col-md-4 text-center animate-box">
                <div class="product">
                    <div class="product-grid" style="background-image:url(images/product-2.jpg);">
                        <span class="sale">Sale</span>
                        <div class="inner">
                            <p>
                                <a href="single.html" class="icon"><i class="icon-shopping-cart"></i></a>
                                <a href="single.html" class="icon"><i class="icon-eye"></i></a>
                            </p>
                        </div>
                    </div>
                    <div class="desc">
                        <h3><a href="single.html">Flue Medication</a></h3>
                    </div>
                </div>
            </div>
            <div class="col-md-4 text-center animate-box">
                <div class="product">
                    <div class="product-grid" style="background-image:url(images/product-3.jpg);">
                        <div class="inner">
                            <p>
                                <a href="single.html" class="icon"><i class="icon-shopping-cart"></i></a>
                                <a href="single.html" class="icon"><i class="icon-eye"></i></a>
                            </p>
                        </div>
                    </div>
                    <div class="desc">
                        <h3><a href="single.html">Children</a></h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 text-center animate-box">
                <div class="product">
                    <div class="product-grid" style="background-image:url(images/product-4.jpg);">
                        <div class="inner">
                            <p>
                                <a href="single.html" class="icon"><i class="icon-shopping-cart"></i></a>
                                <a href="single.html" class="icon"><i class="icon-eye"></i></a>
                            </p>
                        </div>
                    </div>
                    <div class="desc">
                        <h3><a href="single.html">Classic Perfume</a></h3>
                    </div>
                </div>
            </div>
            <div class="col-md-4 text-center animate-box">
                <div class="product">
                    <div class="product-grid" style="background-image:url(images/product-5.jpg);">
                        <div class="inner">
                            <p>
                                <a href="single.html" class="icon"><i class="icon-shopping-cart"></i></a>
                                <a href="single.html" class="icon"><i class="icon-eye"></i></a>
                            </p>
                        </div>
                    </div>
                    <div class="desc">
                        <h3><a href="single.html">Soaps and Shampoos</a></h3>
                    </div>
                </div>
            </div>
            <div class="col-md-4 text-center animate-box">
                <div class="product">
                    <div class="product-grid" style="background-image:url(images/product-6.jpg);">
                        <div class="inner">
                            <p>
                                <a href="single.html" class="icon"><i class="icon-shopping-cart"></i></a>
                                <a href="single.html" class="icon"><i class="icon-eye"></i></a>
                            </p>
                        </div>
                    </div>
                    <div class="desc">
                        <h3><a href="single.html">Herbal Medicine</a></h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="fh5co-testimonial" class="fh5co-bg-section">
    <div class="container">
        <div class="row animate-box">
            <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                <span>Testimony</span>
                <h2>Happy Clients</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="row animate-box">
                    <div class="owl-carousel owl-carousel-fullwidth">
                        <div class="item">
                            <div class="testimony-slide active text-center">
                                <figure>
                                    <img src="images/person1.jpg" alt="user">
                                </figure>
                                <span>Jean Doe, via <a href="#" class="twitter">Twitter</a></span>
                                <blockquote>
                                    <p>&ldquo;Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.&rdquo;</p>
                                </blockquote>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-slide active text-center">
                                <figure>
                                    <img src="images/person2.jpg" alt="user">
                                </figure>
                                <span>John Doe, via <a href="#" class="twitter">Twitter</a></span>
                                <blockquote>
                                    <p>&ldquo;Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.&rdquo;</p>
                                </blockquote>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-slide active text-center">
                                <figure>
                                    <img src="images/person3.jpg" alt="user">
                                </figure>
                                <span>John Doe, via <a href="#" class="twitter">Twitter</a></span>
                                <blockquote>
                                    <p>&ldquo;Far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.&rdquo;</p>
                                </blockquote>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div id="fh5co-counter" class="fh5co-bg fh5co-counter" style="background-image:url(images/img_bg_5.jpg);">
    <div class="container">
        <div class="row">
            <div class="display-t">
                <div class="display-tc">
                    <div class="col-md-12 col-sm-6 animate-box">
                        <div class="feature-center">
                            <span class="icon">
                                <i class="icon-eye"></i>
                            </span>
                            <p>&quot;Wherever the art of medicine is loved, there is also a love of humanity.” - Hippocrates&quot;</p>
                        </div>
                    </div>
                        <!--
                    <div class="col-md-3 col-sm-6 animate-box">
                        <div class="feature-center">
                            <span class="icon">
                                <i class="icon-shopping-cart"></i>
                            </span>

                            <span class="counter js-counter" data-from="0" data-to="450" data-speed="5000" data-refresh-interval="50">1</span>
                            <span class="counter-label">Happy Clients</span>
                        </div>
                    </div>
                
                    <div class="col-md-3 col-sm-6 animate-box">
                        <div class="feature-center">
                            <span class="icon">
                                <i class="icon-shop"></i>
                            </span>
                            <span class="counter js-counter" data-from="0" data-to="700" data-speed="5000" data-refresh-interval="50">1</span>
                            <span class="counter-label">All Products</span>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 animate-box">
                        <div class="feature-center">
                            <span class="icon">
                                <i class="icon-clock"></i>
                            </span>

                            <span class="counter js-counter" data-from="0" data-to="5605" data-speed="5000" data-refresh-interval="50">1</span>
                            <span class="counter-label">Hours Spent</span>

                        </div>
                    </div>-->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
