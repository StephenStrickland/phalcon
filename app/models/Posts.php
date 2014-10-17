<?php

class Posts extends \Phalcon\Mvc\Collection
{
    public function onConstruct()
    {
        $this->date = date('Y-m-d H:i:s');
    }

    public $date;
    public $content;
    public $comments;
    public $title;
    public $permalink; #guid
    public $tags;
    public $style; #dark, light
    public $type; #blog, projects, notes
    public $description;
}