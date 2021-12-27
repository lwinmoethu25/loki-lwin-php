<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pet;

class PetController extends Controller
{
    public function petList()
    {
        $pets = Pet::all();

        return view('pets', compact('pets'));
    }
}
