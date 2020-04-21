<?php

class BlogModel extends Model {

    function __construct() {
        parent::__construct();
    }

    function readPost($blogId) {
        $sql = "SELECT `title`, `content`, `author` FROM `posts` WHERE `slug` = ?";
        $stmt = $this->db->prepare($sql);
        $cnt = $stmt->execute(Array($blogId));
        $post = $stmt->fetch();
        return $post;
    }

    function createPost() {
        
    }

}

?>