<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Sigin Page</title>
    <link rel="shortcut icon" href="{{ asset('images/kipslogo.png') }}" > 
    
    <!-- Favicon-->
    <link rel="icon"   href="{{ asset('favicon.icon') }}" type="image/x-icon">
  

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="{{ asset('plugins/bootstrap/css/bootstrap.css') }}" rel="stylesheet">


    <!-- Waves Effect Css -->

    <link href="{{ asset('plugins/node-waves/waves.css') }}" rel="stylesheet">

    <!-- Animation Css -->
 
    <link href="{{ asset('plugins/animate-css/animate.css') }}" rel="stylesheet">

    <!-- Custom Css -->

    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>

<body class="login-page" style=" background-image:url({{'Image/bg.jpg'}});background-repeat: no-repeat;">
    <div class="login-box">
       
         @if(session('error'))
                 <div class="alert alert-dismissible alert-danger">
                 <button class="close" type="button" data-dismiss="alert">&times;</button>

                  {{session('error')}}
               </div>
                  @endif
             
        <div class="loginBox">
    
                            <div class=" font-25 " style="margin-bottom: 20px; text-align: center;color: white;" type="text"> SIGN IN
                            </div>
                  
            <div class="body">

                <form id="sign_in" role="form" method="POST" action="{{ route('login') }}">
                {{ csrf_field() }}
                

             <div class="{{ $errors->has('email') ? ' has-error' : '' }}">
              
                      
                   
                            <input type="text" class="form-control" style="color:black" name="email" placeholder="EMAIL ADDRESS" value="{{ old('email') }}" required autofocus>
                     
                                  @if ($errors->has('email'))
                                    <span class="help-block text-light">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                   
              </div>

           
                 <div class="{{ $errors->has('password') ? ' has-error' : '' }}">       
               
                       
                        <div class="form-line">
                            <input type="password" style="color:black"  class="form-control" name="password" placeholder="PASSWORD" value="{{ old('email') }}" required>
                        </div>
                            @if ($errors->has('password'))
                            <div class="text-white">
                                    <span class="help-block text-light">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                             </div>
                                @endif
                   
                    </div>

                    <div class="row">
                        <div class="col-xs-8 p-t-5">
                            <input type="checkbox"  name="remember" {{ old('remember') ? 'checked' : '' }} id="rememberme" class="filled-in chk-col-pink">
                        <label for="rememberme">   <p style="color: white;"> Remember Me</p></label>
                        </div>
                        <div class="col-xs-20">
                            <button class="btn btn-block bg-pink waves-effect" type="submit">SIGN IN</button>
                        </div>
                    </div>
                    <div class="row m-t-15 m-b--20">
                        <div class="col-xs-6">
                             <a href="{{ route('register') }}">REGISTER</a>
                        </div>
                      
                    </div>
                </form>
            </div>
        </div>
    </div>


           <!-- Jquery Core Js -->
    <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
    
    
    <!-- Bootstrap Core Js -->
    
    <script src="{{ asset('plugins/bootstrap/js/bootstrap.js') }}"></script>

    <!-- Waves Effect Plugin Js -->

    <script src="{{ asset('plugins/node-waves/waves.js') }}"></script>

      </body>
</html>