<?php

require_once('init.php');
Helper::not_signed_in($session);

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $comment = Comment::find_by_id($id);
    if ($comment) {
        print_r($comment);
        $comment::aproove_comment($id);
        Helper::redirect("comments.php");
    } else {
        echo "Undifined comment";
    }
}