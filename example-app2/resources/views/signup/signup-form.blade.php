<div class="centered-form">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 user_card_modified">
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name" required autofocus autocomplete="name">
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    </div>
                    <div class="form-group">
                        <label for="email">Email address</label>
                        <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" required autocomplete="username">
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password" required autocomplete="new-password">
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>
                    <div class="form-group">
                        <label for="password_confirmation">Confirm Password</label>
                        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required autocomplete="new-password">
                        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="termsOfService">
                                <label class="form-check-label" for="termsOfService">Accept Terms of Service</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="receiveEmailNotifications">
                                <label class="form-check-label" for="receiveEmailNotifications">Receive Email Notifications</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <button type="submit" class="btn btn-primary float-right">{{ __('Register') }}</button>
                        </div>
                    </div>
                </form>
                <div class="row">
                    <div class="col-md-6 mt-2">
                        <p class="d-inline accountText"> Already have an account?</p>
                    </div>
                    <div class="col-md-6">
                        <a type="button" role="button" href="{{ route('login') }}" class="btn btn-secondary">Go to Login page</a>
                    </div>
                </div>
                <div class="row justify-content-center">

                </div>
            </div>
        </div>
    </div>
</div>
