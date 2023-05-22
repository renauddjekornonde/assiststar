<?php

namespace App\Http\Controllers;

use App\Http\Requests\storeServiceRequest;
use App\Models\Contact;
use App\Models\Service;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $services = Service::all();
        $users= User::where('status', false)->get();
        $messages= Contact::all();
        return view('services.index',compact('services','users','messages'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $services = Service::all();
        $users= User::where('status', false)->get();
        $messages= Contact::all();
        return view('services.liste',compact('services','users','messages'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(storeServiceRequest $request)
    {
        $user= new User();
        $user->nom= $request['nom'];
        $user->email= $request['email'];
        $user->password= Hash::make("123456789");
        $user->status= false;
        $user->save();

        $validated = $request->validated();
        Service::create($validated);


        return to_route("services.index")
        ->with("success", 'Details added with success !');
    }

    /**
     * Display the specified resource.
     */
    public function show(Service $service)
    {
        $users= User::where('status', false)->get();
        $messages= Contact::all();
        $services= Service::all();
        return view('services.show',compact('service','users','messages','services'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Service $service)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Service $service)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Service $service)
    {
        $service->delete();
        return back()->with('success', 'Service supprimer avec succès !');
    }
}
