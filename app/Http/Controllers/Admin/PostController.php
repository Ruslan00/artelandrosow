<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class PostController extends Controller
{
    public function index()
    {
    	$posts = Post::all();
    	
    	return view('admin.post', [
    	    'posts' => $posts
    	]);
    }
    
    public function add()
    {
        return view('admin.post-add');
    }
    
    public function postAdd(Request $request)
    {
        if ($request->hasFile('img')) {
            $file = $request->file('img');
            $extention = $file->getClientOriginalExtension();
    	    $filename = time().md5($file->getClientOriginalName()).'.'.$extention;

            //Сохраняем оригинальную картинку
            $file->move('images/origin/', $filename);

            //Создаем миниатюру изображения и сохраняем ее
            $thumbnail = Image::make('images/origin/'.$filename);
            $thumbnail->fit(100, 100);
            $thumbnail->save('images/thumbnail/'.$filename); 
            
    	    $post = new Post();
    	    $post->title = $request->title;
    	    $post->text = $request->text;
    	    $post->img = $filename;
    	    $post->save();
    	} else {
    	    $post = new Post();
    	    $post->title = $request->title;
    	    $post->text = $request->text;
    	    $post->img = '';
    	    $post->save();
    	}
    	
    	return redirect()->route('post')->with('success', 'Ok');
    }
    
    public function del($id)
    {
    	$post = Post::find($id);
    	$post->delete();
    	
    	return redirect()->back()->with('success', 'Ok');
    }
    
    public function edit($id)
    {
    	$post = Post::find($id);
    	
    	return view('admin.post-edit', [
    	    'post' => $post
    	]);
    }
    
    public function postEdit(Request $request, $id)
    {
    	if ($request->hasFile('img')) {
    	    $file = $request->file('img');
            $extention = $file->getClientOriginalExtension();
    	    $filename = time().md5($file->getClientOriginalName()).'.'.$extention;

            //Сохраняем оригинальную картинку
            $file->move('images/origin/', $filename);

            //Создаем миниатюру изображения и сохраняем ее
            $thumbnail = Image::make('images/origin/'.$filename);
            $thumbnail->fit(100, 100);
            $thumbnail->save('images/thumbnail/'.$filename); 
            
            $post = Post::find($id);
    	    $post->title = $request->title;
    	    $post->text = $request->text;
    	    $post->img = $filename;
    	    $post->save();
    	} else {
    	    $post = Post::find($id);
    	    $post->title = $request->title;
    	    $post->text = $request->text;
    	    $post->save();
    	}
    
    	
    	
    	return redirect()->route('post')->with('success', 'Ok');
    }
    
}
