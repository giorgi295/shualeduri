@extends('layouts.layout')
@section('content')

    <div class="box box-primary">
        <div class="cox-header with-border">
            <h3 class="box-title">EDIT</h3>
        </div>
        <form method="post" enctype="multipart/form-data" action="{{route('edit', $post->id)}}">
            @method('PUT')
            <div class="box-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input type="text" class="form-control" placeholder="Name" name="Name" value="{{old('title', $post->Name)}}">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Surname</label>
                    <input type="text" class="form-control" placeholder="surname" name="surname" value="{{old('text', $post->surname)}}">
                </div>
            </div>
            <input type="hidden" name="_token" id="csrf_token" value="{{csrf_token()}}">
            <div class="box-footer">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </form>
    </div>

@endsection
