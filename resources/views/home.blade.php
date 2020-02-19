
   <style>
            html, body {
                background-image: url({{'Image/granger.jpg'}});background-repeat: no-repeat;background-size:cover;
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

                background-color: black; 
                height: 90px;
                width: 490px;
                padding: 10px;
         

            }
        </style>



@extends('layouts.app')
          
@section('content')
<div class="container">
	<div class="mb-7" style=" border-radius:17;margin-top: 120px;  font-weight: 200;">
                  <div style="text-align:center"> <p style="font-size: 50px;color:white;"> HELLO {{ Auth::user()->name }}! </p></br>
                        <p style="font-size: 20px;color:white;">  Experience Chatting with different Player on Global</p>
                  	   </br>
                         <a href="{{'chats'}}">
  					  <h1 class="btn btn-primary align-center border-primary"> CHAT HERE! </h1>
                        </a>
				  </div>
         	

    </div>         		
</div>




@endsection
