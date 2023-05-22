<?php

namespace App\Http\Controllers;
use App\Http\Requests\storeContactRequest;
use App\Models\Contact;
use App\Models\Service;
use App\Models\User;
use GuzzleHttp\Psr7\Message;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users= User::where('status', false)->get();
        $messages= Contact::all();
        $services= Service::all();
        return view('contacts.index', compact('users','messages','services'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $services = Service::all();
        $users= User::where('status', false)->get();
        $messages= Contact::all();
        return view('contacts.liste',compact('services','users','messages'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(storeContactRequest $request)
    {
        $validated = $request->validated();
        Contact ::create($validated);
        return to_route('contacts.index')
        ->with("success",'Thank you for sending us a message and we will get back to you shortly.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Contact $contact)
    {
        $services = Service::all();
        $messages = Contact::all();
        $users= User::where('status', false)->get();

        return view('contacts.show',compact('services','users','contact','messages'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Contact $contact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Contact $contact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contact $contact)
    {
        $contact->delete();
        return back()->with('success', 'meassage supprimer avec succès !');
    }
}
