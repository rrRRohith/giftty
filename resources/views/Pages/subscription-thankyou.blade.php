@extends('layouts.main')
@section('content')
<div  style="width:1000px; margin:0 auto; text-align:center;min-height: 200px">
	<h4 style="padding-top: 25px">{{$message}}</h4>
<h1 class="mt-5" >Thank you for subscribing us...</h1>
<p><a href="{{url('/')}}"><button>Back To Home</button></a></p>
</div>
@endsection