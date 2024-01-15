<?php

namespace App\Infrastructure\Repositories;

use App\Domain\ContentManagement\Entities\Category;
use App\Domain\ContentManagement\Repositories\CategoryRepositoryInterface;
use App\Models\Category as EloquentCategory;

class EloquentCategoryRepository implements CategoryRepositoryInterface
{

    public function findById($id) {
        return EloquentCategory::find($id);
    }

    public function save(Category $post) {
        // Convert Domain Post to Eloquent Post model and save
    }

    public function delete(Category $post) {
        // Convert Domain Post to Eloquent Post model and delete
    }

}
