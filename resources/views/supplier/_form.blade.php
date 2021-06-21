<!-- Name -->
<div>
    <x-label for="name" :value="__('Nome')" />

    <x-input id="name" class="block mt-1 w-full" type="text" name="name" value="{{ $supplier->name ?? '' }}" required autofocus />
</div>

<!-- CNPJ -->
<div class="mt-4">
    <x-label for="CNPJ" :value="__('CNPJ')" />

    <x-input id="CNPJ" class="block mt-1 w-full" type="text" name="CNPJ" value="{{ $supplier->CNPJ ?? '' }}" required />
</div>

<!-- address -->
<div class="mt-4">
    <x-label for="address" :value="__('Endereço')" />

    <x-input id="address" class="block mt-1 w-full" type="text" name="address" value="{{ $supplier->address ?? '' }}" required />
</div>

<!-- postal -->
<div class="mt-4">
    <x-label for="postal" :value="__('CEP')" />

    <x-input id="postal" class="block mt-1 w-full" type="text" name="postal" value="{{ $supplier->postal ?? '' }}" required />
</div>

<!-- city -->
<div class="mt-4">
    <x-label for="city" :value="__('Cidade')" />

    <x-input id="city" class="block mt-1 w-full" type="text" name="city" value="{{ $supplier->city ?? '' }}" required />
</div>

<!-- uf -->
<div class="mt-4">
    <x-label for="uf" :value="__('Estado')" />

    <x-input id="uf" class="block mt-1 w-full" type="text" name="uf" value="{{ $supplier->uf ?? '' }}" required />
</div>

<!-- phone -->
<div class="mt-4">
    <x-label for="phone" :value="__('Telefone')" />

    <x-input id="phone" class="block mt-1 w-full" type="text" name="phone" value="{{ $supplier->phone ?? '' }}" required />
</div>

<!-- Email Address -->
<div class="mt-4">
    <x-label for="email" :value="__('Email')" />

    <x-input id="email" class="block mt-1 w-full" type="email" name="email" value="{{ $supplier->email ?? '' }}"  />
</div>


<div class="flex items-center justify-end mt-4">

    <x-button class="ml-4">
        {{ __('Salvar') }}
    </x-button>
</div>
