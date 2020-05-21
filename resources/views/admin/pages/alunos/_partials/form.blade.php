@csrf

<div class="form-group">
    <input type="text" class="form-control" name="name" placeholder="Nome:" value="{{ $aluno->name ?? old('name') }}">
</div>

<div class="form-group">
    <input type="text" class="form-control" name="email" placeholder="E-mail:" value="{{ $aluno->email ?? old('email') }}">
</div>

<div class="form-group">
    <input type="text" class="form-control" name="birthdate" placeholder="Data Nascimento:" value="{{ date('d/m/Y',strtotime($aluno->birthdate)) ?? old('birthdate') }}">
</div>
<div class="form-group">
    <input type="text" class="form-control" name="sex" placeholder="Sexo:" value="{{ $aluno->sex ?? old('sex') }}">
</div>

<div class="form-group">
    <button type="submit" class="btn btn-success">Enviar</button>
</div>