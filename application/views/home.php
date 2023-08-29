<?php
include('header.php')
?>
        <!-- Mashead header-->
        <header class="masthead bg-white">
            <div class="container px-5">
                <div class="row gx-5 align-items-center">
                    <div class="col-lg-6">
                        <!-- Mashead text and app badges-->
                        <div class="mb-5 mb-lg-0 text-center text-lg-start">
                            <h1 class="display-1 lh-1 mb-3">Showcase your app beautifully.</h1>
                            <p class="lead fw-normal text-muted mb-5">Launch your mobile app landing page faster with this free, open source theme from Start Bootstrap!</p>
                            <div class="d-flex flex-column flex-lg-row align-items-center">
                                <button class="btn btn-primary px-5 py-3 mb-2 mb-lg-0   " onclick="location.href='<?=base_url()?>product'">
                                    <span class="d-flex align-items-center">
                                        <span class="medium">View All Models</span>
                                    </span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <!-- Masthead device mockup feature-->
                        <div class="masthead-device-mockup">
                            <svg class="circle" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                                <defs>
                                    <linearGradient id="circleGradient" gradientTransform="rotate(45)">
                                        <stop class="gradient-start-color" offset="0%"></stop>
                                        <stop class="gradient-end-color" offset="100%"></stop>
                                    </linearGradient>
                                </defs>
                                <circle cx="50" cy="50" r="50"></circle></svg><svg class="shape-1 d-none d-sm-block" viewBox="0 0 240.83 240.83" xmlns="http://www.w3.org/2000/svg">
                                <rect x="-32.54" y="78.39" width="305.92" height="84.05" rx="42.03" transform="translate(120.42 -49.88) rotate(45)"></rect>
                                <rect x="-32.54" y="78.39" width="305.92" height="84.05" rx="42.03" transform="translate(-49.88 120.42) rotate(-45)"></rect></svg><svg class="shape-2 d-none d-sm-block" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg"><circle cx="50" cy="50" r="50"></circle></svg>
                            <div class="device-wrapper">
                                <div class="device" data-device="iPhoneX" data-orientation="portrait" data-color="black">
                                    <div class="screen bg-black">
                                        <!-- PUT CONTENTS HERE:-->
                                        <!-- * * This can be a video, image, or just about anything else.-->
                                        <!-- * * Set the max width of your media to 100% and the height to-->
                                        <!-- * * 100% like the demo example below.-->
                                        <video muted="muted" autoplay="" loop="" style="max-width: 100%; height: 100%"><source src="assets/img/demo-screen.mp4" type="video/mp4" /></video>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
         <!-- Quote/testimonial aside-->
         <aside class="text-center bg-light klien">
            <div class="container px-2">
                <div class="row gx-2 justify-content-center">
                    <div class="col-xl-12">
                        <img src="assets/img/klien1.png" alt="..." style="height: 3rem" class="m-3" />
                        <img src="assets/img/klien2.png" alt="..." style="height: 3rem" class="m-3" />
                        <img src="assets/img/klien3.png" alt="..." style="height: 3rem" class="m-3" />
                        <img src="assets/img/klien4.png" alt="..." style="height: 3rem" class="m-3" />
                    </div>
                </div>
            </div>
        </aside>
        <section id="features">
            <div class="container px-5">
                <div class="row gx-5 align-items-center">
                    <div class="col-lg-4 order-lg-0">
                        <h2 class="display-4 lh-1 mb-4">Layanan</h2>
                        <p class="lead fw-normal text-muted mb-5 mb-lg-5">Kami memiliki beberapa layanan yang akan membantu Anda merancang dan 
    mewujudkan keinginan dan kebutuhan Anda.</p>
                    </div>
                    <div class="col-lg-8 order-lg-1 mb-5 mb-lg-0">
                        <div class="container-fluid px-5">
                            <div class="row gx-5">
                                <div class="col-md-6 mb-5">
                                    <!-- Feature item-->
                                    <div class="text-center">
                                        <i class="bi-phone icon-feature text-primary d-block mb-3"></i>
                                        <h3 class="font-alt">Soundproofing</h3>
                                        <p class="text-muted mb-0">Ready to use HTML/CSS device mockups, no Photoshop required!</p>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-5">
                                    <!-- Feature item-->
                                    <div class="text-center">
                                        <i class="bi-camera icon-feature text-primary d-block mb-3"></i>
                                        <h3 class="font-alt">Interior & Exterior</h3>
                                        <p class="text-muted mb-0">Put an image, video, animation, or anything else in the screen!</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row gx-5">
                                <div class="col-md-6 mb-5">
                                    <!-- Feature item-->
                                    <div class="text-center">
                                        <i class="bi-phone icon-feature text-primary d-block mb-3"></i>
                                        <h3 class="font-alt">Furniture</h3>
                                        <p class="text-muted mb-0">Ready to use HTML/CSS device mockups, no Photoshop required!</p>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-5">
                                    <!-- Feature item-->
                                    <div class="text-center">
                                        <i class="bi-camera icon-feature text-primary d-block mb-3"></i>
                                        <h3 class="font-alt">Kusen UPVC</h3>
                                        <p class="text-muted mb-0">Put an image, video, animation, or anything else in the screen!</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 mb-5 mb-md-0">
                                    <!-- Feature item-->
                                    <div class="text-center">
                                        <i class="bi-gift icon-feature text-primary d-block mb-3"></i>
                                        <h3 class="font-alt">Tata Suara dan Lighting</h3>
                                        <p class="text-muted mb-0">As always, this theme is free to download and use for any purpose!</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="bg-light" id="products">
            <div class="container">
                <div class="row gx-5">
                    <div class="col-lg-12 order-lg-0 text-center">
                        <h2 class="display-4 lh-1 mb-4">Silentbox Kami</h2>
                        <p class="lead fw-normal text-muted mb-5 mb-lg-5">Kami memiliki beberapa layanan yang akan membantu Anda merancang dan 
    mewujudkan keinginan dan kebutuhan Anda.</p>
                    </div>
                    <div class="col-lg-12 order-lg-1 mb-5 mb-lg-0">
                        <div class="row gx-5">
                            <div class="col-md-4">
                                <div class="product-home">
                                    <div class="text-center product-home-img">
                                        <img src="assets/img/gambar1.png">
                                    </div>
                                        <h3 class="font-alt">Acoustic booth Silentbox Solo</h3>
                                        <p class="text-muted mb-0"><b>Capacity 1 person</b><br>The Silentbox Solo acoustic office booth is perfect for phone calls, video conferencing, as well as for autonomous work in a comfortable environment. The booth is installed within 60 minutes, it can be easily moved, it is equipped with silent ventilation, USB ports, and a comfortable laptop table. It has everything for smooth operation and absolute concentration.</p>
                                    <div class="d-flex flex-column flex-lg-row align-items-center">
                                        <button class="btn btn-primary px-5 py-3 my-5 mb-lg-0   " onclick="location.href='<?=base_url()?>product'">
                                            <span class="d-flex align-items-center">
                                                <span class="medium">Read More</span>
                                            </span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="product-home">
                                    <div class="text-center product-home-img">
                                        <img src="assets/img/gambar2.png">
                                    </div>
                                        <h3 class="font-alt">Acoustic booth Silentbox Solo</h3>
                                        <p class="text-muted mb-0"><b>Capacity 1 person</b><br>The Silentbox Solo acoustic office booth is perfect for phone calls, video conferencing, as well as for autonomous work in a comfortable environment. The booth is installed within 60 minutes, it can be easily moved, it is equipped with silent ventilation, USB ports, and a comfortable laptop table. It has everything for smooth operation and absolute concentration.</p>
                                    <div class="d-flex flex-column flex-lg-row align-items-center">
                                        <button class="btn btn-primary px-5 py-3 my-5 mb-lg-0   " onclick="location.href='<?=base_url()?>product'">
                                            <span class="d-flex align-items-center">
                                                <span class="medium">Read More</span>
                                            </span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="product-home">
                                    <div class="text-center product-home-img">
                                        <img src="assets/img/gambar2.png">
                                    </div>
                                        <h3 class="font-alt">Acoustic booth Silentbox Solo</h3>
                                        <p class="text-muted mb-0"><b>Capacity 1 person</b><br>The Silentbox Solo acoustic office booth is perfect for phone calls, video conferencing, as well as for autonomous work in a comfortable environment. The booth is installed within 60 minutes, it can be easily moved, it is equipped with silent ventilation, USB ports, and a comfortable laptop table. It has everything for smooth operation and absolute concentration.</p>
                                    <div class="d-flex flex-column flex-lg-row align-items-center">
                                        <button class="btn btn-primary px-5 py-3 my-5 mb-lg-0   " onclick="location.href='<?=base_url()?>product'">
                                            <span class="d-flex align-items-center">
                                                <span class="medium">Read More</span>
                                            </span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <section id="pricing">
            <div class="container">
                <div class="col-lg-12 order-lg-0 text-center">
                    <h2 class="display-4 lh-1 mb-4">Price</h2>
                    <p class="lead fw-normal text-muted mb-5 mb-lg-5">Kami memiliki beberapa layanan yang akan membantu Anda merancang dan 
mewujudkan keinginan dan kebutuhan Anda.</p>
                </div>
                <table class="table table-bordered table-pricing text-center align-middle">
                  <thead class="align-middle">
                    <tr>
                      <th scope="col" class="theader">Function</th>
                      <th scope="col"><img src="assets/img/gambar1.png"></th>
                      <th scope="col"><img src="assets/img/gambar2.png"></th>
                      <th scope="col"><img src="assets/img/gambar2.png"></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th>Ventilation and lighting regulator</th>
                      <td><i class="bi bi-x-circle-fill text-danger"></i></td>
                      <td>Spec</td>
                      <td>Spec 2</td>
                    </tr>
                    <tr>
                      <th>Choice of colors inside and outside</th>
                      <td><i class="bi bi-check-circle-fill text-primary"></i></td>
                      <td>Spec</td>
                      <td>Spec 2</td>
                    </tr>
                    <tr>
                      <th>Network panel</th>
                      <td><i class="bi bi-check-circle-fill text-primary"></i></td>
                      <td><i class="bi bi-check-circle-fill text-primary"></i></td>
                      <td><i class="bi bi-check-circle-fill text-primary"></i></td>
                    </tr>
                    <tr>
                      <th></th>
                      <td><button class="btn btn-primary px-3 py-2 mb-lg-0   " onclick="location.href='<?=base_url()?>product'">
                            <span class="d-flex align-items-center">
                                <span class="medium">Read More</span>
                            </span>
                        </button></td>
                      <td><button class="btn btn-primary px-3 py-2 mb-lg-0   " onclick="location.href='<?=base_url()?>product'">
                            <span class="d-flex align-items-center">
                                <span class="medium">Read More</span>
                            </span>
                        </button></td>
                      <td><button class="btn btn-primary px-3 py-2 mb-lg-0   " onclick="location.href='<?=base_url()?>product'">
                            <span class="d-flex align-items-center">
                                <span class="medium">Read More</span>
                            </span>
                        </button></td>
                    </tr>
                  </tbody>
                </table>
            </div>
        </section>
        <section id="project" class="bg-light">
                <div class="col-lg-12 order-lg-0 text-center">
                    <h2 class="display-4 lh-1 mb-4">Project Kami</h2>
                    <p class="lead fw-normal text-muted mb-5 mb-lg-5">Kami memiliki beberapa layanan yang akan membantu Anda merancang dan 
mewujudkan keinginan dan kebutuhan Anda.</p>
                </div>
                <div class="carousel"
                data-flickity='{ "lazyLoad": true }'>
                    <div class="carousel-cell">
                        <img class="carousel-cell-image"
                    data-flickity-lazyload="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/tulip.jpg" alt="tulip" />
                    </div>
                    <div class="carousel-cell">
                        <img class="carousel-cell-image"
                    data-flickity-lazyload="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/grapes.jpg" alt="grapes" />
                    </div>
                    <div class="carousel-cell">
                        <img class="carousel-cell-image"
                    data-flickity-lazyload="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/raspberries.jpg" alt="raspberries" />
                    </div>
                    <div class="carousel-cell">
                        <img class="carousel-cell-image"
                    data-flickity-lazyload="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/wolf.jpg" alt="wolf" />
                    </div>
                    <div class="carousel-cell">
                        <img class="carousel-cell-image"
                    data-flickity-lazyload="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/shore.jpg" alt="sea" />
                    </div>
                    <div class="carousel-cell">
                        <img class="carousel-cell-image"
                    data-flickity-lazyload="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/leaf-droplets.jpg" alt="leaf droplets" />
                    </div>
                    <div class="carousel-cell">
                        <img class="carousel-cell-image"
                    data-flickity-lazyload="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/gulls.jpg" alt="gulls" />
                    </div>
                    <div class="carousel-cell">
                        <img class="carousel-cell-image"
                    data-flickity-lazyload="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/touch-screen.jpg" alt="touch screen" />
                    </div>
                    <div class="carousel-cell">
                        <img class="carousel-cell-image"
                    data-flickity-lazyload="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/van.jpg" alt="van" />
                    </div>
            </div>
        </section>
        <!-- Basic features section-->
        <section>
            <div class="container px-5">
                <div class="row gx-5 align-items-center justify-content-center justify-content-lg-between">
                    <div class="col-12 col-lg-5">
                        <h2 class="display-4 lh-1 mb-4">Products</h2>
                        <p class="lead fw-normal text-muted mb-5 mb-lg-0">This section is perfect for featuring some information about your application, why it was built, the problem it solves, or anything else! There's plenty of space for text here, so don't worry about writing too much.</p>
                        <button class="btn btn-primary px-5 py-3 mt-4 mb-lg-0" onclick="location.href='<?=base_url()?>product'">
                            <span class="d-flex align-items-center">
                                <span class="medium">View All Product</span>
                            </span>
                        </button>
                    </div>
                    <div class="col-sm-8 col-md-6">
                        <div class="px-5 px-sm-0"><img class="img-fluid rounded-circle" src="https://source.unsplash.com/u8Jn2rzYIps/900x900" alt="..." /></div>
                    </div>
                </div>
            </div>
        </section>

<?php
include('footer.php')
?>