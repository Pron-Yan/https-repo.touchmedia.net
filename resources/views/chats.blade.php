
<div style="background-image:url({{'Image/background.jpg'}});background-repeat: no-repeat;background-size:100% 100%; ">
@extends('layouts.app')@section('content')



<div class="container">

    <chats :user="{{ auth()->user() }}"></chats>

</div>
</div>
@endsection
