<?php

namespace App\Http\Controllers;

use App\Application\ContentServices\BlogPostService;
use App\Http\Requests\StorePostRequest;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Log;

class PostController extends Controller
{
    protected $blogPostService;

    public function __construct(
        BlogPostService $blogPostService
    )
    {
        $this->blogPostService = $blogPostService;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePostRequest $request)
    {
        //try {
            $postData = $request->validated();
            $post = $this->blogPostService->createPost($postData);

            return response()->json($post, 201);
//        }
//        catch (\Throwable $e){
//            Log::error('Error creating post: ' . $e->getMessage(), [
//                'stack' => $e->getTraceAsString(),
//                'input' => $request->all()
//            ]);
//
//            return response()->json([
//                'message' => 'An error occurred while creating the post.'
//            ], Response::HTTP_INTERNAL_SERVER_ERROR);
//        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
