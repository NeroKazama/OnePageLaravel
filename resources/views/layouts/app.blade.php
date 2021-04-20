<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" async></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" >
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light nav-bar">
            <div class="container">
                <div class="col-12 text-center m-auto">
                    <ul class="w-100 white" id="main">
                        <li class="col-2">
                            <a class="" href="/">
                                <img class="position-absolute w-75" style="top: -30px; left: 0px" src="img/logo.svg" alt="">
                            </a>
                        </li>
                        <li class="col-1" v-scroll-to="'#AboutUs'" :class="{ 'nav-bar-active' :  active == 'AboutUs' }"><a class="white" @click="activeNav('AboutUs')" href="#">About Us</a></li>
                        <li class="col-1" v-scroll-to="'#Donate'" :class="{ 'nav-bar-active' :  active == 'Donate' }"><a class="white" @click="activeNav('Donate')" href="#">Donate</a></li>
                        <li class="col-1" v-scroll-to="'#Masters'" :class="{ 'nav-bar-active' :  active == 'Masters' }"><a class="white" @click="activeNav('Masters')" href="#">Masters</a></li>
                        <li class="col-1" v-scroll-to="'#Customer'" :class="{ 'nav-bar-active' :  active == 'Customer' }"><a class="white" @click="activeNav('Customer')" href="#">Customer Review</a></li>
                        <li class="col-1" v-scroll-to="'#FAQ'" :class="{ 'nav-bar-active' :  active == 'FAQ' }"><a class="white" @click="activeNav('FAQ')" href="#">FAQ</a></li>
                        <li class="col-1" v-scroll-to="'#ContactUs'" :class="{ 'nav-bar-active' :  active == 'ContactUs' }"><a class="white" @click="activeNav('ContactUs')" href="#">Contact Us</a></li>
                        @if(Auth::check())
                            <li class="col-1"><a class="m-btn m-btn-primary" href="/profile">Profile</a></li>
                            <li class="col-2"><a class="m-btn m-btn-primary" href="{{route('logout')}}">Log Out</a></li>
                        @else
                            <li class="col-2"><a class="m-btn m-btn-primary" @click.prevent="cNinth = true" href="#">Donate</a></li>  
                        @endif  
                    </ul>
                    <a class="float-right nav-bar-s-btn" @click.prevent="NavBarPhoneScreen == true ? NavBarPhoneScreen = false : NavBarPhoneScreen = true" href="#">
                        <img class="w-50" src="img/bars-solid.svg" alt=""></a>
                </div>
            </div>
        </nav>
        <div class="h-100 position-fixed" style="top: 1px; z-index: 9990">
            <ul class="white h-100 nav-bar-s" v-if="NavBarPhoneScreen == true" id="main">
                <li class="col-8" v-scroll-to="'#AboutUs'" :class="{ 'nav-bar-active' :  active == 'AboutUs' }"><a class="white" @click="activeNav('AboutUs')" href="#">About Us</a></li>
                <li class="col-8" v-scroll-to="'#Donate'" :class="{ 'nav-bar-active' :  active == 'Donate' }"><a class="white" @click="activeNav('Donate')" href="#">Donate</a></li>
                <li class="col-8" v-scroll-to="'#Masters'" :class="{ 'nav-bar-active' :  active == 'Masters' }"><a class="white" @click="activeNav('Masters')" href="#">Masters</a></li>
                <li class="col-8" v-scroll-to="'#Customer'" :class="{ 'nav-bar-active' :  active == 'Customer' }"><a class="white" @click="activeNav('Customer')" href="#">Customer Review</a></li>
                <li class="col-8" v-scroll-to="'#FAQ'" :class="{ 'nav-bar-active' :  active == 'FAQ' }"><a class="white" @click="activeNav('FAQ')" href="#">FAQ</a></li>
                <li class="col-8" v-scroll-to="'#ContactUs'" :class="{ 'nav-bar-active' :  active == 'ContactUs' }"><a class="white" @click="activeNav('ContactUs')" href="#">Contact Us</a></li>
                @if(Auth::check())
                    <li class="col-8"><a class="m-btn m-btn-primary" href="/profile">Profile</a></li>
                    <li class="col-8"><a class="m-btn m-btn-primary" href="/logout">Log Out</a></li>
                @else
                    <li class="col-8"><a class="m-btn m-btn-primary" @click.prevent="cNinth = true" href="#">Donate</a></li> 
                @endif
            </ul>
        </div>
        <main>
            @yield('content')
        </main>
    </div>
</body>
</html>