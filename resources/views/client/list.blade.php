<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Lista clientes') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <x-button class="ml-3 btn-login" onclick="location.href='{{ url('client.create') }}'">
                        {{ __('Cadastrar') }}
                    </x-button>
                </div>
                <div class="p-6 bg-white border-b border-gray-200">
                    <x-table>
                        <x-slot name="header">
                            <x-table-column>id</x-table-column>
                            <x-table-column>Cliente</x-table-column>
                            <x-table-column>Endereço</x-table-column>
                            <x-table-column></x-table-column>
                        </x-slot>
                        @foreach($clients as $client)
                            <tr>
                                <x-table-column>{{$client->id}}</x-table-column>
                                <x-table-column>{{$client->name}}</x-table-column>
                                <x-table-column>
                                    {{$client->address}}<br />
                                    <small>{{$client->phone}}</small>
                                </x-table-column>
                                <x-table-column>
                                    <x-button class="ml-3 btn-login" onclick="location.href='{{ url('client.update') }}'">

                                        <x-coolicon-edit style="color: #fcfcfc" width="10px"/>
                                    </x-button>
                                </x-table-column>
                            </tr>
                        @endforeach
                    </x-table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
