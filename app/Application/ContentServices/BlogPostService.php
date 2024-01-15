<?php

namespace App\Application\ContentServices;

use App\Domain\ContentManagement\Entities\Post;
use App\Domain\ContentManagement\Repositories\PostRepositoryInterface;

class BlogPostService
{

    protected $postRepository;
    public function __construct(
        PostRepositoryInterface $postRepository
    )
    {
        $this->postRepository = $postRepository;
    }

    public function createPost($postData) {
        $post = new Post();
        $post->setTitle($postData['title']);

        $post = $this->postRepository->save($post);
        return $post;
    }

}
