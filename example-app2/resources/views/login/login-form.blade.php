<div class="centered-form">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5 user_card">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="form-group">
                        <label for="email">Email address</label>
                        <input type="email" class="form-control" id="email" name="email" required autofocus autocomplete="username">
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password" required autocomplete="current-password">
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>
                    <button type="submit" class="btn btn-primary">{{ __('Log in') }}</button>
                </form>
                <p class="loginSubText"> Do not have an account yet?</p>
                @if (Route::has('password.request'))
                <a type="button" role="button" href="{{ route('register') }}" class="btn btn-secondary">Go to register page</a>
                @endif
            </div>
        </div>
    </div>
</div>
