<?php

namespace App\Domain\ContentManagement\Repositories;

use App\Domain\ContentManagement\Entities\Category;

interface CategoryRepositoryInterface
{

    public function findById($id);
    public function save(Category $post);
    public function delete(Category $post);

}
