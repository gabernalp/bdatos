<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\ReportesOajm;
use Gate;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyReportesOajmRequest extends FormRequest  {





public function authorize()
{
    abort_if(Gate::denies('reportes_oajm_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');




return true;
    
}
public function rules()
{
    



return [
'ids' => 'required|array',
    'ids.*' => 'exists:reportes_oajms,id',
]
    
}

}