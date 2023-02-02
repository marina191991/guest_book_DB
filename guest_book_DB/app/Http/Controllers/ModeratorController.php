<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Contracts\View\View;

class ModeratorController extends Controller
{
    /**
     * @return View
     */
    public function show(): View
    {
        $users = DB::table('users');
        $result = $users->get();
        return view('moderator.comment', ['result' => $result]);
    }

    /**
     * @param Request $request
     * @return View
     */
    public function update(Request $request): View
    {
        $id = $request->get('edit_id');
        $name = $request->get('edit_name');
        $comment = $request->get('edit_comment');

        $users = DB::table('users');
        if ($name) {
            $users->where('id', $id)->update(['name' => $name]);
        }
        if ($comment) {
            $users->where('id', $id)->update(['comment' => $comment]);
        }
        $result = DB::table('users')->get();
        return view('moderator.comment', ['result' => $result]);
    }

    /**
     * @param Request $request
     * @return View
     */
    public function delete(Request $request): View
    {
        $ids = $request->get('id');
        $idExp = explode(",", $ids);
        DB::table('users')->whereIn('id', $idExp)->delete();
        $result = DB::table('users')->get();
        return view('moderator.comment', ['result' => $result]);
    }
}
