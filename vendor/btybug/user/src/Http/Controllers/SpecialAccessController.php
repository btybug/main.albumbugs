<?php

namespace Btybug\User\Http\Controllers;


use App\Http\Controllers\Controller;
use BtyBugHook\Membership\Repository\BlogRepository;
use Illuminate\Http\Request;

class SpecialAccessController extends Controller
{
    private $blogRepository;

    public function __construct (BlogRepository $blogRepository)
    {
        $this->blogRepository = $blogRepository;
    }

    public function getIndex()
    {
        $blogs = $this->blogRepository->plunckByCondition(['status'=>true],'title','slug')->toArray();

        return view('users::special_access.index', compact(['blogs']));
    }

    public function postProducts (Request $request)
    {
        $slug = $request->get('slug');

        if($slug){
            $blog = $this->blogRepository->findBy('slug', $slug);

            if($blog){
                $data = \DB::table(str_replace('-', '_', $blog->slug))->get();
                return \Response::json(['error' => false,'data' => $data]);
            }
        }


        return \Response::json(['error' => true,'message' => 'blog not found']);
    }
}