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
                <span>Frequently Asdked Question</span>
                <h2>FAQ</h2>
                <p>Stay updated with our lastest information and news.</p>
            </div>
             <!-- FAQ START -->
            <div class="accordion-title">
                <h2>Frequently Asked Questions</h2>
                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered
                    alteration in some form, by injected humour, or randomised words which don't look even slightly
                    believable. </p>
            </div>
            <ul class="accordion">
                <li>
                    <a class="active">How can i contact you?</a>
                    <p style="display: block;">It is a long established fact that a reader will be distracted by the
                        readable content of a page when looking at its grid-item. The point of using Lorem Ipsum.</p>
                </li>
                <li>
                    <a>What is your payment method?</a>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit, ipsum, fuga, in,
                        obcaecati magni ullam nobis voluptas fugiat tenetur voluptatum quas tempora maxime rerum neque
                        deserunt suscipit provident cumque et mollitia ex aspernatur porro minus sapiente voluptatibus
                        eos at perferendis repellat odit aliquid harum molestias ratione pariatur adipisci. Aliquid,
                        iure.</p>
                </li>
            </ul> <!-- / accordion -->
        </div>

        <div class="container">
            <div class="row">
                <div class="col-lg-4 content-box">
                    <a href="https://themeforest.net/item/merit-premium-multipurpose-html5-template/21866679"
                        target="_blank">
                        <div class="icon-circle"><i class="icofont-phone"></i></div>
                        <h3>Contact Us</h3>
                        <p>+ 0511 0000 3322</p>
                        <p>718 973 3322</p>
                    </a>
                    <h5><a href="#">Call Us</a></h5>
                </div>
                <div class="col-lg-4 content-box middle-box center-box">
                    <a href="https://themeforest.net/item/merit-premium-multipurpose-html5-template/21866679"
                        target="_blank">
                        <div class="icon-circle"><i class="icofont-help-robot"></i></div>
                        <h3>Need Help?</h3>
                        <p>support@farmite.com</p>
                        <p>info@farmite.com</p>
                    </a>
                    <h5><a href="#">Send an Email</a></h5>
                </div>
                <div class="col-lg-4 content-box">
                    <a href="https://themeforest.net/item/merit-premium-multipurpose-html5-template/21866679"
                        target="_blank">
                        <div class="icon-circle"><i class="icofont-ui-clock"></i></div>
                        <h3>Working Hours</h3>
                        <p>Monday – Friday 8:30 – 18:00</p>
                        <p>Saturday 9:00 – 14:00</p>
                    </a>
                    <h5><a href="#">Visit Our Office</a></h5>
                </div>
            </div>
        </div>
        <!-- FAQ START -->
    </section>

</main><!-- End #main -->
@endsection