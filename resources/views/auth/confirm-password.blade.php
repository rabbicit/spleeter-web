<x-guest-layout>
    <x-jet-authentication-card>
        <main class="login-form">

            <div class="cotainer">
          
                <div class="row justify-content-center">
          
                    <div class="col-md-4">
          
                        <div class="card">
          
                            <div class="card-header">Confirm Password</div>
          
                            <div class="card-body">
        <x-slot name="logo">
        </x-slot>

        <div class="mb-4 text-sm text-gray-600">
            {{ __('This is a secure area of the application. Please confirm your password before continuing.') }}
        </div>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('password.confirm') }}">
            @csrf

            <div>
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" autofocus />
            </div>

            <div class="flex justify-end mt-4">
                <x-jet-button class="ml-4 btn-primary">
                    {{ __('Confirm') }}
                </x-jet-button>
            </div>
        </form> 

    </div>

</div>

</div>

</div>

</div>

</main>
    </x-jet-authentication-card>
</x-guest-layout>
