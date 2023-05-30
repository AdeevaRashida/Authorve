@extends('app')
  
@section('content')
    <div class="row">
        <h2 style="margin-top: 10%; font-weight:400; font-size: 45px;">Edit Book Details</h2>
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
        <form action="{{ route('update', $published->id) }}" method="POST" enctype="multipart/form-data" class="form" style="color: white">
            @csrf
            @method('PUT')
          
             <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Book Title:</strong>
                        <input type="text" name="Title" value="{{ $published->Title }}" class="form-control" placeholder="Book Title">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Book Author:</strong>
                        <input type="text" name="Author" value="{{ $published->Author }}" class="form-control" placeholder="Book Author">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Book Summary:</strong>
                        <textarea class="form-control" style="height:150px" name="Summary" placeholder="Detail">{{ $published->Summary }}</textarea>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Book Genre:</strong>
                        <input type="text" name="Genre" value="{{ $published->Genre }}" class="form-control" placeholder="Book Genre">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Book Cover:</strong>
                        <input type="file" name="Cover" class="form-control" placeholder="image" value="{{ $published->Cover }}">
                        <img src="/images/{{ $published->Cover }}" width="300px">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                  <button type="submit" style="width: 150px; border-radius: 8px; margin-top: 2%; height: 50px; ">Update</button>
                </div>
            </div>
          
        </form>
    </section>
@endsection