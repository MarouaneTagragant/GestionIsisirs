<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Niveau;
use App\Section;
use Illuminate\Http\Request;

class AdminNiveauController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'can:user-admin']);
    } 


    public function index()
    {
        $niveaux = Niveau::all();

        return view('admin.niveau.index',[
            'niveaux' => $niveaux
        ]);
    }

    
    public function add()
    {
        $sections = Section::all();

        return view("admin.niveau.add",[
            'sections' => $sections
        ]);
    }

   
    public function store(Request $request)
    {
        $niveau = New Niveau();

        $niveau->name = $request['name'];
        $section = Section::find($request['Niveauforsection']);
        $niveau->section()->associate($section);
        $niveau->save();


        return redirect()->route("admin.Niveaux");
    }

    
    public function show($id)
    {
        $niveau = Niveau::findOrFail($id);

        return view('admin.niveau.detailsniveau',[
            'niveau' => $niveau
        ]);
    }

    
    public function edit($id)
    {
        //
        $niveau = Niveau::findOrFail($id);
        $sections = Section::all();

        

        return view('admin.niveau.edit',[
            'niveau' => $niveau,
            'sections' => $sections
        ]);
    }

    
    public function update(Request $request, $id)
    {
        $niveau = Niveau::findOrFail($id);

        $niveau->name = $request['name'];
        $section = Section::find($request['Niveauforsection']);
        $niveau->section()->associate($section);
        $niveau->save();

        return redirect()->route("admin.Niveaux");

    }

    
    public function delete($id)
    {
        $niveau = Niveau::findOrFail($id);

        $niveau->delete();
        
        return redirect()->route("admin.Niveaux");
        
    }
}
