@extends('app')
  
@section('content')
    <div class="row">
        <h2 style="margin-top: 10%; font-weight:400; font-size: 45px;">Edit Fabricated Story</h2>
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
    
    <section class="secform" style="margin-top: 0;">
        <form action="{{ route('fupdate', $fabricate->id) }}" method="POST" enctype="multipart/form-data" class="form" style="color: white">
            @csrf
            @method('PUT')
          
             <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Story Title:</strong>
                        <input type="text" name="Title" value="{{ $fabricate->Title }}" class="form-control" placeholder="Book Title">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Author:</strong>
                        <input type="text" name="Author" value="{{ $fabricate->Author }}" class="form-control" placeholder="Book Author">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Author Notes:</strong>
                        <textarea class="form-control" style="height:150px" name="AN" placeholder="Detail">{{ $fabricate->AN }}</textarea>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Summary:</strong>
                        <textarea class="form-control" style="height:150px" name="Summary" placeholder="Detail">{{ $fabricate->Summary }}</textarea>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Story Update:</strong>
                        <textarea class="form-control" style="height:150px" name="Content" placeholder="Detail">{{ $fabricate->Content }}</textarea>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Genre:</strong>
                        <input type="text" name="Genre" value="{{ $fabricate->Genre }}" class="form-control" placeholder="Book Genre">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Cover:</strong>
                        <input type="file" name="Cover" class="form-control" placeholder="image" value="{{ $fabricate->Cover }}">
                        <img src="/images/{{ $fabricate->Cover }}" width="300px">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                  <button type="submit" style="width: 150px; border-radius: 8px; margin-top: 2%; height: 50px; ">Update</button>
                </div>
            </div>
          
        </form>
    </section>
@endsection