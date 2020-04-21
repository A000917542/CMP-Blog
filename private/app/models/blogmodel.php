<?php

class BlogModel extends Model {

    function __construct() {
        parent::__construct();
    }

    function readPost($blogId) {
        $sql = "SELECT `title`, `content`, `author` FROM `posts` WHERE `title` = 'post-a'";
        $stmt = $this->db->prepare($sql);
        $stmt->execute(Array($blogId));
        $post = $stmt->fetch(PDO::FETCH_ASSOC);
        return $post;
    }

    function createPost() {
        
    }

}

?>