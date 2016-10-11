<?php

namespace App\Http\Controllers;

use App\Admin;
use App\Comment;
use App\TempComment;
use Illuminate\Http\Request;

use App\Http\Requests;

class CommentController extends Controller
{
    public function postAddTemporaryComment(Request $request)
    {
        $input = $request->all();
        $tempComment = new TempComment();

        $tempComment->sender_name=$input['sender_name'];
        $tempComment->email=$input['email'];
        $tempComment->content=$input['content'];
        $tempComment->post_id=$input['post_id'];
        $tempComment->save();

        return redirect()->back();
    }

    public function getAdminCommentApproval()
    {
        $comments = TempComment::orderBy('created_at','desc')->paginate(10);
        return view('blog.admin.temp-comments',compact('comments'));
    }
    public function postApproveTemporaryComment(Request $request)
    {
        $comment_id = $request['temp_comment_id'];
        $tempComment = TempComment::findOrFail($comment_id);
        $newComment = new Comment();
        $newComment->sender_name = $tempComment->sender_name ;
        $newComment->email = $tempComment->email ;
        $newComment->content = $tempComment->content ;
        $newComment->post_id = $tempComment->post_id ;
        $newComment->created_at = $tempComment->created_at ;
        $newComment->updated_at = $tempComment->updated_at ;

        $newComment->save();
        $tempComment->delete();
        return redirect()->route('admin.getTemporaryComments','status=added');
    }
    public function postDeleteTemporaryComment(Request $request)
    {
        $comment_id = $request['temp_comment_id'];
        TempComment::destroy($comment_id);
        return redirect()->route('admin.getTemporaryComments','status=deleted');
    }
}
