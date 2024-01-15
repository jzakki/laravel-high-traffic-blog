<?php

namespace App\Domain\ContentManagement\Repositories;

use App\Domain\ContentManagement\Entities\Tag;

interface TagRepositoryInterface
{

    public function findById($id);
    public function save(Tag $post);
    public function delete(Tag $post);

}
