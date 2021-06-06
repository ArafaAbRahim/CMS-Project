@extends('admin.layout')
@section('content')

    <h1>Show Details</h1>
    <div class="navbar-right">
        <a href="{{route('post-add')}}" class="btn btn-primary">Add New</a>
    </div>
    
    <table class="table table-bordered">
        <thead>
            <th>Page</th>
            <th>Section Title</th>
            <th>Post Title</th>
            <th>Image</th>
            <th>Action</th>
        </thead>
        <tbody>
            @foreach($posts as $post)
                <tr>
                    <td>{{$post->page_title}}</td>
                    <td>{{$post->section_title}}</td>
                    <td>{{$post->title}}</td>
                    <td><img src="uploads/{{$post->image}}" style="height: 50px; width: 50px;"></td>
                    <td>
                        <a href="" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></a>
                        <a href="" class="btn btn-primary btn-xs"><i class="fa fa-trash"></i></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <h2>{{ $posts->links() }}</h2>

@endsection

@push('footer-scripts') 
    
@endpush