@extends('layouts.app')

@section('body')
    <div class="container">
        @foreach ($categories as $category)
        <div class="row justify-content-center mt-4">
            <h3>{{ $category->name }}</h3>
            @foreach ($category->products as $product)
            <div class="col-md-3">
                <div class="card mb-4 shadow-sm">
                    <img class="card-img-top" src="{{ $product->image }}" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text">
                            {{ $product->description }}
                        </p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <a href="{{ route('produto.show', ['product' => $product->id]) }}" class="btn btn-sm btn-outline-secondary">Detalhes</a>
                                <a href="" class="btn btn-sm btn-outline-secondary">Adicionar</a>
                            </div>
                            <small class="text-muted">9 mins</small>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        @endforeach
        {{-- <div class="row justify-content-center">
                <div class="col-md-3">
                    <div class="card mb-4 shadow-sm">
                        <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail" alt="Card image cap">
                        <div class="card-body">
                            <p class="card-text">Este é um card maior e que suporta texto abaixo, como uma introdução mais natural ao conteúdo adicional.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-secondary">Ver</button>
                                    <button type="button" class="btn btn-sm btn-outline-secondary">Editar</button>
                                </div>
                                <small class="text-muted">9 mins</small>
                            </div>
                        </div>
                    </div>
                </div>
            <div class="col-md-3">
                <div class="card mb-4 shadow-sm">
                    <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text"></p>
                        <p class="card-text">Este é um card maior e que suporta texto abaixo, como uma introdução mais natural ao conteúdo adicional. No entanto, esse conteúdo é um pouco maior.</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <button type="button" class="btn btn-sm btn-outline-secondary">Ver</button>
                                <button type="button" class="btn btn-sm btn-outline-secondary">Editar</button>
                            </div>
                            <small class="text-muted">9 mins</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card mb-4 shadow-sm">
                    <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail"
                        alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text">Este é um card maior e que suporta texto abaixo, como uma introdução mais natural ao conteúdo adicional. No entanto, esse conteúdo é um pouco maior.</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <button type="button" class="btn btn-sm btn-outline-secondary">Ver</button>
                                <button type="button" class="btn btn-sm btn-outline-secondary">Editar</button>
                            </div>
                            <small class="text-muted">9 mins</small>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card mb-4 shadow-sm">
                    <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail"
                        alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text">Este é um card maior e que suporta texto abaixo, como uma introdução mais natural ao conteúdo adicional. No entanto, esse conteúdo é um pouco maior.</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <button type="button" class="btn btn-sm btn-outline-secondary">Ver</button>
                                <button type="button" class="btn btn-sm btn-outline-secondary">Editar</button>
                            </div>
                            <small class="text-muted">9 mins</small>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
    </div>
@endsection
