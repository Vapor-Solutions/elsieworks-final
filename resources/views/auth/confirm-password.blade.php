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

                        <form class="theme-form login-form" method="POST" action="{{ route('password.confirm') }}">
                            @csrf

                            <div>
                                <x-jet-label for="password" value="{{ __('Password') }}" />
                                <x-jet-input id="password" type="password" name="password" required
                                    autocomplete="current-password" autofocus />
                            </div>

                            <div class="d-flex justify-content-end mt-4">
                                <x-jet-button class="ms-4">
                                    {{ __('Confirm') }}
                                </x-jet-button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-guest-layout>
