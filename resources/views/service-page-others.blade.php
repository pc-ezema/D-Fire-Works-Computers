@extends('layouts.frontend')

@section('page-navbar')
@includeIf('layouts.page-navbar')
@endsection

@section('page-content')
  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
     @section('breadcrumb')
    @includeIf('layouts.breadcrumb', ['title' => 'Other Services', 'subtitle' => 'Software/Hardware'])
    @endsection
    <!-- End Breadcrumbs -->
	
<!--Services page section begin--->
<section id="services" class="services">
 <div class="container">
<div class="row content">
          <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">
            <h2><strong>Other Services</strong></h2>
            <h3 style = "font-size:1.2em; text-align:justify">other services include Programming, Graphics Design, Web Development Services, Animation Services, 
			3D Design, Image Editing, Content Creation, Project Management, etc.</h3>
          </div>
  <div class="col-lg-6 pt-4 pt-lg-0" data-aos="fade-left" data-aos-delay="200">
            <p style="text-align:justify">
              <strong><span style="font-size:1.4em;">We are always out to serve you</span></strong><br/><br/>
			   As your IT solutions provider, DFW computers offers responsive and innovative hardware and software support. Whether you need updated application software or remote and onsite server management, we have the technical tools to meet your needs. 
			   We also have long-term partnerships with a number of industry-leading hardware and software providers, so you can access state-of-the-art products from IT solutions, Cisco, and many more.<br/><br/>
			   DFW experts will look over all the hardware and software platforms your company is using, including computers, switches, servers, and software programs to see what is still supported and what isn’t. This is a critical first step as out-of-date hardware and software can let threats into your network resulting in costly maintenance. 
			   Taking this information into consideration along with your business goals and current pain points, we will establish an infrastructure around your specific needs and objectives, providing you with the hardware and software you need to keep your business running safely and smoothly. <br/><br/>
			   Our IT service analysts are available to serve you onsite at any time to update and backup hardware servers or upgrade data network storage solutions through cloud computing. Our software developers, help you in designing your softwares according to specifications
			   Our collaborative technical experts also virtualize your hardware servers, making it easier to add server capacity without buying, installing, and maintaining additional hardware.  
         </p>           
			</div>
        </div>

      </div>
	  <!--End Services Page Section-->
	  <!--End Main-->
	  
    @endsection