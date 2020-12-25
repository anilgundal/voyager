@extends('voyager::auth.master')

@section('content')


<div class="container sm:px-10">
    <form action="{{ route('voyager.login') }}" method="POST">
        {{ csrf_field() }}
    <div class="block xl:grid grid-cols-2 gap-4">
        <!-- BEGIN: Login Info -->
        <div class="hidden xl:flex flex-col min-h-screen">
            
            <div class="my-auto">
                <img alt="Dentopol Ağız ve Diş Sağlığı Hastanesi" class="-intro-x w-1/2 -mt-16" src="{{ asset('login-assets/images/illustration.svg') }}">
                <div class="-intro-x text-white font-medium text-4xl leading-tight mt-10">
                    Dentapol
                    <br>
                    Yönetim Paneli
                </div>
                <div class="-intro-x mt-5 text-lg text-white dark:text-gray-500">Dentapol Yönetim Paneli Giriş Ekranı</div>
            </div>
        </div>
        <!-- END: Login Info -->
        <!-- BEGIN: Login Form -->
        <div class="h-screen xl:h-auto flex py-5 xl:py-0 my-10 xl:my-0">
            
            <div class="my-auto mx-auto xl:ml-20 bg-white xl:bg-transparent px-5 sm:px-8 py-8 xl:p-0 rounded-md shadow-md xl:shadow-none w-full sm:w-3/4 lg:w-2/4 xl:w-auto">

                <a href="" class="-intro-x items-center pt-0 mb-5">
                    <img alt="Dentopol Ağız ve Diş Sağlığı Hastanesi" class="my-10" src="{{ asset('login-assets/images/logo.png') }}">
                </a>

                <h2 class="intro-x font-bold text-2xl xl:text-3xl text-center xl:text-left">
                    Giriş Yapın
                </h2>
                <div class="intro-x mt-2 text-gray-500 xl:hidden text-center">
                        @if(!$errors->isEmpty())
                            <div class="alert alert-red">
                                <ul class="list-unstyled">
                                    @foreach($errors->all() as $err)
                                        <li>{{ $err }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                </div>
                <div class="intro-x mt-8">
                    
                    <div class="form-group form-group-default" id="emailGroup">
                        <!-- <label>{{ __('voyager::generic.email') }}</label> -->
                        <div class="controls">
                            <input type="text" name="email" id="email" value="{{ old('email') }}" placeholder="{{ __('voyager::generic.email') }}" class="intro-x login__input input input--lg border border-gray-300 block mt-4" required>
                        </div>
                    </div>


                    <div class="form-group form-group-default" id="passwordGroup">
                        <!-- <label>{{ __('voyager::generic.password') }}</label> -->
                        <div class="controls">
                            <input type="password" name="password" placeholder="{{ __('voyager::generic.password') }}" class="intro-x login__input input input--lg border border-gray-300 block mt-4" required>
                        </div>
                    </div>


                </div>
                <div class="intro-x flex text-gray-700 dark:text-gray-600 text-xs sm:text-sm mt-4">
                    <div class="flex items-center mr-auto">
                        <input type="checkbox" name="remember" id="remember-me" value="1" class="input border mr-2">
                        <label for="remember-me" class="cursor-pointer select-none">Beni Hatırla</label>
                    </div>
                </div>
                <div class="intro-x mt-5 xl:mt-8 text-center xl:text-left">
                    <button type="submit" class="button button--lg w-full xl:w-32 text-white bg-theme-1 xl:mr-3 align-top login-button">
                        <span class="signingin hidden">
                            <span class="voyager-refresh"></span>
                            Giriliyor...</span>
                        <span class="signin">Giriş</span>
                    </button>
                </div>

            </div>
        </div>
        <!-- END: Login Form -->
    </div>

    </form>

    <div style="clear:both"></div>


</div>

@endsection

@section('post_js')

<script>
    var btn = document.querySelector('button[type="submit"]');
    var form = document.forms[0];
    var email = document.querySelector('[name="email"]');
    var password = document.querySelector('[name="password"]');
    btn.addEventListener('click', function (ev) {
        if (form.checkValidity()) {
            btn.querySelector('.signingin').className = 'signingin';
            btn.querySelector('.signin').className = 'signin hidden';
        } else {
            ev.preventDefault();
        }
    });
    email.focus();
    document.getElementById('emailGroup').classList.add("focused");

    // Focus events for email and password fields
    email.addEventListener('focusin', function (e) {
        document.getElementById('emailGroup').classList.add("focused");
    });
    email.addEventListener('focusout', function (e) {
        document.getElementById('emailGroup').classList.remove("focused");
    });

    password.addEventListener('focusin', function (e) {
        document.getElementById('passwordGroup').classList.add("focused");
    });
    password.addEventListener('focusout', function (e) {
        document.getElementById('passwordGroup').classList.remove("focused");
    });

</script>
@endsection
