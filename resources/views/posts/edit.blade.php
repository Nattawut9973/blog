@extends('app')
@section('title','edit')
@include('partial.alert_success')

<form method="post" action="{{route('posts.store')}}">
    @csrf
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Title</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="inputEmail3" name="title" >
        </div>
    </div>
        <div class="form-group row">
        <label for="inputPassword3" class="col-sm-2 col-form-label">Body</label>
        <div class="col-sm-10">
            <select class="form-control" name="category_id">
                @foreach($categories as $category)
                    <option value="{{ $category->id }}"> {{ $category->name }} </option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="form-group row">
        <label for="inputPassword3" class="col-sm-2 col-form-label">Body</label>
        <div class="col-sm-10">
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="body"></textarea>
        </div>
    </div>
    <div class="form-group row">
        <div class="col-sm-10">
            <button type="submit" class="btn btn-primary">create</button>
        </div>
    </div>
</form>

@endsection