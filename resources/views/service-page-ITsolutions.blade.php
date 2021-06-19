
@extends('layouts.frontend')

@section('page-navbar')
@includeIf('layouts.page-navbar')
@endsection

@section('page-content')
  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
     @section('breadcrumb')
    @includeIf('layouts.breadcrumb', ['title' => 'IT Solutions', 'subtitle' => 'Research|Review|Documentation'])
    @endsection
    <!-- End Breadcrumbs -->

	
<!--Services page section begin--->
 <section id="services" class="services">
 <div class="container">
<div class="row content">
          <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">
            <h2><strong>IT Solutions (RRD)</strong></h2>
            <h3 style = "font-size:1.4em; text-align:justify;">This brief describes the process and our experience in doing document reviews.
			We feel that sharing our experience would benefit researchers embarking on similar projects.</h3>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0" data-aos="fade-left" data-aos-delay="200">
            <p style="text-align:justify">
              <strong><span style="font-size:1.4em">Methods</span></strong><br/>
				We follow a painstaking, transparent, pre-specified approach that include the preparation of a protocol, 
				a pre-piloted data extraction form and coding schedule. We extract, analyse and synthesise data for use. 
				Quality checks are also included at all stages of the research process.
            </p>
			<p style="text-align:justify">
			<strong><span style="font-size:1.4em">Results</span></strong><br/>
			We are sure to give you the best possible results ranging from:</p>
            <ul>
              <li><i class="ri-check-double-line"></i> Time and project management</li>
              <li><i class="ri-check-double-line"></i> Continuous quality assurance</li>
              <li><i class="ri-check-double-line"></i> Selecting the software that meets the needs of the project</li>
			   <li><i class="ri-check-double-line"></i> Involving experts as needed and disseminating the findings to relevant stakeholders.</li>
            </ul>
			<p><strong><span style="font-size:1.4em">Conclusion</span></strong></p>
            <p class="font-italic" style="text-align:justify">
              A complete evaluation comprises - apart from a document review, interviews with target audience to assess the researched curricula respectively -
			  rigorous methods, which must be used to ensure an objective assessment. D-Fire Works Computers will be fully involved in all your RRD tasks to ensure
			  you efficiently and effectively carry out your tasks.
            </p>
          </div>
        </div>

      </div>
	  <!--End Services Page Section-->
	  <!--End Main-->
	  
	  @endsection