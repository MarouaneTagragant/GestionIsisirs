<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Niveau;
use App\Section;
use Illuminate\Http\Request;

class AdminSectionController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware(['auth', 'can:user-admin']);
    } 

    
    public function index(){
        $sections = Section::all();

        return view('admin.section.index', [
            'sections' => $sections
        ]);
    }

    public function add(){
        return view("admin.section.add");
    }

    public function store(Request $request){
        
        $section = New Section();

        $section->name = $request['name'];

        $section->save();

        return redirect()->route("admin.Sections");
    
    }

    public function show($id){
        $section = Section::findOrFail($id);

        $niveaux = Niveau::All();
        //dd($niveaux);
        

        return view('admin.section.detailsSection',[
            'section' => $section ,
            'niveaux' => $niveaux
        ]);
    }


    public function edit($id){

        $section = Section::whereId($id)->first();
        return view('admin.section.edit',[
            'section' => $section
        ]);
        
    }

    public function update($id,Request $request){
        $section = Section::findOrFail($id);

        $section->name = $request['name'];
        $section->save();

        return redirect()->route("admin.Sections");
    }

    public function delete($id){
        $section= Section::findOrFail($id);

        $section->delete();
        
        return redirect()->route("admin.Niveaux");
    }

}
