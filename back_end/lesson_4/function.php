<?php
/**
 * Created by PhpStorm.
 * User: DethGhost
 * Date: 7/1/2017
 * Time: 12:09 PM
 */

const FILENAME = 'comments.json';

function getCommentHtmlForm(){
    $html = "
    <form action='comment.php' method='post'>
    <input type='text' name='userName' placeholder='Your name'><br> 
    <textarea name='comment' placeholder='Put your comment here'></textarea><br> 
    <button type='submit'>Send</button>
    </form>
    ";
    return $html;
}

function getComments(){

    if(!file_exists(FILENAME)){
        return [];
    }
    $json = file_get_contents(FILENAME);
    return json_decode($json, true);
}

function addComment(){

    if(empty($_POST['userName']) || empty($_POST['comment'])){
        return;
    }

    $comment = [
      'userName' => $_POST['userName'],
        'comment' => $_POST['comment']
    ];

    $comments[] = $comment;

    $json = file_get_contents(FILENAME);
    $comments = json_encode($json);
    return true;
}

function getCommentsTable(){
    $comments = getComments();
    if(!$comments){
        return '<div><h2>No comments yet</h2></div>';
    }
}