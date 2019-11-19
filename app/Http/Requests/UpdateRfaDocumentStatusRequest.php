<?php

namespace App\Http\Requests;

use App\RfaDocumentStatus;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class UpdateRfaDocumentStatusRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('rfa_document_status_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
        ];
    }
}
