<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Cliente') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <x-button class="ml-3 btn-login">
                        {{ __('Listar') }}
                    </x-button>
                    <a href="{{ url('/clients/') }}" class="btn btn-xs btn-info pull-right">Cadastrar</a>
                </div>
                <div class="p-6 bg-white border-b border-gray-200">
                    <table>
                        <th>
                            <td>Id</td>
                            <td>Cliente</td>
                            <td>Endereço</td>
                            <td>Contato</td>
                        </th>
                        @foreach($clients as $client)
                            <tr>
                                <td>Id</td>
                                <td>Cliente</td>
                                <td>Endereço</td>
                                <td>Contato</td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
