<?php

namespace App\Infrastructure\Repositories;

use App\Domain\ContentManagement\Entities\Post;
use App\Domain\ContentManagement\Repositories\PostRepositoryInterface;
use App\Models\Post as EloquentPost;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Log;
use mysql_xdevapi\Exception;

class EloquentPostRepository implements PostRepositoryInterface
{

    public function findById($id) {
        return EloquentPost::find($id);
    }

    public function save(Post $post) {

        try {
            $eloquentPost = new EloquentPost();
            $eloquentPost->title = $post->getTitle();
            $eloquentPost->save();

            return $eloquentPost;

        } catch (QueryException $e) {
            Log::error('Database error in saving post: ' . $e->getMessage());
            throw new Exception('Error saving post.', 0, $e);
        } catch (\Exception $e) {
            Log::error('Error in saving post: ' . $e->getMessage());
            throw new Exception('Error saving post.', 0, $e);
        }
    }

    public function delete(Post $post) {
        // Convert Domain Post to Eloquent Post model and delete
    }

}
