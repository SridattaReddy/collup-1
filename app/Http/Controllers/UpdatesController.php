<?php

namespace App\Http\Controllers;

use Auth;
use App\Update;
use Illuminate\Http\Request;

class UpdatesController extends Controller
{
    public function index()
    {
      // Get all updates from the database
      $updates = Update::all();
      
      return view('updates.index', [ 'updates' => $updates ]);
    }
  
    public function create()
    {
      return view('updates.create');
    }
  
    public function store(Request $request)
    {
      // Get the request from the user
      // Display the request got from the user by ~ dd($request->all()); ~ function
      
      // Validate the inputs
      $request->validate([
        'body' => 'required|string|min:10'
      ]);
      
      // Store
      Update::create([
        'body' => $request->body,
        'user_id' => Auth::user()->id,
      ]);
      
      // REturn the user
      return redirect()->route('updates.index');
    }
  
    public function show(Update $update)
    {
      // Get the update from db
      return view('updates.show', [ 'update' => $update ]);
      
      // return view with the update details
    }
  
    public function edit(Update $update)
    {
      return view('updates.edit', compact('update') );
    }
  
    public function update(Request $request, Update $update)
    {
      $request->validate([
        'body' => 'required|string|min:10'
      ]);
      
      $update->body = $request->body;
      
      $update->save();
      
      return redirect()->route('updates.show', [ 'update' => $update->id ] );
    }
  
    public function destroy()
    {
    
    }
}
