@extends('layouts.frontend')

@section('page-navbar')
@includeIf('layouts.page-navbar')
@endsection

@section('page-content')
<!-- ======= error Section ======= -->
<section id="cta" class="error_404">
        <div class="container" data-aos="zoom-in">

            <div class="text-center error">
                <h3>Oops!</h3>
                <p>Sorry, The page you are looking for no longer exists.</p>
                <a class="cta-btn" href="/">Go To Home</a>
            </div>

        </div>
</section><!-- End Cta Section -->
@endsection