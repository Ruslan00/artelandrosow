<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Settings;

class ButtonController extends Controller
{
    public function index()
    {
    	$settigs = Settings::first();
        $buttonColor = $settigs->button_color;
        $buttonTextColor = $settigs->button_text_color;
        $buttonText = $settigs->button_text;
        $buttonWidth = $settigs->button_width;
        $buttonHeight = $settigs->button_height;
        $buttonRadius = $settigs->button_radius;
        $fontWidth = $settigs->font_width;
        $fontSize = $settigs->font_size;
    
    	return view('admin.button', [
    	    'buttonColor' => $buttonColor,
    	    'buttonTextColor' => $buttonTextColor,
    	    'buttonText' => $buttonText,
    	    'buttonWidth' => $buttonWidth,
    	    'buttonHeight' => $buttonHeight,
    	    'buttonRadius' => $buttonRadius,
    	    'fontWidth' => $fontWidth,
    	    'fontSize' => $fontSize
    	]);
    }
    
    public function save(Request $request)
    {
    	$settigs = Settings::first();
        $settigs->button_color = $request->buttonColor;
        $settigs->button_text_color = $request->buttonTextColor;
        $settigs->button_text = $request->buttonText;
        $settigs->button_width = $request->buttonWidth;
        $settigs->button_height = $request->buttonHeight;
        $settigs->button_radius = $request->buttonRadius;
        $settigs->font_width = $request->fontWidth;
        $settigs->font_size = $request->fontSize;
        $settigs->save();
        
        return redirect()->back()->with('success', 'Ok');
        
    }
}
