@extends('layouts.frontend')

@section('page-navbar')
@includeIf('layouts.page-navbar')
@endsection

@section('page-content')
  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
     @section('breadcrumb')
    @includeIf('layouts.breadcrumb', ['title' => 'Repairs & Maintenance', 'subtitle' => 'DFW Fix'])
    @endsection
	
<!--Services page section begin--->
 <section id="services" class="services">
 <div class="container">
<div class="row content">
          <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">
            <h2><strong>Repairs & Maintenance</strong></h2>
            <h3 style = "font-size:1.4em; text-align:justify;">This has to do with the total concession between the parties involved, to achieve system fix and configuration of faulty software/hardware products.</h3>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0" data-aos="fade-left" data-aos-delay="200">
            <p style="text-align:justify;">
              <strong><span style="font-size:1.4em;">Our View</span></strong><br/>
				In our experience, approximately one-third of problems reported on equipment arise from problems caused by the user, one-third from easy-to-solve technical problems 
				(such as a blown power adapter or fuse, or a loose power cord), and only one-third require more serious fault-finding procedures and special knowledge of the equipment. 
				Equipment users therefore have a significant role to play in the everyday care and maintenance of equipment.
            </p>
			<p style="text-align:justify;">
			<strong><span style="font-size:1.4em;">Preventive Maintenance</span></strong><br/>
			Preventive maintenance prevents breakdowns and ensures that equipment is operational and safe to use. 
			It also guarantees the accuracy and reliability of equipment and saves money: 
			it can reduce the running costs of equipment and is cheaper than repairs following a breakdown. D-Fire Works Computers suggests preventive Maintenance
			for your software and hardware products. More sophisticated maintenance tasks, such as those which need to be carried out by our Engineers, should be scheduled.<br/><br/>
            DFW project team display maintenance schedules for users on the equipment they refer to; this can serve as a useful daily reminder of the tasks that should be performed.
			These schedules should provide simple guidelines for all types of equipment (hardware/software), covering the tasks to be undertaken in the following areas:
			<ul>
              <li><i class="ri-check-double-line"></i> Care and cleaning</li>
              <li><i class="ri-check-double-line"></i> Safety checks</li>
			  <li><i class="ri-check-double-line"></i> Configuration</li>
              <li><i class="ri-check-double-line"></i> Functional and performance checks</li>
			   <li><i class="ri-check-double-line"></i> Maintenance tasks</li>
            </ul>
			<p><strong><span style="font-size:1.4em;">Repairs</span></strong></p>
            <p>
			We respond to the breakdown of equipment and undertake work to correct the problem in order to return the equipment to a working condition.
			But we usually advice our end-users to be sensitive with their products so as to carry out preventive maintenance before a total breakdown.</p>
      <p class="font-italic" style="color:red;"> A breakdown will mean that the service the product was providing will come to a halt.
			 Before equipment can be repaired, you need to be aware that there is a problem! Therefore, DFW computers advice end-users to click on the contact page to report faults and breakdowns as quickly as possible, so as to be assigned a schedule. 
			</p>
          </div>
        </div>

      </div>
	  <!--End Services Page Section-->
	  <!--End Main-->
	  
	  @endsection