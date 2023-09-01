<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Http\Requests\StoreClienteRequest;
use App\Http\Requests\UpdateClienteRequest;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('cadastrarcliente');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        Cliente::create([
                'Nome' => $request->nome,
                'Endereco' => $request->endereco,
                'Bairro' => $request->bairro,
                'Cep' => $request->cep,
                'Cidade' => $request->cidade,
                'Estado' => $request->estado
        ]);
        return redirect('listarcliente');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreClienteRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $cliente)
    {
        return view('listarcliente', ['cliente' => Cliente::all()]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        return view('editarcliente', ['cliente' => Cliente::find($id)]);
    }

    public function confirm_excl($id)
    {
        return view('confirm_excl', ['cliente' => Cliente::find($id)]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        Cliente::where('id', $id)->first()->update([
            'Nome' => $request->nome,
            'Endereco' => $request->endereco,
            'Bairro' => $request->bairro,
            'Cep' => $request->cep,
            'Cidade' => $request->cidade,
            'Estado' => $request->estado
    ]);
        return redirect('listarcliente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Cliente::where('id',$id )->delete();
        return redirect('listarcliente');
    }
}
