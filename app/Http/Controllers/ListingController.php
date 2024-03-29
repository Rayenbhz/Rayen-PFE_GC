<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ListingController extends Controller
{
    public function index (){
      
        return view('Listings.index', [
        
            'listings' => Listing::latest()->filter(request(['tag','search']))->paginate(6)
    ]);

    }
    public function show(Listing $listing){
        return view('Listings.show', [
            'listing' => $listing
    ]);

    }
    public function create(){
        return view('Listings.create');

    }

    public function store(Request $request){
      
      $formFields =$request->validate([
        'title'=>'required',
        'company'=>['required', Rule::unique('listings','company')],
        'location'=>'required',
        'website'=>'required',
        'email'=>'required',
        'tags'=>'required',
        'description'=>'required',
      ]);
      if($request->hasFile('logo')){
        $formFields['logo'] = $request->file('logo')->store('logos', 'public');
        
      }
      Listing::create($formFields);
      
      return redirect('/')->with('message','Listing Created successfully!');
        
    
    }
    public function update(Request $request, Listing $listing){
      
      $formFields =$request->validate([
        'title'=>'required',
        'company'=>'required',
        'location'=>'required',
        'website'=>'required',
        'email'=>'required',
        'tags'=>'required',
        'description'=>'required',
      ]);
      if($request->hasFile('logo')){
        $formFields['logo'] = $request->file('logo')->store('logos', 'public');
        
      }
      $listing->update($formFields);
      
      return back()->with('message','Listing updated successfully!');
        
    
    }
    public function edit (Listing $listing){
      return view('listings.edit',['listing'=>$listing]);
    }
    public function destroy (Listing $listing){
      $listing->delete();
      return redirect('/')->with('message','listing deleted successfully');
    }
}
