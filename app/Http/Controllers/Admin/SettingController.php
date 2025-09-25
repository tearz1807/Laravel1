<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;
use App\Http\Requests\StoreSettingRequest;

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

    public function store(StoreSettingRequest $request)
    {
        $setting = Setting::create($request->validated());
        return response()->json($setting, 201);
    }

    public function update(Request $request, Setting $setting)
    {
        $setting->update($request->validate(['value' => 'required']));
        return response()->json($setting);
    }

    public function destroy(Setting $setting)
    {
        $setting->delete();
        return response()->json(null, 204);
    }
}