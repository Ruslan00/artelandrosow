<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Settings;

class BackgroundController extends Controller
{
    public function index()
    {
    	$settigs = Settings::first();
        $background = $settigs->background;
        
        return view('admin.background', [
            'background' => $background
        ]);
    }
    
    public function save(Request $request)
    {
    	if ($request->hasFile('img')) {
    	    $file = $request->file('img');
            $extention = $file->getClientOriginalExtension();
    	    $filename = time().md5($file->getClientOriginalName()).'.'.$extention;

            //Сохраняем оригинальную картинку
            $file->move('images/background/', $filename);
            
            $settigs = Settings::first();
            $settigs->background = $filename;
            $settigs->save();
    	}
    	
    	return redirect()->back()->with('success', 'Ok');
    }
}
