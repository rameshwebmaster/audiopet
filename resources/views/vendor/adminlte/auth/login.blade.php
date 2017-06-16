@extends('adminlte::layouts.auth')

@section('htmlheader_title')
    Log in
@endsection

@section('content')
<body class="hold-transition login-page">
    <div id="app" v-cloak>
        <div class="login-box">
            <div class="login-logo">
                <a href="{{ url('/home') }}"><b>Audio</b>Pets</a>
            </div><!-- /.login-logo -->

        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <strong>Whoops!</strong> {{ trans('adminlte_lang::message.someproblems') }}<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="login-box-body">
        <p class="login-box-msg"> <b>Admin Login</b> </p>
<!-- 
        <login-form name="{{ config('auth.providers.users.field','email') }}"
                    domain="{{ config('auth.defaults.domain','') }}"></login-form>
 -->
       <form method="post" action="{{url('login-form')}}">
       {{csrf_field()}}
        <div id="result" class="alert alert-success text-center" style="display: none;"> Logged in! <i class="fa fa-refresh fa-spin"></i> Entering...</div> <div class="form-group has-feedback">
        <input placeholder="Email" name="email" value="" autofocus="autofocus" class="form-control" type="email"> <span class="glyphicon form-control-feedback glyphicon-envelope"></span> <!----></div> <div class="form-group has-feedback">
        <input placeholder="Password" name="password" class="form-control" type="password"> <span class="glyphicon glyphicon-lock form-control-feedback"></span> <!----></div> <div class="row"><div class="col-xs-8"><div class="checkbox icheck"><label><div class="icheckbox_square-blue" style="position: relative;"><input name="remember" style="display: block; position: absolute; top: -20%; left: -20%; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255) none repeat scroll 0% 0%; border: 0px none; opacity: 0;" type="checkbox"><ins class="iCheck-helper" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255) none repeat scroll 0% 0%; border: 0px none; opacity: 0;"></ins></div> Remember Me
    </label></div></div> <div class="col-xs-4"><button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button></div></div></form>

       <!--      -->
        <a href="{{ url('/register') }}" class="text-center">{{ trans('adminlte_lang::message.registermember') }}</a>

    </div>

    </div>
    </div>
    @include('adminlte::layouts.partials.scripts_auth')

    <script>
        $(function () {
            $('input').iCheck({
                checkboxClass: 'icheckbox_square-blue',
                radioClass: 'iradio_square-blue',
                increaseArea: '20%' // optional
            });
        });
    </script>
</body>

@endsection
