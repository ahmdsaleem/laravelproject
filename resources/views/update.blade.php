@extends('layout')



@section('content')
    <div class="row">
        <div class="col-md-10">
            <h2 class="text-center"> Update Your Todo </h2>

            <form action="{{route('todo.save', ['id' => $todo->id]) }}" method="post">
                {{csrf_field()}}
                <div class="form-control">
                    <input class="form-control form-control-lg" type="text" value="{{ $todo->todo }}" name="todo" />
                </div>
            </form>
        </div>
    </div>
    <hr/>

@endsection