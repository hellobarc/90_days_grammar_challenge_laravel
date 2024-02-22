@extends('layouts.app')
  
@section('content')
@include('admin.sidebar')
<div class="container">
    <div class="row">
        <div class="col-md-8 mx-auto">
            <div class="card p-4">
                <h4 class="text-center">Edit Data</h4>
                <form action="{{route('admin.update-current-class', $getData->id)}}" method="POST">
                    @csrf
                    <div class="form-group mb-3">
                        <label for="">Title <span class="text-danger fw-bold">*</span></label>
                        <input type="text" name="title" class="form-control" id="title" placeholder="Enter class title" value="{{$getData->title}}" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="">Class Embed Video Link <span class="text-danger fw-bold">*</span></label>
                        <input type="text" name="link" class="form-control" id="link" placeholder="Enter link title" value="{{$getData->embed_link}}" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="">Class Number <span class="text-danger fw-bold">*</span></label>
                        <input type="text" name="class_number" class="form-control" id="class_number" value="{{$getData->class_number}}"  placeholder="Enter class number" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="">Class E-book link <span class="text-danger fw-bold">*</span></label>
                        <input type="text" name="ebook_link" class="form-control" id="ebook_link" value="{{$getData->ebook_link}}" placeholder="Enter e-book link" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="">Class Test Line <span class="text-danger fw-bold">*</span></label>
                        <input type="text" name="test_link" class="form-control" id="test_link" value="{{$getData->test_link}}" placeholder="Enter test link" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="">Class Descritption</label>
                        <textarea name="class_description" class="form-control" id="" cols="30" rows="5">{{$getData->class_description}}</textarea>
                    </div>
                    <button class="btn btn-success">Update</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection