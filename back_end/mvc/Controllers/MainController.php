<?php

class MainController extends BaseController
{

    public function index()
    {
        var_dump(DB::getInstance());
        $comment = new CommentModel();
        var_dump($comment);
    }

    public function show()
    {
        die(__METHOD__);
    }
}