<div class="centered-form">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5 user_card">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="form-group">
                        <label for="email">E-mail</label>
                        <input type="email" class="form-control" id="email" name="email" required autofocus autocomplete="username">
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>
                    <div class="form-group">
                        <label for="password">Heslo</label>
                        <input type="password" class="form-control" id="password" name="password" required autocomplete="current-password">
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>
                    <button type="submit" class="btn btn-primary">{{ __('Prihlásiť') }}</button>
                </form>
                <p class="loginSubText"> Ešte nemáte účet?</p>
                @if (Route::has('password.request'))
                <a type="button" role="button" href="{{ route('register') }}" class="btn btn-secondary">Zaregistrujte sa</a>
                @endif
            </div>
        </div>
    </div>
</div>
