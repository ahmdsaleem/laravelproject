@extends('layout')



@section('content')
<div class="row">
    <div class="col-md-10">
        <h2 class="text-center"> Your personal Todos </h2>

        <form action="/create/new" method="post">
            {{csrf_field()}}
            <div class="form-control">
                <input class="form-control form-control-lg" type="text" placeholder="Enter the Todo here" name="todo" />
            </div>
        </form>
    </div>
</div>
<hr/>
<div class="row">
    <div class="col-md-10">
        <table class="table-bordered table-striped">
            <tr>
                <td class="text-center">Todos</td>
            </tr>
            @foreach($todos as $todo)
                <tr>
                    <td class="text-center">
                        {{ $todo->todo  }}
                        <a class="btn-sm btn-danger" href="{{ route('todo.delete',['id'=> $todo->id]) }}"> X </a>
                    </td>
                </tr>
        @endforeach
    </div>
</div>
    @endsection