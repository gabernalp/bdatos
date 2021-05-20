@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.sedRepitencium.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.sed-repitencia.update", [$sedRepitencium->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label class="required" for="poblacion">{{ trans('cruds.sedRepitencium.fields.poblacion') }}</label>
                <input class="form-control {{ $errors->has('poblacion') ? 'is-invalid' : '' }}" type="number" name="poblacion" id="poblacion" value="{{ old('poblacion', $sedRepitencium->poblacion) }}" step="1" required>
                @if($errors->has('poblacion'))
                    <span class="text-danger">{{ $errors->first('poblacion') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.sedRepitencium.fields.poblacion_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="matricula">{{ trans('cruds.sedRepitencium.fields.matricula') }}</label>
                <input class="form-control {{ $errors->has('matricula') ? 'is-invalid' : '' }}" type="number" name="matricula" id="matricula" value="{{ old('matricula', $sedRepitencium->matricula) }}" step="1" required>
                @if($errors->has('matricula'))
                    <span class="text-danger">{{ $errors->first('matricula') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.sedRepitencium.fields.matricula_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="repitencia">{{ trans('cruds.sedRepitencium.fields.repitencia') }}</label>
                <input class="form-control {{ $errors->has('repitencia') ? 'is-invalid' : '' }}" type="number" name="repitencia" id="repitencia" value="{{ old('repitencia', $sedRepitencium->repitencia) }}" step="0.01" required>
                @if($errors->has('repitencia'))
                    <span class="text-danger">{{ $errors->first('repitencia') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.sedRepitencium.fields.repitencia_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="fecha_corte">{{ trans('cruds.sedRepitencium.fields.fecha_corte') }}</label>
                <input class="form-control date {{ $errors->has('fecha_corte') ? 'is-invalid' : '' }}" type="text" name="fecha_corte" id="fecha_corte" value="{{ old('fecha_corte', $sedRepitencium->fecha_corte) }}" required>
                @if($errors->has('fecha_corte'))
                    <span class="text-danger">{{ $errors->first('fecha_corte') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.sedRepitencium.fields.fecha_corte_helper') }}</span>
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