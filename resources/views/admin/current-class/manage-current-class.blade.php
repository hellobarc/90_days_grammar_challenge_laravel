@extends('layouts.app')
  
@section('content')
@include('admin.sidebar')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card p-4">
                <div class="d-flex justify-content-end">
                    <a href="{{route('admin.create-current-class')}}" class="btn btn-success btn-sm">+ Add New</a>
                </div>
                <table class="table table-bordered table-striped mt-3">
                    <thead>
                        <th>Sl No</th>
                        <th>Title</th>
                        <th>Embed Video</th>
                        <th>Action</th>
                    </thead>
                    <tbody>
                        @foreach ($data as $rows)
                            <tr>
                                <td>{{$loop->index+1}}</td>
                                <td>{{$rows->title}}</td>
                                <td><iframe src="{{$rows->embed_link}}" width="500" height="60" frameborder="0"></iframe></td>
                                <td>{{$rows->class_number}}</td>
                                <td>
                                    <a href="{{route('admin.edit-current-class', $rows->id)}}" class="btn btn-success btn-sm">Edit</a>
                                    <a href="{{route('admin.delete-current-class', $rows->id)}}" class="btn btn-danger btn-sm">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection