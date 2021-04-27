@extends('layouts.frontend')

@section('page-navbar')
@includeIf('layouts.page-navbar')
@endsection

@section('page-content')
<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    @section('breadcrumb')
    @includeIf('layouts.breadcrumb', ['title' => 'PortFolio', 'subtitle' => 'PortFolio Details'])
    @endsection
    <!-- End Breadcrumbs -->

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
        <div class="container">

            <div class="portfolio-details-container">

                <div class="owl-carousel portfolio-details-carousel">
                    <img src="assets/img/portfolio/portfoliodetail-1.jpg" class="img-fluid" alt="">
                    <img src="assets/img/portfolio/portfoliodetail-2.jpg" class="img-fluid" alt="">
                    <img src="assets/img/portfolio/portfoliodetail-3.jpg" class="img-fluid" alt="">
                </div>

                <div class="portfolio-info">
                    <h3><strong>Project information</strong></h3>
                    <ul>
                        <li><strong>Category</strong>: Portfolio</li>
                        <li><strong>Client</strong>: D-Fire Works Computers</li>
                        <li><strong>Project date</strong>: May 5,2021</li>
                        <li><strong>Project URL</strong>: <a href="#"></a></li>
                    </ul>
                </div>
            </div>

            <div class="portfolio-description">
                <h2>Categories</h2>
                <div class="row">
                    <div class="col-lg-4 col-sm-6 col-xs-12">
                        <p><a href="#" style="color:#36454F;"> <i class="icofont-book"></i> IT Solutions (RRD)</a></p>
                        <p><a href="#" style="color:#36454F;"> <i class="icofont-repair"></i> Repairs & Maintenance</a></p>
                        <p><a href="#" style="color:#36454F;"> <i class="icofont-camera-alt"></i> Installations</a></p>
                        <p><a href="#" style="color:#36454F;"> <i class="icofont-computer"></i> Software Development</a></p>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-xs-12">
                        <p><a href="#" style="color:#36454F;"> <i class="icofont-car"></i> Sales & Delivery</a></p>
                        <p><a href="#" style="color:#36454F;"> <i class="icofont-unlocked"></i> Gadgets Unlock</a></p>
                        <p><a href="#" style="color:#36454F;"> <i class="icofont-numbered"></i> Project Management</a></p>
                        <p><a href="#" style="color:#36454F;"> <i class="icofont-telephone"></i> Mobile Accessories</a></p>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-xs-12">
                        <p><a href="#" style="color:#36454F;"> <i class="icofont-web"></i> Web Development</a></p>
                        <p><a href="#" style="color:#36454F;"> <i class="icofont-automation"></i> Animation</a></p>
                        <p><a href="#" style="color:#36454F;"> <i class="icofont-beard"></i> Graphics/Image Editing</a></p>
                    </div>
                </div>
            </div>

        </div>
    </section><!-- End Portfolio Details Section -->

</main><!-- End #main -->
@endsection