<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class SettingController extends Controller
{
    public function index(Request $request)
    {
        $user = $request->user();
        $permissionLevel = $user && $user->is_admin ? 'admin' : 'user';
        
        $settings = Setting::where('permission_level', '<=', $permissionLevel)
            ->get()
            ->groupBy('module');
        
        return response()->json($settings);
    }

    public function update(Request $request, $name)
    {
        $setting = Setting::where('name', $name)->firstOrFail();
        
        if ($setting->permission_level === 'admin') {
            if (!$request->user() || !$request->user()->is_admin) {
                return response()->json(['error' => 'Требуются права администратора'], 403);
            }
        }

        $request->validate([
            'value' => 'required'
        ]);

        $setting->update(['value' => $request->value]);

        return response()->json($setting);
    }

    public function byModule($module)
    {
        $settings = Setting::where('module', $module)->get();
        return response()->json($settings);
    }
}