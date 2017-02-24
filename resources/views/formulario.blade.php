@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Formulario</div>

                <div class="panel-body">
                   <form class="form-horizontal" role="form" method="POST" action="{{ url('guardar') }}">
                    {{ csrf_field() }}
                    <input type="text" name="nombre" placeholder="nombre">
                    <input type="text" name="cedula" placeholder="cedula">
                    <hr>
					<button type="submit" class="btn btn-success">Guardar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
