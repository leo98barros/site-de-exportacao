@extends('layouts.app')

@section('body')
<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-4">
            <img src="{{$product->image}}" alt="" srcset="">
        </div>
        <div class="col-4">
            <h3>{{ $product->name }}</h3>

            <p class="mt-5">
                R$ <b>{{ $product->price }},00</b>
            </p>

            <form action="" method="post">
                <div class="mb-3">
                    <label class="form-label">Tamanho:</label>
                    <select class="form-select">
                        <option selected>Tamanho</option>
                        <option value="1">70x100</option>
                        <option value="2">50x70</option>
                        <option value="3">30x42</option>
                        <option value="4">25x35</option>
                    </select>
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary">Adicionar</button>
                </div>
            </form>

            <p>{{ $product->description }}</p>
        </div>
    </div>
</div>
@endsection