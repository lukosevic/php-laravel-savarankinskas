<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Master;
use File;

class MasterController extends Controller
{
    public function index(){
        $masters = Master::all();
        return view('pages.home', compact('masters'));
    }

    public function addMaster(){
        $services = Service::all();
        return view('pages.add-master', compact('services'));
    }
    public function store(Request $request){
        $validated = $request->validate([
            'name'=>'required|unique:masters|max:255',
            'lastName'=>'required|unique:masters|max:255',
            'specialization'=>'required',
            'city'=>'required',
            'gender'=>'required',
            'service'=>'required',
            'photo'=>'mimes:jpeg,png,gif',
        ]); 

        $path = $request->file('photo')->store('public/images');
            $fileName = str_replace('public/','',$path);
            
        Master::create([
            'name'=>request('name'),
            'lastName'=>request('lastName'),
            'specialization'=>request('specialization'),
            'city'=>request('city'),
            'gender'=>request('gender'),
            'service_id'=>request('service'),
            'photo'=>$fileName,
        ]);
        return redirect('/');
    }
    public function delete(master $master){
        $master->delete();
        return redirect('/');
    }
}
