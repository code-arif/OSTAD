<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $showCase = Post::latest()->limit(4)->get();
        return view('pages.index', compact('showCase'));
    }

    //create post route show
    public function showCreatePost()
    {
        return view('pages.createPost');
    }

    //create post
    public function createPost(Request $request)
    {
        // dd($request->all());

        $request->validate([
            'title' => 'required|string|max:250',
            'description' => 'nullable|string',
            'category' => 'required',
            'tags' => 'nullable|array',
            'status' => 'required',
            'featured_image' => 'nullable|image',
        ]);

        if ($request->hasFile('featured_image')) {
            $image = $request->file('featured_image');
            $imageNameToStore = 'post_image' . md5(uniqid()) . time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images/post_image'), $imageNameToStore);
        }

        //post save
        Post::create([
            'title' => $request->title,
            'description' => $request->description,
            'category' => $request->category,
            'tags' => $request->tags,
            'status' => $request->status,
            'featured_image' => $imageNameToStore,
        ]);

        return redirect()->back()->with('success', 'Post created successfully');
    }

    //show single post
    public function showSinglePost($id)
    {
        $singlePost = Post::findOrFail($id);
        // dd($singlePost);
        return view('pages.showSinglePost', compact('singlePost'));
    }

    //post delete
    public function destroy($id)
    {
        $post = Post::findOrFail($id);
        $removedFile = unlink(public_path('images/post_image/') . $post->featured_image);
        if ($removedFile) {
            $post->delete();
            return redirect()->back()->with('success', 'Post deleted successfully');
        } else {
            return redirect()->back();
        }
    }

    //=====another style=====//
    //     public function destroy($id)
    // {
    //     $post = Post::findOrFail($id);
    //     $filePath = public_path('images/post_image/' . $post->featured_image);

    //     if (file_exists($filePath) && is_file($filePath)) {
    //         unlink($filePath);
    //     }

    //     $post->delete();
    //     return redirect()->back()->with('success', 'Post deleted successfully');
    // }

    //show edit post
    public function showEditPost($id)
    {
        $showEditPost = Post::findOrFail($id);
        return view('pages.editPost', compact('showEditPost'));
    }

    //edit post
    public function updatePost(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:250',
            'description' => 'nullable|string',
            'category' => 'required',
            'tags' => 'nullable|array',
            'status' => 'required',
            'featured_image' => 'nullable|image',
        ]);

        if ($request->hasFile('featured_image')) {
            $image = $request->file('featured_image');
            $imageNameToStore = 'post_image' . md5(uniqid()) . time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images/post_image'), $imageNameToStore);
        }

        //post save
        $post = Post::findOrFail($id);
        $post->update([
            'title' => $request->title,
            'description' => $request->description,
            'category' => $request->category,
            'tags' => $request->tags,
            'status' => $request->status,
            'featured_image' => $request->hasFile('featured_image') ? $imageNameToStore : $post->featured_image,
        ]);

        return redirect()->route('all.post.show')->with('success', 'Post updated successfully');
    }
}
