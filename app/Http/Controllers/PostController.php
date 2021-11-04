<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index(){

        $posts = Post::all();

        return view('post.index', compact('posts'));
       //$posts=Post::all();
       /*$posts=Post::where('is_published',0)->get();
       foreach($posts as $post) {
           dump($post->title);
       }
       dump('end');*/
    }
    public function create(){

        return view('post.create');

        /*$postArr = [
            [
                'title'=>'title of post from',
                'content'=>'some interesting content',
                'image'=>'image.jpg',
                'likes'=>20,
                'is_published'=>1,
            ],
            [
                'title'=>'another title of post from',
                'content'=>'another some interesting content',
                'image'=>'another image.jpg',
                'likes'=>50,
                'is_published'=>1,
            ],
            
            ];
            Post::create([
                'title'=>'another title of post from',
                'content'=>'another some interesting content',
                'image'=>'another image.jpg',
                'likes'=>50,
                'is_published'=>1,
            ]);
        foreach($postArr as $item){
            dump($item);
            Post::create($item);
        }
           dump('created'); */
    }

    public function store(){

        $data = request()->validate([
            'title' => '',
            'post_content' => '',
            'image' => '',
        ]);
        Post::create($data);
        return redirect()->route('post.index');
    }

    public function show(Post $post) {
      
        return view('post.show', compact('post'));
    }

    public function edit(Post $post){
        return view('post.edit', compact('post'));
    }
    /*public function update(){
        $post = Post::find(6);
        $post->update([
            'title'=>'updated',
            'content'=>'updated',
            'image'=>'updated',
            'likes'=>1000,
            'is_published'=>1,
        ]);
        dump('updated');
    }*/
    public function delete(){
        $post = Post::find(5)->delete();
        
    }
    public function updateOrCreate(){
    $post = Post::updateOrCreate(
        ['title'=>'llllllll', 'content'=>'bbbbbbbbbbbbbbb'],
    ['image'=>'twice updated', 'likes'=>5000, 'is_published'=>0]);
    dump($post->title);
    }
    public function upsert(){
        Post::upsert([[
            'title'=>'another title of post from', 'content'=>'another some interesting content'
        ],
        ['title'=>'llllllll', 'content'=>'bbbbbbbbbbbbbbb']],
        ['title','content']);
        dump('Hello');

    }
    public function update(){
        $post = Post::find(1)
                    ->update(['content'=>'updated content']);
        
        dump('updated');
    }
    public function firstOrCreate(){
        
        $post = Post::firstOrCreate(['title'=>'aaaaa'],
        [
            'title'=>'updated',
            'content'=>'updated',
            'image'=>'updated',
            'likes'=>1000,
            'is_published'=>1,
        ]);
        dump($post->content);
    }
}