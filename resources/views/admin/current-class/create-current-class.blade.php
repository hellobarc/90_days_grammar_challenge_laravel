@extends('layouts.app')
  
@section('content')
@include('admin.sidebar')
<div class="container">
    <div class="row">
        <div class="col-md-8 mx-auto">
            <div class="card p-4">
                <form action="{{route('admin.store-current-class')}}" method="POST">
                    @csrf
                    <div class="form-group mb-3">
                        <label for="">Title <span class="text-danger fw-bold">*</span></label>
                        <input type="text" name="title" class="form-control" id="title" placeholder="Enter class title" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="">Class Embed Video Link <span class="text-danger fw-bold">*</span></label>
                        <input type="text" name="link" class="form-control" id="link" placeholder="Enter link title" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="">Class Number <span class="text-danger fw-bold">*</span></label>
                        <input type="text" name="class_number" class="form-control" id="class_number" placeholder="Enter class number" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="">Class Descritption</label>
                        <textarea name="class_description" class="form-control" id="" cols="30" rows="5"></textarea>
                    </div>
                    <button class="btn btn-success">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection