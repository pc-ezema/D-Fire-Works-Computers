@extends('layouts.frontend')

@section('page-navbar')
@includeIf('layouts.page-navbar')
@endsection

@section('page-content')
<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    @section('breadcrumb')
    @includeIf('layouts.breadcrumb', ['title' => 'Software Development', 'subtitle' => 'Design & Implementation'])
    @endsection

    <!--Services page section begin--->
    <section id="services" class="services">
        <div class="container">
            <div class="row content">
                <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">
                    <img src="/assets/img/service/design.jpg" class="img-fluid"></img>
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0" data-aos="fade-left" data-aos-delay="200">
                    <p>
                        <strong><span style="font-size:1.4em;">SDLC (Software Development Life
                                Cycle):</span></strong><br />
                    <ul>
                        <li style="text-align:justify;"><i class="ri-check-double-line"></i><strong><span
                                    style="font-size:1.4em;">Brainstorming and planning</span></strong>:<br />
                            Only after a perfect plan is worked out, you are ready to move forward.
                            We help you to benefit a lot by creating a detailed plan from the very beginning and
                            following all other stages with tools such as <mark>GanttPRO Gantt chart maker.</mark>
                        </li>
                        <li style="text-align:justify;"><i class="ri-check-double-line"></i><strong><span
                                    style="font-size:1.4em;">Requirements and feasibility
                                    analysis</span></strong>:<br />
                            In order to build an actionable solution, clean code and catchy design are not enough.
                            You will need the development team to get a deeper understanding of the project goal and
                            collect all the requirements.
                            At DFW computers, your project is defined in details and the analysis of the project’s
                            feasibility is always carried out.
                        </li>
                        <li style="text-align:justify;"><i class="ri-check-double-line"></i><strong><span
                                    style="font-size:1.4em;">Design</span></strong>:<br />
                            During the design phase, the actual conceptualizing of the solution is created, that is the
                            detailed software architecture meeting specific project requirements.
                            Custom tailored software design by software architects and engineers sets definite workflows
                            and standards, and encompasses clear overall solution/product design, together with database
                            structure and design.
                            During this phase, the whole structure of the project is built with the final prototype and
                            mockups used for the next stages of the software development process.
                        </li>
                        <li style="text-align:justify;"><i class="ri-check-double-line"></i><strong><span
                                    style="font-size:1.4em;">Development & coding</span></strong>:<br />
                            DFW software engineering team make sure their code meets the software requirements
                            specifications, conform to the stakeholders’
                            requirements, etc. But if the previous stages of software development were carefully
                            fulfilled, the ready-to-use software is bound to match the requirements to the software
                            project.
                        </li>
                        <li style="text-align:justify;"><i class="ri-check-double-line"></i><strong><span
                                    style="font-size:1.4em;">Integration & testing</span></strong>:<br />
                            Verification and validation make up a vital part in ensuring the application/solution is
                            completed successfully.
                            Once our Quality Assurance team ensure that the software is bug-free, the implementation
                            phase starts.
                        </li>
                        <li style="text-align:justify;"><i class="ri-check-double-line"></i><strong><span
                                    style="font-size:1.4em;">Implementation & deployment</span></strong>:<br />
                            The newly built and tested application is moved to production including data and components
                            transfer, while during the next releases only the specific changes will be deployed.
                            Depending on the complexity of the project it might be a straightforward release (if the
                            project is simple) or staggered released (in stages) in case of a more complex project.
                            Our system analysts and our target customers can now see and try out the ready application.
                        </li>
                        <li style="text-align:justify;"><i class="ri-check-double-line"></i><strong><span
                                    style="font-size:1.4em;">Operations and maintenance</span></strong>:<br />
                            This phase is treated with the utmost attention since during the stage the product is
                            polished, upgraded, enhanced and fine-tuned according to the real-world feedbacks on its
                            performance.
                            That’s exactly a perfect timing to robust the application’s functionalities, to upgrade its
                            performance and modify according to the actual needs of our target customers, add new
                            capabilities or meet additional user requirements.
                        </li>

                    </ul>



                </div>
            </div>

        </div>
        <!--End Services Page Section-->
        <!--End Main-->

        @endsection