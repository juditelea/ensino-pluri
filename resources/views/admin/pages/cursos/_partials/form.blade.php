@csrf

<div class="form-group">
    <input type="text" class="form-control" name="title" placeholder="Título:" value="{{ $curso->title ?? old('title') }}">
</div>

<div class="form-group">
    <input type="textarea" class="form-control" name="description" placeholder="Descrição:" value="{{ $curso->description ?? old('description') }}">
</div>

<div class="form-group">
    <button type="submit" class="btn btn-success">Enviar</button>
</div>