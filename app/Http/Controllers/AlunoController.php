<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateAlunoRequest;
use App\Models\Aluno;
use Illuminate\Http\Request;

class AlunoController extends Controller
{

    protected $request;
    public function __construct(Request $request, Aluno $aluno)
    {
        //dd($request);
        $this->request = $request;
        $this->repository =  $aluno;

        /*$this->middleware('auth')->only([
            'create', 'store',
            ]);
        $this->middleware('auth')->except([
            'index', 'show'
            ]);*/
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $alunos = Aluno::orderby('name')->paginate();

        return view('admin.pages.alunos.index', [
            'alunos' => $alunos,
        ]);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.alunos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $date = str_replace('/', '-', $request->birthdate);
        $data['birthdate'] = date("Y-m-d", strtotime($date));
        
        Aluno::create($data);
       
        return redirect()->route('alunos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $aluno = $this->repository->where('id', $id)->first();
        if (!$aluno)
            return redirect()->back();
        return view('admin.pages.alunos.show', [
          'aluno' => $aluno
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
        $aluno = $this->repository->where('id', $id)->first();
        if (!$aluno)
            return redirect()->back();

        return view('admin.pages.alunos.edit', ['aluno' => $aluno]);
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


        if (!$aluno = $this->repository->find($id))
            return redirect()->back();
        
        $data = $request->all();

        $date = str_replace('/', '-', $request->birthdate);
        $data['birthdate'] = date("Y-m-d", strtotime($date));
    
        $aluno->update($data);

        return redirect()->route('alunos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $aluno = $this->repository->where('id', $id)->first();
 
        $aluno->delete();
 
        return redirect()->route('alunos.index');
    }
}
