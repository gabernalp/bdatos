@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.municipio.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.municipios.update", [$municipio->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label class="required" for="name">{{ trans('cruds.municipio.fields.name') }}</label>
                <input class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name" id="name" value="{{ old('name', $municipio->name) }}" required>
                @if($errors->has('name'))
                    <span class="text-danger">{{ $errors->first('name') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.municipio.fields.name_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="code">{{ trans('cruds.municipio.fields.code') }}</label>
                <input class="form-control {{ $errors->has('code') ? 'is-invalid' : '' }}" type="text" name="code" id="code" value="{{ old('code', $municipio->code) }}" required>
                @if($errors->has('code'))
                    <span class="text-danger">{{ $errors->first('code') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.municipio.fields.code_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="departamento_id">{{ trans('cruds.municipio.fields.departamento') }}</label>
                <select class="form-control select2 {{ $errors->has('departamento') ? 'is-invalid' : '' }}" name="departamento_id" id="departamento_id" required>
                    @foreach($departamentos as $id => $entry)
                        <option value="{{ $id }}" {{ (old('departamento_id') ? old('departamento_id') : $municipio->departamento->id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('departamento'))
                    <span class="text-danger">{{ $errors->first('departamento') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.municipio.fields.departamento_helper') }}</span>
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