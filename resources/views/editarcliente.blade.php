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
            <form method="POST" action="/editar/{{$cliente->id}}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Nome')" />
            <x-text-input id="nome" class="block mt-1 w-full" type="text" name="nome" :value="$cliente->nome" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Endereco -->
        <div class="mt-4">
            <x-input-label for="endereco" :value="__('Endereço')" />
            <x-text-input id="endereco" class="block mt-1 w-full" type="text" name="endereco" :value="$cliente->endereco" required autocomplete="username" />
            <x-input-error :messages="$errors->get('endereco')" class="mt-2" />
        </div>

        <!-- Bairro -->
        <div class="mt-4">
            <x-input-label for="bairro" :value="__('Bairro')" />
            <x-text-input id="bairro" class="block mt-1 w-full" type="text" name="bairro" :value="$cliente->bairro" required autocomplete="username" />
            <x-input-error :messages="$errors->get('bairro')" class="mt-2" />
        </div>

        <!-- Cep -->
        <div class="mt-4">
            <x-input-label for="cep" :value="__('Cep')" />
            <x-text-input id="cep" class="block mt-1 w-full" type="text" name="cep" :value="$cliente->cep" required autocomplete="username" />
            <x-input-error :messages="$errors->get('cep')" class="mt-2" />
        </div>

        <!-- Cidade -->
        <div class="mt-4">
            <x-input-label for="cidade" :value="__('Cidade')" />
            <x-text-input id="cidade" class="block mt-1 w-full" type="text" name="cidade" :value="$cliente->cidade" required autocomplete="username" />
            <x-input-error :messages="$errors->get('cidade')" class="mt-2" />
        </div>

        <!-- Estado -->
        <div class="mt-4">


            <select class="form-select" name="estado" for="estado"  aria-label="Default select example">
                <option selected id="estado">Escolher</option>
                <option value="PI">PI</option>
                <option value="MG">MG</option>
                <option value="SP">SP</option>
            </select>


            <!--<x-input-label for="estado" :value="__('Estado')" />
            <x-text-input id="estado" class="block mt-1 w-full" type="text" name="estado" :value="old('estado')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('estado')" class="mt-2" />-->
        </div>

    

        <div class="flex items-center justify-end mt-4">

            <x-primary-button class="ml-4">
                {{ __('Cadastrar') }}
            </x-primary-button>
        </div>
    </form>
            </div>
        </div>
    </div>
</x-app-layout>
