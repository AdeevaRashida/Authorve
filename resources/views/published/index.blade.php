@extends('app')
  
@section('content')
    <div class="row" style="margin-top: 10%">
        <div class="col-lg-12 margin-tb">
            <div style="margin-bottom:10px; display:flex; justify-content:center;">
            <a class="button" href="{{ route('create') }}" style="width: 200px; height: 50px;"> Add A New Book</a>
            </div>
        </div>
    </div>
     
    @if ($message = Session::get('success'))
        <div class="alert alert-success" style="color: #1B1B1B">
            <p>{{ $message }}</p>
        </div>
    @endif
 
    <table class="table table-bordered" style="color:white; margin-top:2%">
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
                <form action="{{ route('destroy',$item->id) }}" method="POST" style="display: flex; justify-content:center">
                    {{-- <a class="btn btn-info" href="{{ route('show',$published->id) }}">Details</a> --}}
                    <a class="button"  style="width: 100px; height: 40px; margin-right:10px; 
                    filter: drop-shadow(0px 4px 20px rgba(255, 255, 255, 0)); border-radius:4px;" 
                    href="{{ route('edit',$item->id) }}">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" style="width: 100px; height: 40px; filter: drop-shadow(0px 4px 20px rgba(255, 255, 255, 0));"
                    >Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
 
@endsection