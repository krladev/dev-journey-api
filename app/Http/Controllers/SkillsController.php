<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Skill;

class SkillsController extends Controller
{
    public function list(){
        return response()->json(Skill::all());
    }

    public function getById($id){
        $skill = Skill::find($id);

        if(!$skill){
            abort(404, 'Skill with id: '.$id.' was not found');
        }

        return response()->json($skill);
    }
}
