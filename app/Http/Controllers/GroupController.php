<?php

namespace App\Http\Controllers;

use App\Models\Group;
use Illuminate\Http\Request;

class GroupController extends Controller
{
    public function index()
    {
        //$groups = Group::all();
        $groups = Group::with('persons')->paginate(5);
        return response()->json($groups);
    }
}
