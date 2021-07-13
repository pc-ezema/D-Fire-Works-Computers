<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ContactUs;
use App\Blog;
use Mail;

class HomePageController extends Controller
{
    public function home()
    {
        return view('welcome');
    }

    public function contact()
    {
        return view('contact');
    }

    public function contact_us()
    {
        /** Validate request that's coming in */
        $this->validate(request(), array(
            'name' => 'required',
            'email' => 'required',
            'telephone' => 'required',
            'message' => 'required',
            'g-recaptcha-response' => 'required|captcha',
        ));

        /** Create an instance of the model and save data */
        $contact = new ContactUS();
        $contact->name = request()->name;
        $contact->email = request()->email;
        $contact->telephone = request()->telephone;
        $contact->subject = request()->subject;
        $contact->message = request()->message;
        $contact->save();

        /** Store data in $data to send message to admin */
        $data = array(
            'name' => request()->name,
            'email' => request()->email,
            'telephone' => request()->telephone,
            'subject' => request()->subject,
            'description' => request()->message,
            'admin_mail' => 'info@dfireworks.com.ng',
            'created_at' => $contact->created_at,
        );

        /** Send message to the admin */
        Mail::send('emails.contact_notification', $data, function ($m) use ($data) {
            $m->to($data['admin_mail'])->subject('Contact Us Form Notification');
        });

        session()->flash('success_report', 'Form Submitted Successfully');
        /** Return back to contact us page */
        return back();
    }

    public function blog()
    {
        $blogs = Blog::all();
        return view ('blog')->with('blogs' , $blogs);
    }
    public function service_page_gadgets()
    {
        return view ('service-page-gadgets');
    }
    
    public function service_page_ITsolutions()
    {
        
        return view ('service-page-ITsolutions');
    }
    public function service_page_others()
    {
        
        return view ('service-page-others');
    }
    public function service_page_repairs()
    {
        
        return view ('service-page-repairs');
    }
    public function service_page_software()
    {
        
        return view ('service-page-software');
    }
    public function portfolio_details()
    {
        return view('portfoliodetails');
    }

    public function faq()
    {
        return view('faq');
    }
}