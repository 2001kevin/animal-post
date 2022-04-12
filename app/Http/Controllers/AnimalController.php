<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use Illuminate\Http\Request;


class AnimalController extends Controller
{
    public function index(){
        $animals = Animal::paginate(5);
        return view('animal.list', compact('animals'));
    }

    public function AddAnimal(){
        return view('animal.new');
    }

    public function SaveAnimal(Request $request){
        $request->validate([
            'image' => 'image',
            'name' => 'required',
            'number_of_feet'=> 'required',
            'description' => 'required',
        ]);
        $file_name = $request->image->getClientOriginalName();
        $image = $request->image->storeAs('images', $file_name);
        Animal::create([
            'image' => $image,
            'name' => $request->name,
            'number_of_feet' => $request->number_of_feet,
            'description' => $request->description,
        ]);
        return redirect('/')->with('success','LIST CREATED SUCCESSFULLY');
    }

    public function AnimalDetails($id){
        $animals = Animal::find($id);
        return view('animal.details', compact('animals'));
    }

    public function AnimalEdit($id){
        $animals = Animal::find($id);
        return view('animal.edit', compact('animals'));
    }

    public function SaveEdit(request $request, $id){
        $animals = Animal::find($id);
    
        $file_name = $request->image->getClientOriginalName();
        $image = $request->image->storeAs('images', $file_name);

        Animal::where('id', $id)->update([
            'image' => $image,
            'name' => $request->name,
            'number_of_feet' => $request->number_of_feet,
            'description' => $request->description,
        ]);
    
        return redirect('/')->with('success','LIST EDITED SUCCESSFULLY');
    }

    public function AnimalDelete($id){
        $animals = Animal::find($id);
        $animals -> delete();
        return redirect('/')->with('success','LIST DELETED SUCCESSFULLY');

    }
}
