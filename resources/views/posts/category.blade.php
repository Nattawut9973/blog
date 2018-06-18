@extends('app')
@section('title')
    @section('content')
    <table class="table">
        <thead>
        <tr>
            <th scope="col">name</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
        {{--DATA TABLE--}}
        @foreach($categories as $value)
            <tr>
                <td>{{$value->name}}</td>

                <td>
                    <button type="button" class="btn btn-primary">edit</button>
                    {{--<button type="button" class="btn btn-secondary">delete</button>--}}
                </td>
            </tr>
        @endforeach
        {{--END DATA TABLE--}}
        </tbody>
    </table>
    @endsection
@endsection

