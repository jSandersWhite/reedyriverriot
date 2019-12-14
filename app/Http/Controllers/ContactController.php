<?php

namespace App\Http\Controllers;

use App\ContactForm;
use App\Http\Controllers\Controller;
use App\NewsletterUser;
use App\Http\Requests\NewsletterSignup;
use App\Http\Requests\SubmitContact;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    /**
     * Show the contact form page
     * 
     * @return View
     */
    public function show()
    {
        return view('contact.index');
    }

    /**
     * Create a NewsletterUser
     */
    public function newsletterSignup(NewsletterSignup $request)
    {
        $validator = Validator::make($request->all(), $request->rules());
        if ($validator->fails()) { 
            return response()->json(['errors' => $validator->errors()]);
        } else {
            $model = NewsletterUser::create([
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'email' => $request->email
            ]);

            if ($model->save()) {
                $request->session()->flash('success', 'Thanks! Your information was submitted successfully.');
                return response()->redirectTo(route('contact'));
            } 
        }    

        
    }

    /**
     * Subit contact form
     */
    public function submitContact(SubmitContact $request)
    {
        $validator = Validator::make($request->all());
        if ($request->validated()) {
            $model = ContactForm::create([
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'email' => $request->email,
                'subject' => $request->subject,
                'message' => $request->message
            ]);

            if ($model->save()) {
                $request->session()->flash('status', 
                    'Thanks! Your message sent successfully. We\'ll reach out as soon as possible!'
                );
                return response()->redirectTo(route('contact'));
            }
        }

        return response()->json(['errors' => $validator->errors()->all()]);
    }
}