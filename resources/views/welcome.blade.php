@extends('layouts.frontend')

@section('navbar')
@includeIf('layouts.navbar')
@endsection

@section('slider')
@includeIf('layouts.slider')
@endsection

@section('page-content')
<main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
        <div class="container">

            <div class="row">
                <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left">
                    <img src="assets/img/aboutDfw.jpg" class="img-fluid img-side" alt="">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right">
                    <h3>Our Vission</h3>
                    <p>
                        To become the technological front in West Africa that will serve as an epicenter solution to all
                        IT problems.
                    </p>
                    <h3>Our Mission</h3>
                    <p>
                        To be the preferred strategic IT firm that will deliver real-time technological solutions to
                        clients, through excellent customer service and collaboration.
                    </p>
                    <h3>Our Core Values</h3>
                    <p>
                        We are dedicated to serving our clients with excellence, committed to working together as a team
                        for the success of our company and the business of our clients.
                        <br /><strong><u>Through:</u></strong>
                    <ul>
                        <li><i class="icofont-check-circled"></i> Hardwork and Originality</li>
                        <li><i class="icofont-check-circled"></i> Transparency and Perfection</li>
                        which are the values with which we work towards achieving our vision as we strive towards
                        perfection.
                    </ul>
                    </p>
                    </br>
                    <p style="text-align: justify; font-size: 0.9rem !important">
                        <strong>D-Fire Works Computers</strong> is a privately owned company established and registered
                        with the Corporate Affairs Commission (CAC)---<mark>BN:3251155</mark> in November,2020.
                        It was borne out of passion from the founder (Mr. Aliakor .C. Douglas) to profer real-time
                        solution to the continously evolving technological difficulties encountered in the world of IT,
                        thereby incoporating an array
                        of technological products towards serving the needs of the greater majority.
                    </p>
                </div>
            </div>

        </div>
    </section><!-- End About Section -->

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
        <div class="container">

            <div class="row">

                <div class="col-lg-4" data-aos="fade-up">
                    <div class="box">
                        <span>
                            <h4>Why choose us!</h4>
                        </span>
                        <p>At DFW, we are unrelenting in staying abreast of innovation, product development, changing
                            technological trends, and consumer standards that ensure you have
                            nothing short of the best. We provide a brand that meets your hardware/software needs in the
                            field of Information Technology.</p></br></br>
                    </div>
                </div>

                <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="150">
                    <div class="box">
                        <span>
                            <h4>What we offer!</h4>
                        </span>
                        <p><i class="icofont-check-circled"> IT Solutions (Research, <br /> &nbsp; &nbsp; Review &
                                Documentation)</i>
                            <i class="icofont-check-circled"> Sales & Delivery</i>
                            <i class="icofont-check-circled"> Mobile Accessories</i>
                            <i class="icofont-check-circled"> Repairs & Maintenance (Software/Hardware)</i>
                            <i class="icofont-check-circled"> Gadgets Unlock</i>
                            <i class="icofont-check-circled"> Installations</i>
                            <i class="icofont-check-circled"> Web Development</i>
                            <i class="icofont-check-circled"> Project Management</i>
                            <i class="icofont-check-circled"> Animation</i>
                            <i class="icofont-check-circled"> Graphics Design/Image Editing</i>
                            <i class="icofont-check-circled"> Software Development etc.</i>

                        </p>
                    </div>
                </div>

                <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="300">
                    <div class="box">
                        <span>
                            <h4> What you stand to gain!</h4>
                        </span>
                        <p style="text-align: justify;">* All your software/hardware preference will be delivered to you
                            in
                            real-time.<br />
                            * No problems with software development, graphics, unlocks, repairs and maintenace as well
                            as installations of IT gadgets.<br />*
                            We guide you through your research work and ensure you find what you are looking for.
                        </p>

                    </div>
                </div>
            </div>

        </div>
    </section><!-- End Why Us Section -->

    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients">
        <div class="container" data-aos="zoom-in">

            <div class="row d-flex align-items-center">

                <div class="col-lg-2 col-md-4 col-6">
                    <img src="assets/img/clients/mastercard1.jpg" class="img-fluid" alt="">
                </div>

                <div class="col-lg-2 col-md-4 col-6">
                    <img src="assets/img/clients/visa.png" class="img-fluid" alt="">
                </div>

                <div class="col-lg-2 col-md-4 col-6">
                    <img src="assets/img/clients/uber.png" class="img-fluid" alt="">
                </div>

                <div class="col-lg-2 col-md-4 col-6">
                    <img src="assets/img/clients/cisco.png" class="img-fluid" alt="">
                </div>

                <div class="col-lg-2 col-md-4 col-6">
                    <img src="assets/img/clients/paypal.png" class="img-fluid" alt="">
                </div>

                <div class="col-lg-2 col-md-4 col-6">
                    <img src="assets/img/clients/techsolution1.jpg" class="img-fluid" alt="">
                </div>

            </div>

        </div>
    </section><!-- End Clients Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
        <div class="container">

            <div class="section-title">
                <span>Services</span>
                <h2>Services</h2>
                <p>We are out to completely guide your steps through the world of IT</p>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up">
                    <div class="icon-box">
                        <div class="icon"><i class="bx bxl-dribbble"></i></div>
                        <h4><a href="">Lorem Ipsum</a></h4>
                        <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="fade-up"
                    data-aos-delay="150">
                    <div class="icon-box">
                        <div class="icon"><i class="bx bx-file"></i></div>
                        <h4><a href="">Sed ut perspiciatis</a></h4>
                        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="fade-up"
                    data-aos-delay="300">
                    <div class="icon-box">
                        <div class="icon"><i class="bx bx-tachometer"></i></div>
                        <h4><a href="">Magni Dolores</a></h4>
                        <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="fade-up" data-aos-delay="450">
                    <div class="icon-box">
                        <div class="icon"><i class="bx bx-world"></i></div>
                        <h4><a href="">Nemo Enim</a></h4>
                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="fade-up" data-aos-delay="600">
                    <div class="icon-box">
                        <div class="icon"><i class="bx bx-slideshow"></i></div>
                        <h4><a href="">Dele cardo</a></h4>
                        <p>Quis consequatur saepe eligendi voluptatem consequatur dolor consequuntur</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="fade-up" data-aos-delay="750">
                    <div class="icon-box">
                        <div class="icon"><i class="bx bx-arch"></i></div>
                        <h4><a href="">Divera don</a></h4>
                        <p>Modi nostrum vel laborum. Porro fugit error sit minus sapiente sit aspernatur</p>
                    </div>

                </div>

            </div>

        </div>
    </section><!-- End Services Section -->

    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
        <div class="container" data-aos="zoom-in">

            <div class="text-center">
                <h3>Our Passion Is Your Fulfilment</h3>
                <p> What you need is what matters most to us. We care about your satisfaction, </br>and our goal is to
                    make
                    all your IT fantasies become a reality.</p>
                <a class="cta-btn" href="/contact">Contact Us</a>
            </div>

        </div>
    </section><!-- End Cta Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
        <div class="container">

            <div class="section-title">
                <span>Portfolio</span>
                <h2>Portfolio</h2>
                <p>Take a tour around most of the numerous crafts we work on</p>
            </div>

            <div class="row" data-aos="fade-up">
                <div class="col-lg-12 d-flex justify-content-center">
                    <ul id="portfolio-flters">
                        <li data-filter="*" class="filter-active">Target</li>
                        <li data-filter=".filter-gadget">Gadget</li>
                        <li data-filter=".filter-graphics">Graphics</li>
                        <li data-filter=".filter-technology">Technology</li>
                    </ul>
                </div>
            </div>

            <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="150">

                <div class="col-lg-4 col-md-6 portfolio-item filter-gadget">
                    <img src="assets/img/portfolio/gadget-1.jpg" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>Gadget 1</h4>
                        <p>Gadget</p>
                        <a href="assets/img/portfolio/gadget-1.jpg" data-gall="portfolioGallery"
                            class="venobox preview-link" title="Gadget|DFW"><i class="bx bx-plus"></i></a>
                        <a href="portfolio-details.html" class="details-link" title="View more"><i
                                class="bx bx-link"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-technology">
                    <img src="assets/img/portfolio/technology_3.jpg" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>Technology 3</h4>
                        <p>Technology</p>
                        <a href="assets/img/portfolio/technology_3.jpg" data-gall="portfolioGallery"
                            class="venobox preview-link" title="Technology|DFW"><i class="bx bx-plus"></i></a>
                        <a href="portfolio-details.html" class="details-link" title="View more"><i
                                class="bx bx-link"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-gadget">
                    <img src="assets/img/portfolio/gadget-2.jpg" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>Gadget 2</h4>
                        <p>Gadget</p>
                        <a href="assets/img/portfolio/gadget-2.jpg" data-gall="portfolioGallery"
                            class="venobox preview-link" title="Gadget|DFW"><i class="bx bx-plus"></i></a>
                        <a href="portfolio-details.html" class="details-link" title="View more"><i
                                class="bx bx-link"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-graphics">
                    <img src="assets/img/portfolio/graphics1.jpg" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>Graphics 1</h4>
                        <p>Graphics</p>
                        <a href="assets/img/portfolio/graphics1.jpg" data-gall="portfolioGallery"
                            class="venobox preview-link" title="Graphics|DFW"><i class="bx bx-plus"></i></a>
                        <a href="portfolio-details.html" class="details-link" title="View more"><i
                                class="bx bx-link"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-technology">
                    <img src="assets/img/portfolio/portfoliotech1.jpg" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>Technology 2</h4>
                        <p>Technology</p>
                        <a href="assets/img/portfolio/portfolio-5.jpg" data-gall="portfolioGallery"
                            class="venobox preview-link" title="Technology|DFW"><i class="bx bx-plus"></i></a>
                        <a href="portfolio-details.html" class="details-link" title="View more"><i
                                class="bx bx-link"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-gadget">
                    <img src="assets/img/portfolio/gadget-3.jpg" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>Gadget 3</h4>
                        <p>Gadget</p>
                        <a href="assets/img/portfolio/gadget-3.jpg" data-gall="portfolioGallery"
                            class="venobox preview-link" title="Gadget|DFW"><i class="bx bx-plus"></i></a>
                        <a href="portfolio-details.html" class="details-link" title="View more"><i
                                class="bx bx-link"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-graphics">
                    <img src="assets/img/portfolio/graphics2.jpg" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>Graphics 2</h4>
                        <p>Graphics</p>
                        <a href="assets/img/portfolio/graphics2.jpg" data-gall="portfolioGallery"
                            class="venobox preview-link" title="Graphics|DFW"><i class="bx bx-plus"></i></a>
                        <a href="portfolio-details.html" class="details-link" title="View more"><i
                                class="bx bx-link"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-graphics">
                    <img src="assets/img/portfolio/graphics3_1.jpg" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>Graphics 3</h4>
                        <p>Graphics</p>
                        <a href="assets/img/portfolio/graphics3_1.jpg" data-gall="portfolioGallery"
                            class="venobox preview-link" title="Graphics|DFW"><i class="bx bx-plus"></i></a>
                        <a href="portfolio-details.html" class="details-link" title="View more"><i
                                class="bx bx-link"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-technology">
                    <img src="assets/img/portfolio/technology_1.jpg" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>Technology</h4>
                        <p>Technology</p>
                        <a href="assets/img/portfolio/technology_1.jpg" data-gall="portfolioGallery"
                            class="venobox preview-link" title="Technology|DFW"><i class="bx bx-plus"></i></a>
                        <a href="portfolio-details.html" class="details-link" title="View more"><i
                                class="bx bx-link"></i></a>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team">
        <div class="container">

            <div class="section-title">
                <span>Meet Us</span>
                <h2>Team</h2>
                <p>We are here to profer solutions to your IT problems</p>
            </div>

            <div class="row">
                <div class="col-lg-6 col-md-6 d-flex align-items-stretch" data-aos="zoom-in">
                    <div class="member">
                        <img src="assets/img/team/christian.jpg" alt="Chief Technical Officer">
                        <h4>Christian Odigbo</h4>
                        <span>CTO</span>
                        <p>
                            A self-taught developer <br />
                            Meet Christian:
                        </p>
                        <div class="social">
                            <a href=""><i class="icofont-twitter"></i></a>
                            <a href=""><i class="icofont-facebook"></i></a>
                            <a href=""><i class="icofont-instagram"></i></a>
                            <a href=""><i class="icofont-linkedin"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 d-flex align-items-stretch" data-aos="zoom-in">
                    <div class="member">
                        <img src="assets/img/team/douglas.jpg" alt="Chief Executive Officer/Director">
                        <h4>Aliakor .C. Douglas</h4>
                        <span>Director & CEO</span>
                        <p>
                            His nine(9) years hands-on-lab experience in the field of IT, stands<br /> Douglas in good
                            stead to establish DFW computers.<br />
                            Meet Douglas:
                        </p>
                        <div class="social">
                            <a href=""><i class="icofont-twitter"></i></a>
                            <a href=""><i class="icofont-facebook"></i></a>
                            <a href=""><i class="icofont-instagram"></i></a>
                            <a href=""><i class="icofont-linkedin"></i></a>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Team Section -->

</main><!-- End #main -->

@endsection