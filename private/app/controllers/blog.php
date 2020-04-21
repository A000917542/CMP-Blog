<?php

class Blog extends Controller {

    function __construct() {
        parent::__construct();
    }
    
    /*
     * http://localhost/
     */
    function Index () {
        $this->view("template/header");
        $this->view("main/index");
        $this->view("template/footer");
        
    }

    function Read($blogId) {
        // create blogModel
        $this->model("BlogModel");
        // lookup blog id
        // get blog details
        $post = $this->BlogModel->readPost($blogId);
        // fill in template with record
        $this->view("template/header");
        $this->view("blog/index", $post);
        $this->view("template/footer");
    }

    function Create() {

        // check if authenticated
        // if yes, show blog create form
        // if no, redirect out
        // collect blog information
        // don't forget the CSRF token, Valdaidate.
        // create blogmodel
        // save the blog entry
    }
}
?>