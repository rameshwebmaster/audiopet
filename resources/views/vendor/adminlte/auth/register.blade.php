@extends('adminlte::layouts.auth')

@section('htmlheader_title')
    Register
@endsection

@section('content')

<body class="hold-transition register-page">
    <div id="app" v-cloak>
        <div class="register-box">
            <div class="register-logo">
                <a href="{{ url('/home') }}"><b>Audio</b>PET</a>
            </div>

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


    <div class="register-box-body">
    <p class="login-box-msg">Register a new membership</p> 
        <form method="post" action="{{ url('register-form') }}">

        <div id="result" class="alert alert-success text-center" style="display: none;"> User Registered! <i class="fa fa-refresh fa-spin"></i> Entering...</div> 
            <div class="form-group has-feedback ">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input placeholder="Full Name" name="name" value="" autofocus="autofocus" class="form-control" type="text"> <span class="glyphicon glyphicon-user form-control-feedback"></span> 
            <!----></div>

            <div class="form-group has-feedback"><input placeholder="User Name" name="username" value="" class="form-control" type="text"> <span class="glyphicon glyphicon-user form-control-feedback"></span> 
             <!----></div>

            <!--  <div class="form-group has-feedback"><input placeholder="Email" name="email" value="" class="form-control" type="email"> <span class="glyphicon glyphicon-envelope form-control-feedback"></span> 
             </div> -->

              <div class="form-group has-feedback"><input placeholder="Password" name="password" class="form-control" type="password"> <span class="glyphicon glyphicon-lock form-control-feedback"></span>
               <!----></div> 

               <div class="form-group has-feedback"><input placeholder="Retype password" name="password_confirmation" class="form-control" type="password"></div> 

               <div class="row">
                    <div class="col-xs-8">
                        <a href="{{ url('/login') }}" class="text-center">I already have a membership</a>
                        </div> 
                            <div class="col-xs-4 col-xs-push-0">
                            <button type="submit" class="btn btn-primary btn-block btn-flat">Register</button>
                            </div>
                </div>

                <!----></form> 
                
            </div>

            <!-- <div class="register-box-body">
                <p class="login-box-msg">{{ trans('adminlte_lang::message.registermember') }}</p>

                <register-form></register-form>

             

                <a href="{{ url('/login') }}" class="text-center">{{ trans('adminlte_lang::message.membreship') }}</a>
            </div> --><!-- /.form-box -->
        </div><!-- /.register-box -->
    </div>

    @include('adminlte::layouts.partials.scripts_auth')

    @include('adminlte::auth.terms')

</body>

@endsection
