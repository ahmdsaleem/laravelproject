@extends('layout')



@section('content')
<div class="row">
    <div class="col-md-10">
        <h2 class="text-center"> Your personal Todos </h2>
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
                    </td>
                </tr>
        @endforeach
    </div>
</div>
    @endsection