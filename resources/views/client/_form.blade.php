<!-- Name -->
<div>
    <x-label for="name" :value="__('Nome')" />

    <x-input id="name" class="block mt-1 w-full" type="text" name="name" value="{{ $client->name ?? '' }}" required autofocus />
</div>

<br />
<!-- Type -->
<div>
    <x-label for="type" :value="__('Tipo')" />

    <x-input id="type" class="block mt-1 w-full" type="text" name="type" value="{{ $client->type ?? '' }}" required autofocus />
</div>

<!-- CPF_CNPJ -->
<div class="mt-4">
    <x-label for="CPF_CNPJ" :value="__('CPF_CNPJ')" />

    <x-input id="CPF_CNPJ" class="block mt-1 w-full" type="text" name="CPF_CNPJ" value="{{ $client->CPF_CNPJ ?? '' }}" required />
</div>

<!-- address -->
<div class="mt-4">
    <x-label for="address" :value="__('Endereço')" />

    <x-input id="address" class="block mt-1 w-full" type="text" name="address" value="{{ $client->address ?? '' }}" required />
</div>

<!-- postal -->
<div class="mt-4">
    <x-label for="postal" :value="__('CEP')" />

    <x-input id="postal" class="block mt-1 w-full" type="text" name="postal" value="{{ $client->postal ?? '' }}" required />
</div>

<!-- city -->
<div class="mt-4">
    <x-label for="city" :value="__('Cidade')" />

    <x-input id="city" class="block mt-1 w-full" type="text" name="city" value="{{ $client->city ?? '' }}" required />
</div>

<!-- uf -->
<div class="mt-4">
    <x-label for="uf" :value="__('Estado')" />

    <x-input id="uf" class="block mt-1 w-full" type="text" name="uf" value="{{ $client->uf ?? '' }}" required />
</div>

<!-- phone -->
<div class="mt-4">
    <x-label for="phone" :value="__('Telefone')" />

    <x-input id="phone" class="block mt-1 w-full" type="text" name="phone" value="{{ $client->phone ?? '' }}" required />
</div>

<!-- Email Address -->
<div class="mt-4">
    <x-label for="email" :value="__('Email')" />

    <x-input id="email" class="block mt-1 w-full" type="email" name="email" value="{{ $client->email ?? '' }}"  />
</div>


<div class="flex items-center justify-end mt-4">

    <x-button class="ml-4">
        {{ __('Salvar') }}
    </x-button>
</div>
