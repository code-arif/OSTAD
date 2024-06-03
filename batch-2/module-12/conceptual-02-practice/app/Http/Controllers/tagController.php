<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;

class tagController extends Controller
{
    //show create tag blade
    public function showCreateTag()
    {
        return view('pages/tags/showCreateTags');
    }

    //create tag
    public function createTag(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:20|alpha',
        ]);
        //create
        Tag::create([
            'name' => $request->name,
        ]);
        return redirect()->back()->with('success', 'Tag created successfully');
    }

    //show all tags
    public function allTags()
    {
        $tags = Tag::latest()->get();
        return view('pages.tags.allTags', compact('tags'));
    }

    //show tag edit blade
    public function showEditTag($id)
    {
        $tags = Tag::findOrFail($id);
        return View('pages.tags.editTags', compact('tags'));
    }

    //update tag
    public function editTag(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:20|alpha',
        ]);

        //create
        $updateTag = Tag::findOrFail($id);
        $updateTag->update([
            'name' => $request->name,
        ]);

        return redirect()->back()->with('success', 'Tag created successfully');
    }

    //delete tag
    public function deleteTag($id)
    {
        $deleteTag = Tag::findOrFail($id);
        $deleteTag->delete();
        return redirect()->back()->with('success', 'This tag deleted successfully');
    }
}
