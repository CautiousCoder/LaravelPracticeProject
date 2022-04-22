<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    //
    public function create(){
        $setting = Setting::first();
        return view('admin.setting.create',compact('setting'));
    }
    public function store(Request $request){
        $this->validate($request,[
            'logo' => 'image',
        ]);
        $setting = new Setting();
        $setting->name = $request->name;
        $setting->description = $request->description;
        $setting->email = $request->email;
        $setting->facebook = $request->facebook;
        $setting->twitter = $request->twitter;
        $setting->linkedin = $request->linkedin;
        $setting->instagram = $request->instagram;
        $setting->telegram = $request->telegram;
        $setting->whatsapp = $request->whatsapp;
        $setting->copyright = $request->copyright;

        if($request->hasFile('logo')){
            $file = $request->file('logo');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('user/logo/',$filename);
            $setting->logo = 'user/logo/'.$filename;
        }

        return redirect()->back();
    }
    public function edit(Setting $setting,){
        //$data = Setting::find($id);
        $setting = Setting::first();
        return view('admin.setting.edit', compact('setting'));
    }
    public function update(Request $request,Setting $setting){


        $setting->name = $request->name;
        $setting->description = $request->description;
        $setting->email = $request->email;
        $setting->facebook = $request->facebook;
        $setting->twitter = $request->twitter;
        $setting->linkedin = $request->linkedin;
        $setting->instagram = $request->instagram;
        $setting->telegram = $request->telegram;
        $setting->whatsapp = $request->whatsapp;
        $setting->copyright = $request->copyright;

        if($request->hasFile('logo')){
            $file = $request->file('logo');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('user/logo/',$filename);
            $setting->logo = 'user/logo/'.$filename;
        }

        $setting->save();

        return redirect()->back();

    }
}

