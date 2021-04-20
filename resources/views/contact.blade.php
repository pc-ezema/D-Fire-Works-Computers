@extends('layouts.frontend')

@section('page-navbar')
@includeIf('layouts.page-navbar')
@endsection

@section('page-content')
<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    @section('breadcrumb')
        @includeIf('layouts.breadcrumb')
    @endsection
    <!-- End Breadcrumbs -->
	
	 <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <span>Send us a Message</span>
          <h2>Contact</h2>
          <p>We look forward to connecting with you in person or virtually. We will be pleased to meet you.</p>
        </div>

        <div class="row" data-aos="fade-up">
          <div class="col-lg-6">
            <div class="info-box mb-4">
              <i class="bx bx-map"></i>
              <h3>Our Location:</h3>
              <p>{{config ('app.address')}}</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bx-envelope"></i>
              <h3>Email Us:</h3>
              <p>{{config ('app.email')}}</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bx-phone-call"></i>
              <h3>Call:</h3>
              <p>{{config ('app.phone_1')}}<br/> {{config ('app.phone_2')}}</p>
			  <p>Monday to Saturday: 8am-5pm</p>
            </div>
          </div>

        </div>

        <div class="row" data-aos="fade-up">

          <div class="col-lg-6 ">
		  <iframe class="mb-4 mb-lg-0" alt="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.4060540004816!2d3.361639214276987!3d6.596351324143387!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x103b9245d80fc7e1%3A0xbfa3e4be91979694!2s10%20Oremeji%20St%2C%20Allen%2C%20Ikeja!5e0!3m2!1sen!2sng!4v1616163250831!5m2!1sen!2sng" frameborder="0" style="width:100%; border:0; height:384px;" allowfullscreen="" loading="lazy"></iframe>
           </div>
			 <div class="col-lg-6">
            <form action="/contact_us" method="post">
            @csrf
            @includeIf('layouts.error_template')
			<h3><strong>Have Questions?</strong></h3><br/>
              <div class="form-row">
			  <div class="col-md-6 form-group">
				 <input type="text" name="name" class="form-control" id="name" placeholder="Enter Name" data-rule="minlen:4" data-msg="Please enter at least 4 characters" />
                   <div class="validate"></div>
                </div>
                <div class="col-md-6 form-group">
				   <input type="email" class="form-control" name="email" id="email" placeholder="Enter Email" data-rule="email" data-msg="Please enter a valid email" />
                  </label>
				  <div class="validate"></div>
                </div>
              </div>
              <div class="form-group">
			    <input type="text" class="form-control" name="telephone" id="telephone" placeholder="Enter Phone Number" data-rule="minlen:11" data-msg="Please enter a number" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
			    <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 characters of subject" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="send a message to us" placeholder="Write a message"></textarea>
                <div class="validate"></div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->
@endsection