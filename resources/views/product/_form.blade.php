@php

    use App\Http\Controllers\SuppliersController;
    $suppliers = SuppliersController::list_suppliers();

    $select = isset($product->id_supplier) ? $product->id_supplier : null;

@endphp
<!-- Name -->
<div>
    <x-label for="name" :value="__('Nome')" />

    <x-input id="name" class="block mt-1 w-full" type="text" name="name" value="{{ $product->name ?? '' }}" required autofocus />
</div>

<br />
<!-- Type -->
<div>
    <x-label for="description" :value="__('Descrição')" />

    <x-input id="description" class="block mt-1 w-full" type="text" name="description" value="{{ $product->description ?? '' }}" required autofocus />
</div>

<!-- buy_value -->
<div class="mt-4">
    <x-label for="buy_value" :value="__('Valor de Compra')" />

    <x-input id="buy_value" class="block mt-1 w-full" type="text" name="buy_value" value="{{ $product->buy_value ?? '' }}" required />
</div>

<!-- sell_value -->
<div class="mt-4">
    <x-label for="sell_value" :value="__('Valor de Venda')" />

    <x-input id="sell_value" class="block mt-1 w-full" type="text" name="sell_value" value="{{ $product->sell_value ?? '' }}" required />
</div>

<!-- id_supplier -->
<div class="mt-4">

        <x-label for="id_supplier" :value="__('Fornecedor')"/>
        @if($select)
            <select name='id_supplier' placeholder='Fornecedor' class='block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50' required autofocus>
                @foreach($suppliers as $supplier => $id)
                    @if($select == $id)
                        <option value="{{ $id  }}" selected>{{ $supplier }}</option>
                    @endif
                @endforeach
            </select>
        @else
            <select name='id_suplier' placeholder='Fornecedor' class='block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50' required autofocus>
                <option></option>

                @foreach($suppliers as $supplier => $id)
                    @if($select == $id)
                        <option value="{{ $id  }}" selected>{{ $supplier }}</option>
                    @else
                        <option value="{{ $id  }}">{{ $supplier }}</option>
                    @endif
                @endforeach
            </select>
        @endif


</div>

<div class="flex items-center justify-end mt-4">

    <x-button class="ml-4">
        {{ __('Salvar') }}
    </x-button>
</div>
