<x-guest-layout>
    <section>
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-5"><img class="bg-img-cover bg-center" src="/auth/side-image.jpg"
                        alt="looginpage"></div>
                <div class="col-xl-7 p-0">
                    <div class="login-card">
                        <x-jet-validation-errors class="mb-3 rounded-0" />

                        @if (session('status'))
                            <div class="alert alert-success mb-3 rounded-0" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif


                        <form class="theme-form login-form" method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="mb-3 text-center">
                                <img src="/ew-secondary.png" height="50" alt="">
                            </div>
                            <h6 class="text-center">Welcome back! Log in to your account.</h6>
                            @csrf
                            <div class="mb-3">
                                <x-jet-label value="{{ __('Email') }}" />

                                <x-jet-input class="{{ $errors->has('email') ? 'is-invalid' : '' }}" type="email"
                                    name="email" :value="old('email')" required />
                                <x-jet-input-error for="email"></x-jet-input-error>
                            </div>

                            <div class="mb-3">
                                <x-jet-label value="{{ __('Password') }}" />

                                <x-jet-input class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                    type="password" name="password" required autocomplete="current-password" />
                                <x-jet-input-error for="password"></x-jet-input-error>
                            </div>

                            <div class="mb-3">
                                <div class="custom-control custom-checkbox">
                                    <x-jet-checkbox id="remember_me" name="remember" />
                                    <label class="custom-control-label" for="remember_me">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>

                            <div class="mb-0">
                                <div class="d-flex justify-content-end align-items-baseline">
                                    @if (Route::has('password.request'))
                                        <a class="text-muted me-3" href="{{ route('password.request') }}">
                                            {{ __('Forgot your password?') }}
                                        </a>
                                    @endif

                                    <x-jet-button>
                                        {{ __('Log in') }}
                                    </x-jet-button>
                                </div>
                            </div>
                            {{-- <p>Don't have account?<a class="ms-2" href="sign-up.html">Create Account</a></p> --}}
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-guest-layout>
