<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Settings;
use App\Models\Client;
use Carbon\Carbon;

class MainController extends Controller
{
    public function index(Request $request)
    {
    	$ip = $request->ip();
    	//$date = Carbon::now()->format('Y-m-d H:i:s')->diffInHours('24 Hours');
    	//dd($date);
    	
    	$client = Client::where('ip', $ip)
    		//->andWhere('date', '>=', Carbon::now()->format('Y-m-d H:i:s'))
    		->first();
    	
    	if ($client) {
    	    $post = Post::find($client['greeting']);
    	    
    	    $settigs = Settings::first();
        	$background = $settigs->background;
    	    
    	    return view('welcome', [
    	        'post' => $post,
  				'show' => true,
  				'background' => $background,
    	    ]);
    	}
    	
    	
    	$settigs = Settings::first();
        $greetingCheck = $settigs->greeting_check;
        $greetingTitle = $settigs->greeting_title;
        $greetingText = $settigs->greeting_text;
        $background = $settigs->background;
        $buttonColor = $settigs->button_color;
        $buttonTextColor = $settigs->button_text_color;
        $buttonText = $settigs->button_text;
        $buttonWidth = $settigs->button_width;
        $buttonHeight = $settigs->button_height;
        $buttonRadius = $settigs->button_radius;
        $fontWidth = $settigs->font_width;
        $fontSize = $settigs->font_size;
    
    	$posts = Post::all()->toArray();
    	
    	if(count($posts) == 0) {
    	    $postArr = [];
    	} else {
    	    $rand_keys = array_rand($posts, 1);
    	    $postArr = $posts[$rand_keys];
    	}
    	
    	//dd($posts[$rand_keys]);
    	
    	//$client = new Client();
    	//$client->ip = $ip;
    	//$client->date = Carbon::now()->format('Y-m-d H:i:s');
    	//$client->greeting = $posts[$rand_keys]['id'];
    	//$client->save();
    	
    	return view('welcome', [
    	    'post' => $postArr,
    	    'show' => false,
    	    'greetingCheck' => $greetingCheck,
            'greetingTitle' => $greetingTitle,
            'greetingText' => $greetingText,
            'background' => $background,
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
}
