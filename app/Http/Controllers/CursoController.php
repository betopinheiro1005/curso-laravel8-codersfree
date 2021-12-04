<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCurso;
use App\Models\Curso;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index()
    {
        $cursos = Curso::orderBy('id', 'desc')->paginate(10);

        // return view("cursos.index", ["cursos" => $cursos]);
        return view("cursos.index", compact('cursos'));
    }

    public function create()
    {
        return view("cursos.create");
    }

    public function store(StoreCurso $request)
    {

        // $curso = new Curso();
        // $curso->name = $request->name;
        // $curso->description = $request->description;
        // $curso->category = $request->category;
        // $curso->save();


        // $curso = Curso::create([
        //     "name" => $request->name,
        //     "description" => $request->description,
        //     "category" => $request->category
        // ]);

        $curso = Curso::create($request->all());

        return redirect(route('cursos.show', $curso));
    }

    public function show(Curso $curso)
    {
        return view("cursos.show", compact('curso'));
    }

    public function edit(Curso $curso)
    {
        return view("cursos.edit", compact('curso'));
    }

    public function update(Request $request, Curso $curso)
    {

        $request->validate([
            "name" => "required|min:3|max:30",
            "description" => "required|min:10|max:400",
            "category" => "required"
        ]);

        // $curso->name = $request->name;
        // $curso->description = $request->description;
        // $curso->category = $request->category;
        // $curso->update();

        $curso->update($request->all());

        return redirect(route('cursos.show', $curso));
    }

    public function destroy(Curso $curso)
    {
        $curso->delete();
        return redirect(route("cursos.index"));
    }
}
