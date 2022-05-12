
@extends('layouts.vendor')
@section('content')
 <h2 style="color:black;text-align:center;">welcome</h2>
 
 <p style="color:brown;text-align:center;font-size:20px;font-size:bold;"> {{auth()->guard('vendor')->user()->firstname}} </p>

@endsection