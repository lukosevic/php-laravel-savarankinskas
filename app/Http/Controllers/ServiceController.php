<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Master;

class ServiceController extends Controller
{
    public function index(){
        $services = Service::all();
        return view('main', compact('services'));
    }
    public function addService(){
        $services = Service::all();
        return view('pages.add-service', compact('services'));
    }
    public function store(Request $request){
        $validated = $request->validate([
            'name'=>'required|unique:services|max:255',
            'address'=>'required',
            'manager'=>'required',
        ]); 
        Service::create([
            'name'=>request('name'),
            'address'=>request('address'),
            'manager'=>request('manager'),
        ]);

        return redirect('/');
    }
}
