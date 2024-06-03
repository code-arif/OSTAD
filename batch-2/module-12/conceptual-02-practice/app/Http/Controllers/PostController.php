<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //show post create form
    public function showPostCreate()
    {
        $categories = Category::get();
        $tags = Tag::get();
        return view('pages.posts.showCreatePost', compact(['categories', 'tags']));
    }

    //post create
    public function createPost(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:500',
            'description' => 'nullable',
            'category_id' => 'required|exists:categories,id',
            'status' => 'required|in:published,draft',
            'tags' => 'array',
            'tags.*' => 'exists:tags,id',
            'featured_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:7000',
        ]);

        if ($request->hasFile('featured_image')) {
            $image = $request->file('featured_image');
            $imageNameToStore = 'post_image' . md5(uniqid()) . time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images/post_image'), $imageNameToStore);
        }

        //post save
        $post = Post::create([
            'title' => $validatedData['title'],
            'description' => $validatedData['description'],
            'category_id' => $validatedData['category_id'],
            'status' => $validatedData['status'],
            'featured_image' => $imageNameToStore,
        ]);

        // Attach tags to the post
        if (!empty($validatedData['tags'])) {
            $post->tags()->attach($validatedData['tags']);
        }

        return redirect()->back()->with('success', 'Post created successfully!');
    }

    //all post show
    public function allPost()
    {
        $allPost = Post::with('category', 'tags')->latest()->get();
        // return($allPost);die;
        return view('pages.posts.allPost', compact('allPost'));
    }

    //view single post
    public function showSinglePost($id)
    {
        $viewPost = Post::with('category')->findOrFail($id);
        return view('pages.posts.viewPost', compact(['viewPost']));
    }

    //post delete
    public function deletePost($id)
    {
        $post = Post::findOrFail($id);
        $removeFile = unlink(public_path('images/post_image/') . $post->featured_image);
        if ($removeFile) {
            $post->delete();
            return redirect()->back()->with('success', 'Post deleted seuccessfully');
        } else {
            return redirect()->back();
        }
    }

    //post edit blade show
    public function showEditPost($id)
    {
        $categories = Category::get();
        $tags = Tag::get();
        $editPost = Post::with('category', 'tags')->findOrFail($id);
        return view('pages.posts.editPost', compact('editPost', 'categories', 'tags'));
    }
    //post edit
    public function editPost(Request $request, $id)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:500',
            'description' => 'nullable',
            'category_id' => 'required|exists:categories,id',
            'status' => 'required|in:published,draft',
            'tags' => 'array',
            'tags.*' => 'exists:tags,id',
            'featured_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:7000',
        ]);

        // Find the post by ID
        $post = Post::findOrFail($id);
        if ($request->hasFile('featured_image')) {
            // Get the old image path
            $oldImage = $post->featured_image;
            $image = $request->file('featured_image');
            $imageNameToStore = 'post_image' . md5(uniqid()) . time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images/post_image'), $imageNameToStore);

            //Delete the old image
            if ($oldImage) {
                $oldImagePath = public_path('images/post_image/' . $oldImage);
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
            }

            // Update the post with the new image path
            $post->featured_image = $imageNameToStore;
        }

        //post save
        $post->update([
            'title' => $validatedData['title'],
            'description' => $validatedData['description'],
            'category_id' => $validatedData['category_id'],
            'status' => $validatedData['status'],
        ]);

        // Attach tags to the post
        if (!empty($validatedData['tags'])) {
            $post->tags()->sync($validatedData['tags']);
        }

        return redirect()->back()->with('success', 'Post updated successfully!');
    }
}
