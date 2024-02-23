@extends('layouts.app')
  
@section('content')
<div class="container">
    <div class="row">
        @foreach ($data as $rows)
            <div class="col-md-3">
                <div class="card">
                    <div class="card-header">Class {{$rows->class_number}} E-book link</div>
                    <div class="card-body">
                        <a href="{{$rows->ebook_link}}" class="text-decoration-none">Download Here</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection