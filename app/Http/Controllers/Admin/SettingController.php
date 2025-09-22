<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function index()
    {
        $settings = Setting::all()->groupBy('module');
        return response()->json($settings);
    }

    public function show(Setting $setting)
    {
        return response()->json($setting);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|unique:settings,name',
            'value' => 'required',
            'module' => 'required',
            'title' => 'required',
            'permission_level' => 'required|in:user,admin'
        ]);

        $setting = Setting::create($validated);
        return response()->json($setting, 201);
    }

    public function update(Request $request, Setting $setting)
    {
        $validated = $request->validate([
            'value' => 'required'
        ]);

        $setting->update($validated);
        return response()->json($setting);
    }

    public function destroy(Setting $setting)
    {
        $setting->delete();
        return response()->json(null, 204);
    }
}