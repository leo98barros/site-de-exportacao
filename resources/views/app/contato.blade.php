@extends('layouts.app')

@section('body')
<div class="row justify-content-center">
    <div class="col-4">
        <form action="" method="post">
            @csrf
            <div class="mb-3">
                <label for="" class="form-label">E-mail</label>
                <input type="email" class="form-control" name="email" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label class="form-label">Mensagem:</label>
                <textarea name="message" class="form-control" rows="6"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </div> 
</div>
@endsection