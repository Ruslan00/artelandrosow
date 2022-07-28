<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Settings;

class GreetingController extends Controller
{
    public function index()
    {
        $settigs = Settings::first();
        $greetingCheck = $settigs->greeting_check;
        $greetingTitle = $settigs->greeting_title;
        $greetingText = $settigs->greeting_text;
        
        return view('admin.greeting', [
            'greetingCheck' => $greetingCheck,
            'greetingTitle' => $greetingTitle,
            'greetingText' => $greetingText
        ]);
    }
    
    public function save(Request $request)
    {
     	$settigs = Settings::first();
     	if (isset($request->greetingCheck) && $request->greetingCheck == 'on') {
     	    $settigs->greeting_check = 1;
     	} else {
     	    $settigs->greeting_check = 0;
     	} 
        $settigs->greeting_title = $request->greetingTitle;
        $settigs->greeting_text = $request->greetingText;
        $settigs->save();
        
        return redirect()->back()->with('success', 'Ok');
    }   
}
