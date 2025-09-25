<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\Setting;

class UpdateSettingRequest extends FormRequest
{
    public function authorize()
    {
        $setting = $this->getSetting();
        
        if ($setting->permission_level === 'admin') {
            return $this->user() && $this->user()->is_admin;
        }
        
        return true;
    }

    public function rules()
    {
        return [
            'value' => 'required'
        ];
    }

    protected function getSetting()
    {
        return Setting::where('name', $this->route('name'))->firstOrFail();
    }
}