@extends('app')
  
@section('content')
    <div class="column" style="margin-top: 9%; display: flex; justify-content:space-between; align-items:center;">
        <a class="button2" style="font-weight:200; border-radius: 8px;" href="{{ url('/fabricate') }}">Back</a>
        <h1 style="font-weight:400; margin-top: 20px"> {{ $fabricate->Title }} </h1>
        <a class="button2" style="border-radius: 8px; font-weight:200;" href="#">Bookmark</a>
    </div>
    <div class="column2" style="display:flex; flex-direction: column; justify-content:center; align-items: center;">
        <div style="display:flex; justify-content:center; text-align:center">
            <h3 style="font-weight:200; color: #6988C3;"> {{ $fabricate->Author }} </h2>
        </div>
        <div>
            <hr style="color:white; width: 400px;">
            <p style="margin-left: 5%; width:350px; text-align:justify;">A/N: {!! nl2br($fabricate->AN) !!}</p>
            <hr style="color:white; width: 400px;">
        </div>
        <div style="display: flex; justify-content:center; color: white; flex-direction:column;">
            <h3 style="font-weight:200; text-align: center; color: #6988C3; margin-top: 20px; margin-bottom: 20px;">Chapter 1</h2>
            <p style="width:1000px; text-align:justify;">{!! nl2br($fabricate->Content) !!}</p>
        </div>
    </div>
    
    
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <img src="/images/{{ $fabricate->Cover }}" width="300px">
            </div>
        </div>
    </div>
@endsection