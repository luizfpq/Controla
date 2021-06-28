@php

    use App\Http\Controllers\StocksController;
    $products = StocksController::list_products();

    $select = isset($stock->id_product) ? $stock->id_product : null;

@endphp
<!-- Produto -->
<div>
    <x-label for="id_product" :value="__('Produto')"/>
    @if($select)
    <select name='id_product' placeholder='Produto' class='block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50' required autofocus>
        @foreach($products as $product => $id)
            @if($select == $id)
                <option value="{{ $id  }}" selected>{{ $product }}</option>
            @endif
        @endforeach
    </select>
    @else
        <select name='id_product' placeholder='Produto' class='block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50' required autofocus>
            <option></option>

            @foreach($products as $product => $id)
                @if($select == $id)
                    <option value="{{ $id  }}" selected>{{ $product }}</option>
                @else
                    <option value="{{ $id  }}">{{ $product }}</option>
                @endif
            @endforeach
        </select>
    @endif
</div>


<br/>
<!-- Quantia -->
<div>
    <x-label for="amount" :value="__('Quantidade')"/>

    <x-input id="amount" class="block mt-1 w-full" type="text" name="amount" value="{{ $stock->amount ?? '' }}"
             required autofocus/>

</div>


<div class="flex items-center justify-end mt-4">

    <x-button class="ml-4">
        {{ __('Salvar') }}
    </x-button>
</div>
