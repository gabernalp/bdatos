@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.sedBiblioUsuario.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.sed-biblio-usuarios.update", [$sedBiblioUsuario->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label for="sede_biblioteca">{{ trans('cruds.sedBiblioUsuario.fields.sede_biblioteca') }}</label>
                <input class="form-control {{ $errors->has('sede_biblioteca') ? 'is-invalid' : '' }}" type="text" name="sede_biblioteca" id="sede_biblioteca" value="{{ old('sede_biblioteca', $sedBiblioUsuario->sede_biblioteca) }}">
                @if($errors->has('sede_biblioteca'))
                    <span class="text-danger">{{ $errors->first('sede_biblioteca') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.sedBiblioUsuario.fields.sede_biblioteca_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="motivo_visita">{{ trans('cruds.sedBiblioUsuario.fields.motivo_visita') }}</label>
                <input class="form-control {{ $errors->has('motivo_visita') ? 'is-invalid' : '' }}" type="text" name="motivo_visita" id="motivo_visita" value="{{ old('motivo_visita', $sedBiblioUsuario->motivo_visita) }}">
                @if($errors->has('motivo_visita'))
                    <span class="text-danger">{{ $errors->first('motivo_visita') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.sedBiblioUsuario.fields.motivo_visita_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="grupo_etario">{{ trans('cruds.sedBiblioUsuario.fields.grupo_etario') }}</label>
                <input class="form-control {{ $errors->has('grupo_etario') ? 'is-invalid' : '' }}" type="text" name="grupo_etario" id="grupo_etario" value="{{ old('grupo_etario', $sedBiblioUsuario->grupo_etario) }}">
                @if($errors->has('grupo_etario'))
                    <span class="text-danger">{{ $errors->first('grupo_etario') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.sedBiblioUsuario.fields.grupo_etario_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="genero">{{ trans('cruds.sedBiblioUsuario.fields.genero') }}</label>
                <input class="form-control {{ $errors->has('genero') ? 'is-invalid' : '' }}" type="text" name="genero" id="genero" value="{{ old('genero', $sedBiblioUsuario->genero) }}">
                @if($errors->has('genero'))
                    <span class="text-danger">{{ $errors->first('genero') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.sedBiblioUsuario.fields.genero_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="tipo_poblacion">{{ trans('cruds.sedBiblioUsuario.fields.tipo_poblacion') }}</label>
                <input class="form-control {{ $errors->has('tipo_poblacion') ? 'is-invalid' : '' }}" type="text" name="tipo_poblacion" id="tipo_poblacion" value="{{ old('tipo_poblacion', $sedBiblioUsuario->tipo_poblacion) }}">
                @if($errors->has('tipo_poblacion'))
                    <span class="text-danger">{{ $errors->first('tipo_poblacion') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.sedBiblioUsuario.fields.tipo_poblacion_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="fecha_visita">{{ trans('cruds.sedBiblioUsuario.fields.fecha_visita') }}</label>
                <input class="form-control date {{ $errors->has('fecha_visita') ? 'is-invalid' : '' }}" type="text" name="fecha_visita" id="fecha_visita" value="{{ old('fecha_visita', $sedBiblioUsuario->fecha_visita) }}">
                @if($errors->has('fecha_visita'))
                    <span class="text-danger">{{ $errors->first('fecha_visita') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.sedBiblioUsuario.fields.fecha_visita_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="cantidad_asistentes">{{ trans('cruds.sedBiblioUsuario.fields.cantidad_asistentes') }}</label>
                <input class="form-control {{ $errors->has('cantidad_asistentes') ? 'is-invalid' : '' }}" type="number" name="cantidad_asistentes" id="cantidad_asistentes" value="{{ old('cantidad_asistentes', $sedBiblioUsuario->cantidad_asistentes) }}" step="1">
                @if($errors->has('cantidad_asistentes'))
                    <span class="text-danger">{{ $errors->first('cantidad_asistentes') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.sedBiblioUsuario.fields.cantidad_asistentes_helper') }}</span>
            </div>
            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    {{ trans('global.save') }}
                </button>
            </div>
        </form>
    </div>
</div>



@endsection