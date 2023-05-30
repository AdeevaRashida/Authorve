@extends('app')
   
@section('content')
<div class="row">
    <h2 style="margin-top: 10%; font-weight:400; font-size: 45px">Fabricate A New Story</h2>
</div>
      
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<section class="secform" style="margin-top: 0%;">
    <form action="{{ route('fstore') }}" method="POST" enctype="multipart/form-data" class="form">
        @csrf
         
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <input type="text" name="Title" class="form-control" placeholder="Story Title">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <input type="text" name="Author" class="form-control" placeholder="Author">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <textarea class="form-control" style="height:150px" name="AN" placeholder="Author Notes"></textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <textarea class="form-control" style="height:150px" name="Summary" placeholder="Summary"></textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <textarea class="form-control" style="height:150px" name="Content" placeholder="Write your story here!"></textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <input type="text" name="Genre" class="form-control" placeholder="Genre">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <input type="file" name="Cover" class="form-control" placeholder="Cover">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <button type="submit" style="width: 150px; border-radius: 8px; margin-top: 2%; height: 50px; ">Fabricate</button>
            </div>
        </div>
          
    </form>
</section>
@endsection