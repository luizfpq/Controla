<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Produtos cadastrados') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <x-button class="ml-3 btn-login" onclick="location.href='{{ url('product.create') }}'">
                        {{ __('Cadastrar') }}
                    </x-button>
                </div>
                <div class="p-6 bg-white border-b border-gray-200">
                    <x-table>
                        <x-slot name="header">
                            <x-table-column>id</x-table-column>
                            <x-table-column>Produto</x-table-column>
                            <x-table-column>Custos</x-table-column>
                            <x-table-column></x-table-column>
                        </x-slot>
                        @foreach($products as $product)
                            <tr>
                                <x-table-column>{{$product->id}}</x-table-column>
                                <x-table-column>
                                    {{$product->name}}<br />
                                    <small>{{$product->description}}</small>
                                </x-table-column>
                                <x-table-column>
                                    Valor: {{$product->sell_value}}<br />
                                    <small>Custo: {{$product->buy_value}}</small>
                                </x-table-column>
                                <x-table-column>
                                    <x-button class="ml-3 btn-login" onclick="location.href='{{ url('product.edit/'. $product->id .'/') }}'">

                                        <x-coolicon-edit style="color:#fcfcfc" width="10px"/>
                                    </x-button>
                                    <x-button class="ml-3 btn-pink" onclick="location.href='{{ url('product.delete/'. $product->id .'/') }}'">

                                        <x-coolicon-trash-empty style="color:#0f0f0f" width="10px"/>
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
