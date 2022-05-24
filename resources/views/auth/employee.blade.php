<x-guest-layout>



        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif
        <div class="limiter">
            <div class="container-login100">
                <div class="wrap-login100">
                <div class="login100-pic js-tilt" data-tilt>
                    <img src="images/img-01.png" alt="IMG" />
                </div>
        <form class="login100-form validate-form" method="POST" action="{{ route('login') }}">
            @csrf
            <span class="login100-form-title"> Famosa Login</span>
            <div>
               <!--  <x-jet-label for="email" value="{{ __('Email') }}" /> -->
<!--                 <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
 -->            </div>
<!-- EMAIL -->
            <div class="wrap-input100 validate-input"
                 >
                <x-jet-input
                    class="input100"
                    type="number"
                    name="number"
                    placeholder="ID"
                    id="id"
                    required
                    :value="old('ID')"
                    autofocus
                />
                <span class="focus-input100"></span>
                <span class="symbol-input100">
                <i class="fa fa-envelope" aria-hidden="true"></i>
              </span>
            </div>
            <!-- PASSWORD -->

            <div class="wrap-input100 validate-input"
                 data-validate="Password is required">

                <x-jet-input
                    class="input100"
                    type="password"
                    name="password"
                    placeholder="Contraseña"
                    id="password"
                    required
                    autocomplete="current-password"
                />

                <span class="focus-input100"></span>
                <span class="symbol-input100">
                <i class="fa fa-lock" aria-hidden="true"></i>
              </span>
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-jet-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Recordarme') }}</span>
                </label>
            </div>

            <div class="container-login100-form-btn">
              <x-jet-button class="login100-form-btn">{{ __('Iniciar Sesión')}}</x-jet-button>
            </div>

            <div class="text-center p-t-12">
                <span class="txt1">¿Olvidó su </span>
                <a class="txt2" href="{{ route('password.request') }}">
                    {{ __('ID?') }}
                </a>
            </div>
        </form>
        </div>
      </div>
    </div>

</x-guest-layout>
