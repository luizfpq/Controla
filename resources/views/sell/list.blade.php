<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Lista Estoque') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <x-button class="ml-3 btn-login" onclick="location.href='{{ url('stock.create') }}'">
                        {{ __('Cadastrar') }}
                    </x-button>
                </div>
                <div class="p-6 bg-white border-b border-gray-200">
                    <x-table>
                        <x-slot name="header">
                            <x-table-column>id</x-table-column>
                            <x-table-column>Item</x-table-column>
                            <x-table-column>Quantidade</x-table-column>
                            <x-table-column></x-table-column>
                        </x-slot>
                        @foreach($stocks as $stock)
                            <tr>
                                <x-table-column>{{$stock->id}}</x-table-column>
                                <x-table-column><p title="{{$stock->description}}">{{$stock->name}}  </p></x-table-column>
                                <x-table-column>
                                    {{$stock->amount}}<br />
                                </x-table-column>
                                <x-table-column>
                                    <x-button class="ml-3 btn-login" onclick="location.href='{{ url('stock.edit/'. $stock->id .'/') }}'">

                                        <x-coolicon-edit width="10px"/>
                                    </x-button>
                                    <x-button class="ml-3 btn-pink" onclick="location.href='{{ url('stock.delete/'. $stock->id .'/') }}'">

                                        <x-coolicon-trash-empty width="10px"/>
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
