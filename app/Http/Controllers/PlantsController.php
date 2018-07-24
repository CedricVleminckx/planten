<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Plants;

class PlantsController extends Controller
{
    //
    public function plants(){
        $plants = Plants::paginate(15);
        $user = Auth::user();
        return view('home', ["plants" => $plants, 'user' => $user]);
    }

    public function detail($id){
        $plant = Plants::findOrFail($id);
        $user = Auth::user();
        return view('detail', ['plant' => $plant, 'user' => $user]);
    }

    public function search(Request $request){
        $search = $request->search;

        $plants = Plants::where('name', 'like', '%' . $search . '%')->orWhere('nameLatin', 'like', '%' . $search . '%')->paginate(15);
        $user = Auth::user();
        if($search == ''){
            $search = ' Zoeken';
        }
        return view('home', ["plants" => $plants, 'user' => $user, 'search' => $search]);
    }
}
