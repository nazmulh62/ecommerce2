@extends('frontEnd.master')
@section('title')
    Login
@endsection
@section('header-title')
    <!-- products-breadcrumb -->
    <div class="products-breadcrumb">
        <div class="container">
            <ul>
                <li><i class="fa fa-home" aria-hidden="true"></i><a href="{{url('/')}}">Home</a><span>|</span></li>
                <li>Sign In & Sign Up</li>
            </ul>
        </div>
    </div>
    <!-- //products-breadcrumb -->
    @endsection
@section('content')

    <!-- banner -->
    <div class="banner">
        <div class="w3l_banner_nav_right">
            <!-- login -->
            <div class="w3_login">
                <h3>Sign In & Sign Up</h3>
                <div class="w3_login_module">
                    <div class="module form-module">
                        <div class="toggle"><i class="fa fa-times fa-pencil"></i>
                            <div class="tooltip">Click Me</div>
                        </div>
                        <div class="form">
                            <h2>Login to your account</h2>
                            <form action="#" method="post">
                                <input type="text" name="Username" placeholder="Username" required=" ">
                                <input type="password" name="Password" placeholder="Password" required=" ">
                                <input type="submit" value="Login">
                            </form>
                        </div>
                        <div class="form">
                            <h2>Create an account</h2>
                            <form action="#" method="post">
                                <input type="text" name="Username" placeholder="Username" required=" ">
                                <input type="password" name="Password" placeholder="Password" required=" ">
                                <input type="email" name="Email" placeholder="Email Address" required=" ">
                                <input type="text" name="Phone" placeholder="Phone Number" required=" ">
                                <input type="submit" value="Register">
                            </form>
                        </div>
                        <div class="cta"><a href="#">Forgot your password?</a></div>
                    </div>
                </div>
                <script>
                    $('.toggle').click(function(){
                        // Switches the Icon
                        $(this).children('i').toggleClass('fa-pencil');
                        // Switches the forms
                        $('.form').animate({
                            height: "toggle",
                            'padding-top': 'toggle',
                            'padding-bottom': 'toggle',
                            opacity: "toggle"
                        }, "slow");
                    });
                </script>
            </div>
            <!-- //login -->
        </div>
        <div class="clearfix"></div>
    </div>
    <!-- //banner -->

@endsection