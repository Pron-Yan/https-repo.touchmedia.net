
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
             
        <div class="loginBox" style="height:420px;">
    
                            <div class=" font-25 " style="margin-bottom: 20px; text-align: center;color: white;" type="text"> REGISTER
                            </div>
                  
            <div class="body">

                  <form method="POST" action="{{ route('register') }}">
                {{ csrf_field() }}
                

           
              
                      
                     <input placeholder="USERNAME"  id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus style="color:black;">

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                   
              </div>

              
               
                       
                        <div class="form-line">
                            <input placeholder="EMAIL ADDRESS" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" style="color:black;>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                   
                    </div>


                        <div class="form-line">
                             <input placeholder="PASSWORD" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" style="color:black;>

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                          </div>
 <div class="form-line">
                <input placeholder=" CONFIRM PASSWORD" id="password-confirm" type="password" class="form-control  text-dark " name="password_confirmation" required autocomplete="new-password" style="color:black;>
            </div>

                    <div class="row">
                        
                        <div class="col-xs-20">
                            <button class="btn btn-block bg-pink waves-effect" type="submit">SIGN IN</button>
                        </div>
                    </div>
                    <div class="row m-t-15 m-b--20">
                        <div class="col-xs-6">
                             <a href="{{ route('login') }}">LOGIN</a>
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