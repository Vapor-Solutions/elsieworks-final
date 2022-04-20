
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


                        <form method="POST" class="theme-form login-form" action="/forgot-password">
                            @csrf

                            <div class="mb-3">
                                <x-jet-label value="Email" />
                                <x-jet-input type="email" name="email" :value="old('email')" required autofocus />
                            </div>

                            <div class="d-flex justify-content-end mt-4">
                                <x-jet-button>
                                    {{ __('Email Password Reset Link') }}
                                </x-jet-button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-guest-layout>
