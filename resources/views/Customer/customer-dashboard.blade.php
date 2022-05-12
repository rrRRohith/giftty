
@extends('layouts.customerlayout')
@section('content')
<h1>welcome {{auth()->guard('customer')->user()->firstname}}</h1>
<a href="/customer/logout">logout</a>
@endsection