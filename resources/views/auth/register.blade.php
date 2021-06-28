<x-app-layout>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <!-- Validation Errors -->
                    <x-auth-validation-errors class="mb-4" :errors="$errors"/>

                    <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <!-- Name -->
                        <div>
                            <x-label for="name" :value="__('Nome')"/>

                            <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')"
                                     required autofocus/>
                        </div>

                        <!-- Email Address -->
                        <div class="mt-4">
                            <x-label for="email" :value="__('Email')"/>

                            <x-input id="email" class="block mt-1 w-full" type="email" name="email"
                                     :value="old('email')" required/>
                        </div>

                        <!-- Username -->
                        <div class="mt-4">
                            <x-label for="username" :value="__('Usuario')"/>

                            <x-input id="username" class="block mt-1 w-full" type="text" name="username"
                                     :value="old('username')" style="text-transform:lowercase" required/>
                        </div>


                        <!-- Password -->
                        <div class="mt-4">
                            <x-label for="password" :value="__('Senha')"/>

                            <x-input id="password" class="block mt-1 w-full"
                                     type="password"
                                     name="password"
                                     required autocomplete="new-password"/>
                        </div>

                        <!-- Confirm Password -->
                        <div class="mt-4">
                            <x-label for="password_confirmation" :value="__('Confirmar Senha')"/>

                            <x-input id="password_confirmation" class="block mt-1 w-full"
                                     type="password"
                                     name="password_confirmation" required/>
                        </div>

                        <div class="flex items-center justify-end mt-4">
                            <x-button class="ml-4">
                                {{ __('Registrar') }}
                            </x-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
