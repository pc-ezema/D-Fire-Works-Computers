@extends('layouts.frontend')

@section('page-navbar')
@includeIf('layouts.page-navbar')
@endsection

@section('page-content')
<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    @section('breadcrumb')
    @includeIf('layouts.breadcrumb', ['title' => 'Gadgets Unlock', 'subtitle' => 'iPhone/Samsung/Laptop etc.'])
    @endsection
    <!-- End Breadcrumbs -->

<!--Services page section begin--->
 <section id="services" class="services">
 <div class="container">
<div class="row content">
          <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">
            <h2><strong>Gadgets Unlock</strong></h2>
            <h3 style = "font-size:1.4em; text-align:justify;">We flash and unlock phones and computers. We offer unbeatable deals on used smart Mobile
											Phones and computers.</h3>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0" data-aos="fade-left" data-aos-delay="200">
            <p style="text-align:justify">
              <strong><span style="font-size:1.4em">Hints:</span></strong><br/>
				If you don’t have a phone yet, you may consider buying an unlocked phone directly from the manufacturer.
				Unfortunately, you’ll pay full ticket price. For example, when you go to the Apple Store and buy an iPhone,
				you will have the option to make your phone AT&T, Verizon, T-Mobile, Sprint, or SIM free. 
				The SIM free phone is what is called an unlocked phone. An unlocked phone can be used with any carrier from day one.<br/><br/>
				If you decide to lock your phone in with a carrier, you won’t be able to enjoy the advantages of having an unlocked phone. 
				Many people get their phones when they sign a contract with a carrier like Verizon or Sprint. The appeal is that the phone itself is much cheaper upfront;
				but when you’re locked into a carrier, they’ll always find a way to recover the cost of the phone they “gave” you. 
				Some people buy unlocked phones second-hand through sites like Craigslist.<br/><br/> 
				This can be an economic option if you’re not afraid of a little risk. However,
				the seller most likely paid $50-$150 to unlock this phone, and they will certainly pass on that cost to you. 
				And you never know what other issues a used phone may have. <br/><br/>
				Under limited circumstances, your carrier might unlock your phone. 
				If you have already paid your carrier full price for your phone, they should unlock it for you if you call them or stop by the store. 
				Some carriers will also agree to unlock your phone for a short period of time if you are traveling abroad, provided you have had a contract with them for at least six months or so.
				The disadvantage of course is that if you use your phone domestically, they will just lock it again.
				Before spending money to unlock a phone, it couldn’t hurt to give your carrier a call and hope for the best.<br/><br/>
				<p style="color:red; text-align:justify;">You can permanently unlock any phone by contacting us. check our homepage and click on contact. 
				Enter the necessary information, and D-Fire Works Computers will email you the necessary steps to follow to unlock your gadget.
				We also provide step-by-step directions and a money-back guarantee. 
			 </p><br/>
			<p><strong><span style="font-size:1.4em">Advantages of Having an Unlocked Gadget</span></strong><br/></p>
            <ul>
              <li style="text-align:justify"><i class="ri-check-double-line"></i> <u><strong>You can switch your carrier</strong></u>: Is your current carrier gouging you with unexpected fees? 
			  Did you find a better deal at another company? With an unlocked phone, you are free to change your carrier anytime you like. </li>
              <li style="text-align:justify"><i class="ri-check-double-line"></i><u><strong>You can change your SIM card whenever you like</strong></u>:  
			  Have you ever wanted to have a phone set up for business and another for personal use? There's no need to carry around two phones if you have two SIM cards and an unlocked phone. 
			  Alternatively, you can let a friend or family member use your phone for a while with their SIM card.</li>
            </ul>
			</div>
        </div>

      </div>
	  <!--End Services Page Section-->
	  <!--End Main-->

    @endsection