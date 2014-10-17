<?php

class PostsController extends \Phalcon\Mvc\Collection
{

    public function indexAction()
    {


    }


    public function showAction()
    {
        $posts = Posts::find(array(array(), "limit" => 10));
        $test = new Posts();
        $test->title = "asdf";

        $this->view->setVar('post', $posts);



    }

    public function test()
    {
        echo "hello world";

    }

}

/* array(
array("type" => "blog"),
            "sort" => array("date" => -1),
            "limit" =>10
        )
*/