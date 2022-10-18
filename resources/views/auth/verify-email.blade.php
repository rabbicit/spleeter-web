<x-guest-layout>
    <x-jet-authentication-card>
        <main class="login-form">

            <div class="cotainer">
          
                <div class="row justify-content-center">
          
                    <div class="col-md-4">
          
                        <div class="card">
          
                            <div class="card-header">Verify Email</div>
          
                            <div class="card-body">
        <x-slot name="logo">
            {{-- <x-jet-authentication-card-logo /> --}}
        </x-slot>

        <div class="mb-4 text-sm text-gray-600">
            {{ __('Before continuing, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}
        </div>

        @if (session('status') == 'verification-link-sent')
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ __('A new verification link has been sent to the email address you provided in your profile settings.') }}
            </div>
        @endif

        <div class="mt-4 flex items-center justify-between">
            <form method="POST" action="{{ route('verification.send') }}">
                @csrf

                <div>
                    <x-jet-button type="submit btn-primary">
                        {{ __('Resend Verification Email') }}
                    </x-jet-button>
                </div>
            </form>

            <div>
                <a
                    href="{{ route('profile.show') }}"
                    class="underline text-sm text-gray-600 hover:text-gray-900"
                >
                    {{ __('Edit Profile') }}</a>

                <form method="POST" action="{{ route('logout') }}" class="inline">
                    @csrf

                    <button type="submit" class="underline text-sm text-gray-600 hover:text-gray-900 ml-2 btn-primary">
                        {{ __('Log Out') }}
                    </button>
                </form>
            </div>
        </div> 

    </div>

</div>

</div>

</div>

</div>

</main>
    </x-jet-authentication-card>
</x-guest-layout>
