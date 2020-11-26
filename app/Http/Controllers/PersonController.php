<?php

namespace App\Http\Controllers;

use App\Models\Person;
use Illuminate\Http\Request;

class PersonController extends Controller
{
    public function index()
    {
        $persons = Person::with(['types' => function ($query) {
            $query->orderBy('name','desc');
        }])->paginate();
        return response()->json($persons);
    }
}
