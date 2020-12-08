<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Mail\SendMail;
use App\Mail\SendEnquiry;

class SendEmailController extends Controller
{
  function index()
  {
   return view('contact');
  }

  function send(Request $request)
    {
     $this->validate($request, [
      'name'     =>  'required',
      'email'  =>  'required|email',
      'message' =>  'required'
     ]);

        $data = array(
            'name'      =>  $request->name,
            'email'      =>  $request->email,
            'message'   =>   $request->message
        );

     // \Mail::to('sbesttravels@gmail.com')->send(new SendMail($data));
     \Mail::to('srilankabesttravel@gmail.com')->send(new SendMail($data));
     return back()->with('success', 'Thanks for contacting us!');

    }
// ===================================================================================================================
    function sendEn(Request $request)
      {
       $this->validate($request, [
        'name'     =>  'required',
        'email'  =>  'required|email',
        'travel_date'  =>  'required',
        'person'  =>  'required',
        'tour'  =>  'required',
        'enquiry' =>  'required'
       ]);

          $data1 = array(
              'name'      =>  $request->name,
              'email'      =>  $request->email,
              'travel_date'  =>  $request->travel_date,
              'person'      =>  $request->person,
              'tour'      =>  $request->tour,
              'enquiry'   =>   $request->enquiry
          );

       // \Mail::to('sbesttravels@gmail.com')->send(new SendEnquiry($data1));
       \Mail::to('srilankabesttravel@gmail.com')->send(new SendEnquiry($data1));
       return back()->with('success', 'Thanks for contacting us!');

      }
}
