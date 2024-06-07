<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;
use App\Rules\NoUrls;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Http;

class ContactFormController extends Controller
{
    //
    public function sendContactForm(Request $request)
    {
        // dd($request); 
        $validatedData = $request->validate([
            'name'    => 'required',
            'email'   => 'required|email',
            'number'  => 'required',
            'company' => 'required',
            'role'    => 'required',
            'message' => ['required', 'string'],
            // 'recaptcha_response' => 'required',
        ]);
    
        // Send the token to Google for verification
        $response = Http::post('https://www.google.com/recaptcha/api/siteverify', [
            'secret' => config('services.recaptcha.secret'),
            'response' => $request->input('recaptcha_response'),
            'remoteip' => $request->ip(),
        ]);
    
        // Handle the verification response
        $responseData = $response->json();
        dd('responseData',$responseData);
        if ($validatedData) {
            // Token is valid and has a score above the threshold
            // Proceed with form submission and sending email
            Mail::to('info@tradeimex.in')->send(new ContactFormMail($validatedData));
            return redirect()->route('thankyou')->with('success', 'Your message has been sent!');
        } else {
            // Token is invalid or score is too low
            // Reject the form submission and display an error message
            return redirect()->back()->withErrors(['error' => 'Your message could not be sent. Please check the reCAPTCHA checkbox and try again.']);
        }
    }
}
