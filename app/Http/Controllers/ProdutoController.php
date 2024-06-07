<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $produtos = Produto::all();

        return view('admin.produtos.index', ['produtos' => $produtos]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.produtos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Produto::create([
            'name' => $request->name,
            'description' => $request->description,
            'line' => $request->line,
            'price' => $request->price,
            'categoria_id' => $request->categoria,
        ]);

        return back()->withSuccess('Produto criado com sucesso');
    }

    /**
     * Display the specified resource.
     */
    public function show(Produto $produto)
    {
        return view('admin.produtos.show', ['produto' => $produto]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Produto $produto)
    {
        return view('admin.produtos.edit', ['produto' => $produto]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Produto $produto)
    {
        $produto->name = $request->name;
        $produto->description = $request->description;
        $produto->line = $request->line;
        $produto->price = $request->price;
        $produto->categoria_id = $request->categoria;
        $produto->save();

        return back()->withSuccess('Produto atualizado com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Produto $produto)
    {
        $produto->delete();

        return back()->withSuccess('Produto deletado com sucesso');
    }
}
