<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Cadastro de clientes') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <div class="py-12">
                        <x-auth-validation-errors class="mb-4" :errors="$errors" />

                        <form method="POST" action="{{ route('client.create') }}">
                        @csrf

                        <!-- Name -->
                            <div>
                                <x-label for="name" :value="__('Nome')" />

                                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
                            </div>


                            <!-- Type -->
                            <div>
                                <x-label for="type" :value="__('Tipo')" />

                                <x-input id="type" class="block mt-1 w-full" type="text" name="type" :value="old('type')" required autofocus />
                            </div>

                            <!-- cpf_cnpj -->
                            <div class="mt-4">
                                <x-label for="cpf_cnpj" :value="__('cpf_cnpj')" />

                                <x-input id="cpf_cnpj" class="block mt-1 w-full" type="text" name="cpf_cnpj" :value="old('cpf_cnpj')" required />
                            </div>

                            <!-- address -->
                            <div class="mt-4">
                                <x-label for="address" :value="__('Endereço')" />

                                <x-input id="address" class="block mt-1 w-full" type="text" name="address" :value="old('address')" required />
                            </div>

                            <!-- postal -->
                            <div class="mt-4">
                                <x-label for="postal" :value="__('CEP')" />

                                <x-input id="postal" class="block mt-1 w-full" type="text" name="postal" :value="old('postal')" required />
                            </div>

                            <!-- city -->
                            <div class="mt-4">
                                <x-label for="city" :value="__('Cidade')" />

                                <x-input id="city" class="block mt-1 w-full" type="text" name="city" :value="old('city')" required />
                            </div>

                            <!-- uf -->
                            <div class="mt-4">
                                <x-label for="uf" :value="__('Estado')" />

                                <x-input id="uf" class="block mt-1 w-full" type="text" name="uf" :value="old('uf')" required />
                            </div>

                            <!-- phone -->
                            <div class="mt-4">
                                <x-label for="phone" :value="__('Telefone')" />

                                <x-input id="phone" class="block mt-1 w-full" type="text" name="phone" :value="old('phone')" required />
                            </div>

                            <!-- Email Address -->
                            <div class="mt-4">
                                <x-label for="email" :value="__('Email')" />

                                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"  />
                            </div>


                            <div class="flex items-center justify-end mt-4">

                                <x-button class="ml-4">
                                    {{ __('Salvar') }}
                                </x-button>
                            </div>
                        </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
