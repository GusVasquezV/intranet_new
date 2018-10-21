@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Editar Tipo de Proveedor</div>

                <div class="card-body">
                    
                    {!! Form::model($typeprovider, ['route' => ['typeproviders.update', $typeprovider->id], 'method' => 'PUT']) !!}

						@include('admin.typeproviders.partials.form')


                    {!! Form::close() !!}

                </div>
            </div>
        </div>
    </div>
</div>
@endsection