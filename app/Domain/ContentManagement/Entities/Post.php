<?php

namespace App\Domain\ContentManagement\Entities;

class Post
{
    protected $id;
    protected $title;
    protected $status;

    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function setStatus($title)
    {
        $this->title = $title;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getStatus()
    {
        return $this->status;
    }

}
