<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Item;
use App\Models\favorite;
use Illuminate\Support\Facades\Auth;

class ItemController extends Controller
{
    private function loadItemWithRelations($item_id)
    {
        return Item::with('comments.user', 'categories', 'condition')->findOrFail($item_id);
    }

    private function checkUserLiked($item)
    {
        return $item->favoriteUsers()->where('user_id', Auth::id())->exists();
    }

    public function index($item_id)
    {
        $item = $this->loadItemWithRelations($item_id);
        $category = $item->categories->first();

        $categories = [
            'parentCategory' => Category::find($category->parent_id)->name ?? $category->name,
        ];
        if ($category->parent_id) {
            $categories['childCategory'] = $category->name;
        }

        return view('item', [
            'item' => $item,
            'favoritesCount' => $item->favoriteUsers->count(),
            'commentsCount' => $item->comments->count(),
            'categories' => $categories,
            'condition' => $item->condition->condition,
            'link' => "/item/comment/{$item_id}",
            'userFavorite' => $this->checkUserFavorite($item),
            'userItem' => $item->user_id == Auth::id(),
        ]);
    }


    public function comment($item_id)
    {
        $item = $this->loadItemWithRelations($item_id);
        $userFavorite = $this->checkUserFavorite($item);
        $comments = $item->comments;

        $comments =  $comments->map(function ($comment) {
            return [
                'comment' => $comment->comment,
                'userId' => $comment->user->id,
                'userName' => $comment->user->name,
                'userIcon' => $comment->user->img_url,
            ];
        });

        $data = [
            'item' => $item,
            'favoritesCount' => $item->favoritesUsers->count(),
            'commentsCount' => $item->comments->count(),
            'comments' => $comments,
            'link' => "/item/{$item_id}",
            'userFavorite' => $userFavorite,
        ];

        return view('comment', $data);
    }

    public function store(Request $request, $item_id)
    {
        $userId = Auth::user()->id;
        $commentText = $request->input('comment');

        $comment = new Comment();
        $comment->user_id = $userId;
        $comment->item_id = $item_id;
        $comment->comment = $commentText;
        $comment->save();

        return redirect()->back();
    }

    public function favorite($item_id)
    {
        $like = new Like();
        $like->user_id = Auth::id();
        $like->item_id = $item_id;
        $like->save();

        return redirect()->back();
    }

    public function unlike($item_id)
    {
        Auth::user()->favoriteItems()->detach($item_id);
        return redirect()->back();
    }//
}
