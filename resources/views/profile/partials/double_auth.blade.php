<form action={{ route("doubleAuth.switch") }} method="post" class="space-y-6">
    @csrf
    @method('PUT')
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Set 2FA ') }}
        </h2>
        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __('Once you enable double authentication, an additional layer of security will be added to your account. After logging in, a verification code will be sent to your registered email address. Please ensure you have access to your email before enabling double authentication.') }}
        </p>
    </header>

    <x-primary-button>{{ $user->double_auth ? __('Desactivate 2FA   ') : __('Activate 2FA   ') }}</x-primary-button>

</form>
