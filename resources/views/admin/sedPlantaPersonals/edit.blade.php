@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.sedPlantaPersonal.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.sed-planta-personals.update", [$sedPlantaPersonal->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label class="required" for="establecimiento_datos">{{ trans('cruds.sedPlantaPersonal.fields.establecimiento_datos') }}</label>
                <input class="form-control {{ $errors->has('establecimiento_datos') ? 'is-invalid' : '' }}" type="text" name="establecimiento_datos" id="establecimiento_datos" value="{{ old('establecimiento_datos', $sedPlantaPersonal->establecimiento_datos) }}" required>
                @if($errors->has('establecimiento_datos'))
                    <span class="text-danger">{{ $errors->first('establecimiento_datos') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.sedPlantaPersonal.fields.establecimiento_datos_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="dane">{{ trans('cruds.sedPlantaPersonal.fields.dane') }}</label>
                <input class="form-control {{ $errors->has('dane') ? 'is-invalid' : '' }}" type="text" name="dane" id="dane" value="{{ old('dane', $sedPlantaPersonal->dane) }}" required>
                @if($errors->has('dane'))
                    <span class="text-danger">{{ $errors->first('dane') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.sedPlantaPersonal.fields.dane_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="comuna_id">{{ trans('cruds.sedPlantaPersonal.fields.comuna') }}</label>
                <select class="form-control select2 {{ $errors->has('comuna') ? 'is-invalid' : '' }}" name="comuna_id" id="comuna_id" required>
                    @foreach($comunas as $id => $entry)
                        <option value="{{ $id }}" {{ (old('comuna_id') ? old('comuna_id') : $sedPlantaPersonal->comuna->id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('comuna'))
                    <span class="text-danger">{{ $errors->first('comuna') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.sedPlantaPersonal.fields.comuna_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="area_formacion">{{ trans('cruds.sedPlantaPersonal.fields.area_formacion') }}</label>
                <input class="form-control {{ $errors->has('area_formacion') ? 'is-invalid' : '' }}" type="text" name="area_formacion" id="area_formacion" value="{{ old('area_formacion', $sedPlantaPersonal->area_formacion) }}" required>
                @if($errors->has('area_formacion'))
                    <span class="text-danger">{{ $errors->first('area_formacion') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.sedPlantaPersonal.fields.area_formacion_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="nivel_educativo">{{ trans('cruds.sedPlantaPersonal.fields.nivel_educativo') }}</label>
                <input class="form-control {{ $errors->has('nivel_educativo') ? 'is-invalid' : '' }}" type="text" name="nivel_educativo" id="nivel_educativo" value="{{ old('nivel_educativo', $sedPlantaPersonal->nivel_educativo) }}" required>
                @if($errors->has('nivel_educativo'))
                    <span class="text-danger">{{ $errors->first('nivel_educativo') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.sedPlantaPersonal.fields.nivel_educativo_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="area_dicta">{{ trans('cruds.sedPlantaPersonal.fields.area_dicta') }}</label>
                <input class="form-control {{ $errors->has('area_dicta') ? 'is-invalid' : '' }}" type="text" name="area_dicta" id="area_dicta" value="{{ old('area_dicta', $sedPlantaPersonal->area_dicta) }}" required>
                @if($errors->has('area_dicta'))
                    <span class="text-danger">{{ $errors->first('area_dicta') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.sedPlantaPersonal.fields.area_dicta_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="vigencia">{{ trans('cruds.sedPlantaPersonal.fields.vigencia') }}</label>
                <input class="form-control {{ $errors->has('vigencia') ? 'is-invalid' : '' }}" type="number" name="vigencia" id="vigencia" value="{{ old('vigencia', $sedPlantaPersonal->vigencia) }}" step="1" required>
                @if($errors->has('vigencia'))
                    <span class="text-danger">{{ $errors->first('vigencia') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.sedPlantaPersonal.fields.vigencia_helper') }}</span>
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