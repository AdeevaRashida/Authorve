@extends('app')
  
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Authorve</h2>
            </div>
            <div class="pull-right" style="margin-bottom:10px;">
            <a class="btn btn-success" href="{{ url('create') }}"> Add A New Book</a>
            </div>
        </div>
    </div>
     
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
 
    <table class="table table-bordered">
        <tr>
            <th>No.</th>
            <th>Cover</th>
            <th>Title</th>
            <th>Author</th>
            <th>Summary</th>
            <th>Genre</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($published as $item)
        <tr>
            <td>{{ ++$i }}</td>
            <td><img src="/images/{{ $item->Cover }}" width="100px"></td>
            <td>{{ $item->Title }}</td>
            <td>{{ $item->Author }}</td>
            <td>{{ $item->Summary }}</td>
            <td>{{ $item->Genre }}</td>
            <td>
                <form action="{{ route('destroy',$item->id) }}" method="POST">
                    {{-- <a class="btn btn-info" href="{{ route('show',$published->id) }}">Details</a> --}}
                    <a class="btn btn-primary" href="{{ route('edit',$item->id) }}">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
 
@endsection