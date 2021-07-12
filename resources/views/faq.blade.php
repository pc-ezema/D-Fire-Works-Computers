@extends('layouts.frontend')

@section('page-navbar')
@includeIf('layouts.page-navbar')
@endsection

@section('page-content')
<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    @section('breadcrumb')
    @includeIf('layouts.breadcrumb', ['title' => 'Faq', 'subtitle' => 'Faq'])
    @endsection
    <!-- End Breadcrumbs -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
        <div class="container">

            <div class="section-title">
                <span>Frequently Asked Question</span>
                <h2>FAQ</h2>
                <p>Stay updated with our lastest information and news.</p>
            </div>
             <!-- FAQ START -->
            <ul class="accordion">
                <li>
                    <a class="active">Do you have an office?</a>
                    <p style="display: block;">We are located at 10A Oremeji Street off Computer village, Ikeja Lagos state.</p>
                </li>
                <li>
                    <a class="active">Do you distribute your products outside the shores of Lagos state?</a>
                    <p style="display: block;">We are currently running a pilot system that will ensure our services are well implemented only in Lagos state and its environ. 
                        In the future perhaps, and with the collaboration of our end users, we shall consider other prospects.</p>
                </li>
                <li>
                    <a class="active">Can DFW help me out to complete my projects?</a>
                    <p style="display: block;">Yes, we have a team of talented software/hardware engineers who profer solutions to your IT problems. 
                        We are well able to narrow down our broad tasks to helping you find what you are looking for</p>
                </li>
                <li>
                    <a class="active">How fast can I get a product upon making a purchase?</a>
                    <p style="display: block;">DFW provides a schedule for each tasks, and the date/time of delivery is always communicated to our 
                        customers right from the outset, upon knowing their specifications. 
                        Our tech support unit/Project management team are always ready to meet scheduled deadline.</p>
                </li>
                <li>
                    <a class="active">How much time do you need to build a software?</a>
                    <p style="display: block;">The time required to deliver a product depends on the scope of the project and the type of product 
                        that will be built. We start corporation with the concept stage of the project to understand 
                        the product's needs and determine what is the proper way to develop it. 
                        After that, we are able to estimate the duration of product development.</p>
                </li>
                <li>
                    <a class="active">Do you accept only cash rumeneration or also open for crypto?</a>
                    <p style="display: block;">Although we value cooperation with startups, our company policy and limitations allow us to accept only cash rumenerations.</p>
                </li>
                <li>
                    <a class="active">Can DFW handle all my hardware problems?</a>
                    <p style="display: block;">Yes! We have a network of talented engineers who are working closely to deliver real-time solutions to all your hardware problems.</p>
                </li>
            </ul> <!-- / accordion -->
        </div>

        <div class="container">
            <div class="row">
                <div class="col-lg-4 content-box">
                    <a href=""
                        target="_blank">
                        <div class="icon-circle"><i class="icofont-phone"></i></div>
                        <h3>Contact Us</h3>
                        <p> {{ config ('app.phone_1') }} </p>
                        <p> {{ config ('app.phone_2') }}</p>
                    </a>
                    <h5><a href="#">Call Us</a></h5>
                </div>
                <div class="col-lg-4 content-box middle-box center-box">
                    <a href="#"
                        target="_blank">
                        <div class="icon-circle"><i class="icofont-help-robot"></i></div>
                        <h3>Need Help?</h3>
                        <p> {{ config ('app.email') }}</p>
                    </a>
                    <h5><a href="#">Send an Email</a></h5>
                </div>
                <div class="col-lg-4 content-box">
                    <a href="#"
                        target="_blank">
                        <div class="icon-circle"><i class="icofont-ui-clock"></i></div>
                        <h3>Working Hours</h3>
                        <p>Monday – Saturday: 8:00 – 18:00</p>
                        <p>Saturday: 9:00 – 14:00</p>
                    </a>
                    <h5><a href="#">Visit Our Office</a></h5>
                </div>
            </div>
        </div>
        <!-- FAQ START -->
    </section>

</main><!-- End #main -->
@endsection