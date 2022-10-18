<x-guest-layout>
    <x-jet-authentication-card>
        <main class="login-form">

            <div class="cotainer">
          
                <div class="row justify-content-center">
          
                    <div class="col-md-4">
          
                        <div class="card">
          
                            <div class="card-header">Login</div>
          
                            <div class="card-body">
        <x-slot name="logo">
            
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="form-group">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full form-control" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="mt-4 form-group">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full form-control" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-jet-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-jet-button class="ml-4 btn btn-primary">
                    {{ __('Log in') }}
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
