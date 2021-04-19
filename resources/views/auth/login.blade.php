<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src='//production-assets.codepen.io/assets/editor/live/console_runner-079c09a0e3b9ff743e39ee2d5637b9216b3545af0de366d4b9aad9dc87e26bfd.js'></script><script src='//production-assets.codepen.io/assets/editor/live/events_runner-73716630c22bbc8cff4bd0f07b135f00a0bdc5d14629260c3ec49e5606f98fdd.js'></script><script src='//production-assets.codepen.io/assets/editor/live/css_live_reload_init-2c0dc5167d60a5af3ee189d570b1835129687ea2a61bee3513dee3a50c115a77.js'></script><meta charset='UTF-8'><meta name="robots" content="noindex"><link rel="shortcut icon" type="image/x-icon" href="//production-assets.codepen.io/assets/favicon/favicon-8ea04875e70c4b0bb41da869e81236e54394d63638a1ef12fa558a4a835f1164.ico" /><link rel="mask-icon" type="" href="//production-assets.codepen.io/assets/favicon/logo-pin-f2d2b6d2c61838f7e76325261b7195c27224080bc099486ddd6dccb469b8e8e6.svg" color="#111" /><link rel="canonical" href="https://codepen.io/Koziuk-S/pen/jbJydJ?limit=all&page=85&q=form" />
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
    <link href= "{{ asset('css/estilos.css') }}" rel="stylesheet">
    <title>Document</title>
</head>
<body>
        <!-- https://dribbble.com/shots/2358349-Daily-Shmaily-UI-1-Game-Login -->
        <!--<h1 class="undac">Universidad Nacional Daniel Alcides Carrión</h1>--> 
        <x-jet-validation-errors class="alert mb-4" />
        <div class="col-md-5">
            <img src="{{ asset('img/Capa 2.png') }}" alt="">
        </div>
        <div class="triangulo">
        </div>
        <div class="wrapper">
            <div class="container">
                <img src="{{ asset('img/login.png') }}" alt="" width="510" height="710" style="margin: -30px 0 0 -90px;">
                @if (session('status'))
                    <div class="mb-4 font-medium text-sm text-green-600">
                        {{ session('status') }}
                    </div>
                @endif        
                <form  action="{{ route('login') }}" method="POST">
                    @csrf
                    <div class="title">
                        <label>¡Bienvenido!</label>
                        <label>Inicie sesión</label>
                    </div>
                    <div class="input-inform">
                        <select class="Roles">
                            <option hidden selected>Selecciona su rol</option>
                            <option value="-DEC-">Decano</option>
                            <option value="-DES-">Director de Escuela</option>
                            <option value="-DOC-">Docente</option>
                            <option value="-PRC-">Presidente de Comisión</option>
                            <option value="-GEC-">Gestión de Calidad</option>
                            <option value="-ELM-">El monge</option>
                        </select>

                        <x-jet-input id="password" class="block mt-1 w-full" type="email" placeholder="User..." name="email" :value="old('email')" required autofocus />
                        {{--<input type="text" name="email" id="name" placeholder="User..." />--}}
                        <x-jet-input id="password" class="block mt-1 w-full" type="password" placeholder="Password..." name="password" required autocomplete="current-password" />
                        {{--<input type="password" name="password" id="password" placeholder="Password..." />--}}
                        <div class="flex items-center justify-end mt-4">
                            @if (Route::has('password.request'))
                                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }} " id="forgot-pas">
                                    {{ __('¿Olvidaste tu contraseña?') }}
                                </a>
                            @endif
                        </div>
                        {{--<input type="button" value="¿Olvidaste tu contraseña?" id="forgot-pas"/>--}}
                    </div>
                    <div class="enter">
                        <x-jet-button class="ml-4" id="enter">
                            {{ __('Ingresar') }}
                        </x-jet-button>
                    </div>
                </form>
            </div>
        </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script></body>
</body>
</html>{{--
<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-jet-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-jet-button class="ml-4">
                    {{ __('Log in') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
--}}