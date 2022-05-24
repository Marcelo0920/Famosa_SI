<x-guest-layout>


        <x-jet-validation-errors class="mb-4" />

        <div class="limiter">
                <div class="container-login100">
                    <div class="wrap-login100">
                    <div class="login100-pic js-tilt" data-tilt>
                        <img src="images/img-01.png" alt="IMG" />
                    </div>

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <span class="login100-form-title"> Famosa Registration</span>

            <div class="wrap-input100 validate-input">
                <x-jet-input
                    id="name"
                    class="input100"
                    type="text"
                    name="name"
                    placeholder="Nombre Completo"
                    :value="old('name')"
                    required
                    autofocus
                    autocomplete="name" />
                <span class="focus-input100"></span>
                <span class="symbol-input100">
                    <i class="fa fa-user" aria-hidden="true"></i>
                </span>
            </div>

            <div class="wrap-input100 validate-input">
                <x-jet-input
                    id="email"
                    class="input100"
                    type="email"
                    name="email"
                    :value="old('email')"
                    placeholder="Email"
                    required
                />
                <span class="focus-input100"></span>
                <span class="symbol-input100">
                    <i class="fa fa-envelope" aria-hidden="true"></i>
                </span>
            </div>

            <div class="wrap-input100 validate-input">
                <x-jet-input
                    id="phone"
                    class="input100"
                    type="number"
                    name="phone"
                    :value="old('phone')"
                    placeholder="Teléfono"
                    required
                />
                <span class="focus-input100"></span>
                <span class="symbol-input100">
                    <i class="fa fa-phone" aria-hidden="true"></i>
                </span>
            </div>

            <div class="wrap-input100 validate-input">
                <x-jet-input
                    id="password"
                    class="input100"
                    type="password"
                    name="password"
                    required
                    placeholder="Contraseña"
                    autocomplete="new-password"
                />
                <span class="focus-input100"></span>
                <span class="symbol-input100">
                    <i class="fa fa-lock" aria-hidden="true"></i>
                </span>
            </div>

            <div class="wrap-input100 validate-input">
                <x-jet-input
                    id="password_confirmation"
                    class="input100"
                    type="password"
                    name="password_confirmation"
                    required
                    placeholder="Confirmar Contraseña"
                    autocomplete="new-password"
                />
                <span class="focus-input100"></span>
                <span class="symbol-input100">
                    <i class="fa fa-lock" aria-hidden="true"></i>
                </span>
            </div>

            <div class="container-login100-form-btn">
                <x-jet-button class="login100-form-btn">
                    {{ __('Registrarme') }}
                </x-jet-button>
            </div>

            <div class="text-center p-t-136">
                <a  class="txt2" href="{{ route('login') }}">
                    {{ __('¿Ya tiene una cuenta?') }}
                    <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
                </a>
            </div>
        </form>
</x-guest-layout>
