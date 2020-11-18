<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SkillsController extends Controller
{
    public function list(){
        return response()->json('list');
    }

    public function getById(){
        return response()->json('getById');
    }
}
