@extends('layouts.main')
@section('content')
<div  style="width:1000px; margin:0 auto; text-align:center;min-height: 200px">
<h1 class="mt-5">Thank you for purchase...</h1>
<p> Your Invoice number  {{$order->id}} is sent to {{$order->carts->email}} </p>
</div>
@endsection