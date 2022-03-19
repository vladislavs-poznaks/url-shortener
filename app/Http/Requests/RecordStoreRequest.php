<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RecordStoreRequest extends FormRequest
{
    public function rules()
    {
        return [
            'url' => 'required|url|min:5|max:500'
        ];
    }
}
