<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdatecursoRequest;
use App\Models\curso;
use Illuminate\Http\Request;

class cursoController extends Controller
{

    protected $request;
    public function __construct(Request $request, curso $curso)
    {
        //dd($request);
        $this->request = $request;
        $this->repository =  $curso;

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cursos = curso::orderby('title')->paginate();

        return view('admin.pages.cursos.index', [
            'cursos' => $cursos,
        ]);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.cursos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //$data = $request->all();
        
        curso::create($request->all());
       
        return redirect()->route('cursos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $curso = $this->repository->where('id', $id)->first();
        if (!$curso)
            return redirect()->back();

        return view('admin.pages.cursos.show', [
          'curso' => $curso
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $curso = $this->repository->where('id', $id)->first();
        if (!$curso)
            return redirect()->back();

        return view('admin.pages.cursos.edit', ['curso' => $curso]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if (!$curso = $this->repository->find($id))
            return redirect()->back();
        
        //$data = $request->all();
        
        $curso->update($request->all());

        return redirect()->route('cursos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $curso = $this->repository->where('id', $id)->first();
 
        $curso->delete();
 
        return redirect()->route('cursos.index');
    }
}
