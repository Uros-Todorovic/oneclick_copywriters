<?php

class Comment extends Database_object {
    protected static $db_table = "comments";
    public $id;
    public $copywriter_id;
    public $author;
    public $body;
    public $aprooved;

    public static function create_comment($copywriter_id, $author="Author", $body=""){

        if (!empty($copywriter_id) && !empty($author) && !empty($body)) {
            
            $comment           = new Comment;
            $comment->copywriter_id = (int)$copywriter_id;
            $comment->author   = $author;
            $comment->body     = $body;

            return $comment;
        } else {
            return false;
        }
    }

    public static function find_comments($copywriter_id=0){
        $sql = "SELECT * FROM " . self::$db_table . " WHERE copywriter_id = $copywriter_id ORDER BY copywriter_id ASC";
       
        $result_array = self::find_querys($sql);

        return !empty($result_array) ? $result_array : false;
    }

    public static function aproove_comment($id){
        global $database;
        $params = [
            'id' => $id
        ];
        $sql = "UPDATE comments SET aprooved = 1 WHERE id = :id";
        $database->update_row($sql, $params);
    }

    

}