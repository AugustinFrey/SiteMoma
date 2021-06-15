<?php

namespace App\Http\Controllers;

use App\Contact;
use App\Notifications\ContactMail;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('contact');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'contact_name'    => 'required',
            'contact_email'   => 'required',
            'contact_subject' => 'required',
            'contact_message' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $page          = new Contact();
        $page->email   = $request->contact_email;
        $page->name    = $request->contact_name;
        $page->subject = $request->contact_subject;
        $page->message = $request->contact_message;
        $page->save();

        $user        = new User();
        $user->email = 'contact@chaire-innoveres.com'; // This is the email you want to send to.
        $user->notify(new ContactMail($request->all()));

        return redirect()->back()->with('success', "Votre message a été envoyé avec succès. Nous vous contacterons bientôt!");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
