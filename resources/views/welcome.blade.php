
        <style>
            html, body {
                background-image: url({{'Image/welcome.jpg'}});background-repeat: no-repeat;background-size:cover;
                background-color: #fff;
                color: white;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;

            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size:44px;
            }

            .links > a {
                color: white;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {

                margin-bottom: 30px;
            }

             .bg {

         
                height: 90px;
                width: 490px;
                padding: 10px;
         

            }
        </style>
  
@extends('layouts.app')
          
@section('content')

<div class="container">
    <div class="mb-7" style=" border-radius:17;margin-top: 50px;  font-weight: 700;">
                  <div class="border border-primary" style="text-align:center"> <p style="font-size: 40px;color:yellow;"> MOBILE LEGENDS CHATAPP </p></br>
                        <p style="font-size: 20px;color:white;">  Experience Chatting with different Player on Global</p>
                       </br>

            @if (Route::has('login'))
                         @auth
                        <a href="{{ url('/home') }}">
                         <h1 class="btn btn-primary align-center"> HOME
                         </h1>
                        </a>
                    @else
                    <a href="{{ route('login') }}">
                         <div class="btn btn-primary align-center" style="max-width: 100%">LOGIN
                        </div>
                     </a>
                 </br>   </br>
                @if (Route::has('register'))
                         <a href="{{ route('register') }}">
                         <h1 class="btn btn-primary align-center">REGISTER
                         </h1>
                        </a>

                    @endif
                     @endauth
                  </div>
                    @endif
    </div>              
</div>

   
@endsection
