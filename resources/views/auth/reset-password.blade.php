<x-guest-layout>
    <x-jet-authentication-card>
        <main class="login-form">

            <div class="cotainer">
          
                <div class="row justify-content-center">
          
                    <div class="col-md-4">
          
                        <div class="card">
          
                            <div class="card-header">Reset Password</div>
          
                            <div class="card-body">
        <x-slot name="logo">
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('password.update') }}">
            @csrf

            <input type="hidden" name="token" value="{{ $request->route('token') }}">

            <div class="block">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email', $request->email)" required autofocus />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-jet-button class=" btn-primary">
                    {{ __('Reset Password') }}
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

