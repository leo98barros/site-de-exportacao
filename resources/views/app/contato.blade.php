@extends('layouts.app')

@section('body')
<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-4">
            <form action="" method="post">
                @csrf
                <div class="mb-3">
                    <label for="" class="form-label">E-mail</label>
                    <input type="email" class="form-control" name="email" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label class="form-label">Assunto:</label>
                    <select class="form-select">
                        <option selected></option>
                        <option value="1">Sugestão</option>
                        <option value="2">Dúvidas</option>
                        <option value="3">Reclamação</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-label">Mensagem:</label>
                    <textarea name="message" class="form-control" rows="6"></textarea>
                </div>
                <button type="submit" class="btn btn-secondary">Enviar</button>
            </form>
        </div> 
    </div>
</div>
@endsection