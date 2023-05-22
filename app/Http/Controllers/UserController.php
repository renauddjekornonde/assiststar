<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use App\Models\Contact;
use App\Models\Service;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users= User::where('status', false)->get();
        $messages= Contact::all();
        $services= Service::all();
        return view('user.index', compact('users','messages','services'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $users= User::where('status', false)->get();
        $messages= Contact::all();
        $services= Service::all();
        return view('user.create', compact('users','messages','services'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUserRequest $request)
    {
        $validated= $request->validated();
        User::create($validated);
        return to_route("user.index")->with('success', 'User enregistrer avec succès!');
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        $messages= Contact::all();
        $services= Service::all();
        $users= User::all();
        return view('user.show', compact('user','messages','services','users'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        $messages= Contact::all();
        $services= Service::all();
        $users= User::all();
        return view('user.edit', compact('user','messages','services','users'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        // $validated= $request->validated();
        // $user->update($validated);
        $user->nom=$request->nom;
        $user->email=$request->email;
        $user->password=Hash::make($request->password);
        $user->save();
        return to_route('user.index')->with('success', 'User modifier avec suuccès!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        $user->delete();
        return back()->with('success', 'User supprimer avec succès !');
    }

    public function userChecker(){
        $is_verified= Auth::user()->status;

        if($is_verified == 0){

         return to_route('admin.index');
        }
        else{
            return redirect()->route('home.index');
        }
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('home.index');
        }
    
}
