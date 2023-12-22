<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\JobApplication;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;


class ContactController extends Controller
{
    public function index()
    {
        return view('dashboard.contact');
    }

    public function send(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:225',
            'email' => 'required|email:dns',
            'phone' => 'required|min:5|max:255',
            'company' => '',
            'message' => 'required'
        ]);

        Contact::create($validatedData);
        Mail::to('hrd.klikbangunan@gmail.com')->send(new ContactFormMail($validatedData));

        return redirect('/contact');
    }

    public function apply(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:225',
            'email' => 'required|email:dns',
            'phone' => 'required|min:5|max:255',
            'nik' => 'required',
            'bidang' => 'required',
            'cv' => 'file|mimes:pdf'
        ]);

        if ($request->file('cv')) {
            $validatedData['cv'] = $request->file('cv')->store('cv-pelamar');
        }
        JobApplication::create($validatedData);


        return redirect('/contact');
    }

    public function admincust(Contact $messages)
    {
        $messages = Contact::all();
        return view('admin.customer', compact('messages'));
    }
    
    public function adminappl(JobApplication $applications)
    {
        $applications = JobApplication::all();
        return view('admin.application', compact('applications'));
    }
}
