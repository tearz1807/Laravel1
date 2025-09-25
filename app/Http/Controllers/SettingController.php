<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;
use App\Http\Requests\UpdateSettingRequest;

class SettingController extends Controller
{
    public function index(Request $request)
    {
        $permissionLevel = $request->user()?->is_admin ? 'admin' : 'user';
        $settings = Setting::where('permission_level', '<=', $permissionLevel)
            ->get()
            ->groupBy('module');
        
        return response()->json($settings);
    }

    public function update(UpdateSettingRequest $request, $name)
    {
        $setting = Setting::where('name', $name)->firstOrFail();
        $setting->update($request->validated());
        return response()->json($setting);
    }

    public function byModule($module)
    {
        return response()->json(Setting::where('module', $module)->get());
    }
}