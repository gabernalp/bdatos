@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.sedCobertura.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.sed-coberturas.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="required" for="poblacion">{{ trans('cruds.sedCobertura.fields.poblacion') }}</label>
                <input class="form-control {{ $errors->has('poblacion') ? 'is-invalid' : '' }}" type="number" name="poblacion" id="poblacion" value="{{ old('poblacion', '') }}" step="1" required>
                @if($errors->has('poblacion'))
                    <span class="text-danger">{{ $errors->first('poblacion') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.sedCobertura.fields.poblacion_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="poblacion_edad_escolar">{{ trans('cruds.sedCobertura.fields.poblacion_edad_escolar') }}</label>
                <input class="form-control {{ $errors->has('poblacion_edad_escolar') ? 'is-invalid' : '' }}" type="number" name="poblacion_edad_escolar" id="poblacion_edad_escolar" value="{{ old('poblacion_edad_escolar', '') }}" step="1" required>
                @if($errors->has('poblacion_edad_escolar'))
                    <span class="text-danger">{{ $errors->first('poblacion_edad_escolar') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.sedCobertura.fields.poblacion_edad_escolar_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="matricula">{{ trans('cruds.sedCobertura.fields.matricula') }}</label>
                <input class="form-control {{ $errors->has('matricula') ? 'is-invalid' : '' }}" type="number" name="matricula" id="matricula" value="{{ old('matricula', '') }}" step="1" required>
                @if($errors->has('matricula'))
                    <span class="text-danger">{{ $errors->first('matricula') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.sedCobertura.fields.matricula_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="cobertura_bruta">{{ trans('cruds.sedCobertura.fields.cobertura_bruta') }}</label>
                <input class="form-control {{ $errors->has('cobertura_bruta') ? 'is-invalid' : '' }}" type="number" name="cobertura_bruta" id="cobertura_bruta" value="{{ old('cobertura_bruta', '') }}" step="0.01" required>
                @if($errors->has('cobertura_bruta'))
                    <span class="text-danger">{{ $errors->first('cobertura_bruta') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.sedCobertura.fields.cobertura_bruta_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="cobertura_neta">{{ trans('cruds.sedCobertura.fields.cobertura_neta') }}</label>
                <input class="form-control {{ $errors->has('cobertura_neta') ? 'is-invalid' : '' }}" type="text" name="cobertura_neta" id="cobertura_neta" value="{{ old('cobertura_neta', '') }}" required>
                @if($errors->has('cobertura_neta'))
                    <span class="text-danger">{{ $errors->first('cobertura_neta') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.sedCobertura.fields.cobertura_neta_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="fecha_corte">{{ trans('cruds.sedCobertura.fields.fecha_corte') }}</label>
                <input class="form-control date {{ $errors->has('fecha_corte') ? 'is-invalid' : '' }}" type="text" name="fecha_corte" id="fecha_corte" value="{{ old('fecha_corte') }}">
                @if($errors->has('fecha_corte'))
                    <span class="text-danger">{{ $errors->first('fecha_corte') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.sedCobertura.fields.fecha_corte_helper') }}</span>
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