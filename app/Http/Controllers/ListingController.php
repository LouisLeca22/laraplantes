<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Listing;
use Illuminate\Validation\Rule;

class ListingController extends Controller
{
    // show all listings
    public function index()
    {
        return view('listings.index', [
            "listings" => Listing::latest()->filter(request(['tag', 'search']))->paginate(6)
        ]);
    }

    // Show single listing
    public function show(Listing $listing)
    {
        return view('listings.show', [
            'listing' => $listing
        ]);
    }

    // Show create form
    public function create()
    {
        return view('listings.create');
    }

    // Store listing data
    public function store(Request $request)
    {
        $formFields = $request->validate([
            'family' => 'required',
            'name' => ['required', Rule::unique('Listings', 'name')],
            'use' => 'required',
            'vernacular' => 'required',
            'wikipedia' => 'required',
            'tags' => 'required',
            'description' => 'required'
        ]);

        if($request->hasFile('logo')){
            $formFields['logo'] = $request->file('logo')->store('logos', 'public');
        }

        $formFields['user_id'] = auth()->id();

        Listing::create($formFields);
        
        return redirect('/')->with('message', 'Plante ajoutée!');
    }

    // Show edit form
    public function edit(Listing $listing){
        return view('Listings.edit', ['listing' =>$listing]);
    }

    // Update listing data
    public function update(Request $request, Listing $listing)
    {   
        // Make sure logged in user is owner
        if($listing->user_id != auth()->id()){
            abort(403, "Non authorisé ");
        }

        $formFields = $request->validate([
            'family' => 'required',
            'name' => ['required'],
            'use' => 'required',
            'vernacular' => 'required',
            'wikipedia' => 'required',
            'tags' => 'required',
            'description' => 'required'
        ]);

        if($request->hasFile('logo')){
            $formFields['logo'] = $request->file('logo')->store('logos', 'public');
        }
       
        $listing->update($formFields);
        
        return back()->with('message', 'Plante mise à jour!');
    }

    // Delete lsiting
    public function destroy(Listing $listing){
         // Make sure logged in user is owner
         if($listing->user_id != auth()->id()){
            abort(403, "Non authorisé ");
        }
        $listing->delete();
        return redirect('/')->with('message', 'Plante supprimée');
    }

    // manage listings
    public function manage(){
        return view('listings.manage', ['listings' => auth()->user()->listings()->get()]);
    }
}
