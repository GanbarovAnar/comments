<?php

namespace App\Http\Controllers;


use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    function getAllComment()
    {
        $allComments = Comment::all()
            ->sortByDesc('created_at');

        $arrayAllComment = [];
        foreach ($allComments as $oneComment)
        {
            $oneCommentForArray = $oneComment;
            $oneCommentForArray['created_at_new'] = $this->getGoodFormatDate($oneComment['created_at']);
            $arrayAllComment[] = $oneCommentForArray;
        }

        return view('index', [
            'allComments' => $arrayAllComment
        ]); // redirect
        //return redirect(url()->previous());
    }

    function addComment(Request $request)
    {
//        dd($request->author, $request->text);
        $comment = Comment::create(
            [
                'author' => $request->author,
                'text' => $request->text
            ]
        );

        $data = [
            'author' => $comment->author,
            'text' => $comment->text,
            'created_at_new' => $this->getGoodFormatDate($comment->created_at)
        ];

        return $data;
    }

    public function getGoodFormatDate($date)
    {

        list($fullDate, $fullTime) = explode(" ", $date);
        list($year, $month, $day) = explode("-", $fullDate);

        /*
        // Если надо сделать с названиями месяцев.
        $months = ['января', 'февраля', 'марта', 'апреля', 'мая', 'июня', 'июля', 'августа', 'сентября', 'октября', 'ноября', 'декабря'];
        $month = (int)$month - 1;
        $month = $months[$month];
        */

        $time = explode(":",$fullTime)[0].':'.explode(":",$fullTime)[1];

        return $time.' '.$day.'.'.$month.'.'.$year;
    }
}
