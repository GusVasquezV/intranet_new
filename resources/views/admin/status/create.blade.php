@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Estado de devoluciones</div>

                <div class="card-body">
                    {!! Form::open(['route' => 'status.store']) !!}

						@include('admin.status.partials.form')


                    {!! Form::close() !!}

                </div>
            </div>
        </div>
    </div>
</div>
@endsection