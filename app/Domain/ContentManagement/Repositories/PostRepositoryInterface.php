<?php

namespace App\Domain\ContentManagement\Repositories;

use App\Domain\ContentManagement\Entities\Post;

interface PostRepositoryInterface
{

    public function findById($id);
    public function save(Post $post);
    public function delete(Post $post);

}
