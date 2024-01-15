<?php

namespace App\Infrastructure\Repositories;

use App\Domain\ContentManagement\Entities\Tag;
use App\Domain\ContentManagement\Repositories\TagRepositoryInterface;
use App\Models\Tag as EloquentTag;

class EloquentTagRepository implements TagRepositoryInterface
{

    public function findById($id) {
        return EloquentTag::find($id);
    }

    public function save(Tag $post) {
        // Convert Domain Post to Eloquent Post model and save
    }

    public function delete(Tag $post) {
        // Convert Domain Post to Eloquent Post model and delete
    }

}
