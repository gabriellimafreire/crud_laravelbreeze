<x-app-layout>
@vite([
    'node_modules/bootstrap/dist/css/bootstrap.min.css',
    ])
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12" style="padding: 30px">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8" style="padding: 30px">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg"style="padding: 30px">
            <table class="table">
  <thead>
    <tr class="bg-primary">
      <th scope="col">Nome</th>
      <th scope="col">Endereço</th>
      <th scope="col">Bairro</th>
      <th scope="col">Cep</th>
      <th scope="col">Cidade</th>
      <th scope="col">Estado</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($cliente as $cliente )
    <tr>
    {{$cliente->id}}
          <td>{{$cliente->nome}}</td>
          <td>{{$cliente->endereco}}</td>
          <td>{{$cliente->bairro}}</td>
          <td>{{$cliente->cep}}</td>
          <td>{{$cliente->cidade}}</td>
          <td>{{$cliente->estado}}</td>
          <td>
            <a href="/editar/{{$cliente->id}}" class="btn btn-primary">Editar</a>
            <a href="/excluir/{{$cliente->id}}" class="btn btn-danger">Excluir</a>
          </td>
    </tr>

    @endforeach
</tbody>
</table>
            <div>
        </div>
</x-app-layout>








