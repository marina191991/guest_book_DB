<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CommentController extends Controller
{
    public function show(Request $request)
    {
        $name = $request->get('name');
        $comment = $request->get('comment');

        $users = DB::table('users');
        if ($name && $comment) {
            $users->insert(['name' => $name, 'comment' => $comment]);
        }
        $result = $users->get();
        return view('comment.show', ['result' => $result]);
    }
}
