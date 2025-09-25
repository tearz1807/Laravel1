<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreSettingRequest extends FormRequest
{
    public function authorize()
    {
        return $this->user() && $this->user()->is_admin;
    }

    public function rules()
    {
        return [
            'name' => 'required|unique:settings,name',
            'value' => 'required',
            'module' => 'required',
            'title' => 'required',
            'permission_level' => 'required|in:user,admin'
        ];
    }
}