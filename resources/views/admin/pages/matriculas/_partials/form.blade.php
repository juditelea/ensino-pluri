@csrf

<div class="form-group">
    <select name="alunos" id="aluno">
    @foreach ($alunos as $aluno)
        <option value="{{ $aluno->name }}">Aluno</option>
    </select>
    @endforeach
</div>  
 <div class="form-group">
    <select name="cursos" id="curso">
    @foreach ($cursos as $curso)
        <option value="{{ $curso->title }}">Curso</option>
    </select>
    @endforeach
</div>

<div class="form-group">
    <button type="submit" class="btn btn-success">Enviar</button>
</div>