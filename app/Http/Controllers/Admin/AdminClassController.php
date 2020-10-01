<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Niveau;
use App\Section;
use App\Classe;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;



class AdminClassController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'can:user-admin']);
    } 


    public function index(){
        $classes = Classe::all();

        return view('admin.classe.index',[
            'classes' => $classes
        ]);
    }

    public function add(){
        $niveaux = DB::table('niveaux')->get();
        $sections = DB::table('sections')->get();

        return view('admin.classe.add',[
            "niveaux" => $niveaux,
            "sections" => $sections
        ]);
    }

    public function store(Request $request){
        $class = New Classe();

        $class->name = $request['name'];

        $section =  Section::find($request['sectionClass']);
        $class->section()->associate($section);

        $niveau =  Niveau::find($request['niveauClass']);
        $class->niveau()->associate($niveau);

        $class->save();


    }

    public function edit(){

    }

    public function update(){

    }

    public function delete(){
        
    }
}
