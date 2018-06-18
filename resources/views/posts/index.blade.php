
@extends('app')
@section('content')
    <br>
    {{--BUTTON ADD--}}
    <a class="btn btn-outline-primary" href="{{route('posts.create')}}">Add</a>
    {{--END BUTTON--}}


    {{--TABLE--}}
    <table class="table">
        <thead>
        <tr>
            <th scope="col">title</th>
            <th scope="col">body</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
        {{--DATA TABLE--}}
        @foreach($posts as $value)
            <tr>
                <td>{{$value->title}}</td>
                <td>{{$value->body}}</td>
                <td>
                    {{--<a href="{{route('posts.edit',[$value])}}" class="btn btn-primary">edit</a>--}}
                    {{--<a href="{{route('post.delete')}}" class="btn btn-dark">delete </a>--}}
                </td>
            </tr>
        @endforeach
        {{--END DATA TABLE--}}
        </tbody>
    </table>
    {{--END TABLE--}}

    @endsection