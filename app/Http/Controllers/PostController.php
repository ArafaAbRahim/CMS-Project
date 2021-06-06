<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PostController extends Controller
{
    public function create()
    {
        return view('admin.post.addpost');
    }

    public function store(Request $request) 
    {
        $validator = Validator::make($request->all(),[
            'title' => 'required',
            'section_title' => 'required',
        ]);
        if($validator->fails()){
            $success = 0;
            return back()->withErrors($validator)->withInput();
        }
        else{
            if($request->image){
                $filename = $this->fileUpload($request, 'image', '');
            }
            
            $data = array(
                'page_title' => $request->page_title,
                'section_title' => $request->section_title,
                'title' => $request->title,
                'description' => $request->description,
                'image' => $filename,
            );
            $post = Post::create($data);
            if($post){
                return redirect('post-add')->with(['message'=>'Post Successfully inserted']);
            }
            else{
                return back()->with(['message'=>'Something Wrong']);
            }
        }
    }

    public function show()
    {
        $data['posts'] = Post::paginate(10);
        return view('admin.post.showpost', $data);
    }
}
