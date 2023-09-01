<x-app-layout>
@vite([
    'node_modules/bootstrap/dist/css/bootstrap.min.css',
    ])
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Exclusão') }}
        </h2>
    </x-slot>

    <div class="py-12" style="padding: 30px">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8" style="padding: 30px">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg"style="padding: 30px">
            <form method="POST" action="/excluir/{{$cliente->id}}">
        @csrf
        @method('delete')

        <!-- Name -->
        <center>
        <div>
            <x-input-label for="name" :value="__('Nome')" />
            <br>
            <x-text-input disabled id="nome" class="block w-2/6 content-center" type="text" name="nome" :value="$cliente->nome" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('id')" class="mt-2" />
        </div>
        </center>

        <div class="flex items-center justify-end mt-4">

            <x-primary-button class="ml-4">
                {{ __('Excluir') }}
            </x-primary-button>
        </div>
    </form>
            </div>
        </div>
    </div>
</x-app-layout>
