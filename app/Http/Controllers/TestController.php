<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Support\Facades\DB;
use function abort;
use function dd;
use function request;
use function view;

/**
 * Class TestController
 * @package App\Http\Controllers
 */
class TestController
{
    public function test($slug)
    {
//        $post = DB::table('post')->where('slug', $slug)->first();
        $post = Post::where('slug', $slug)->firstOrFail();

//        if (empty($post)) {
//            abort(404, 'Article not found');
//        }


        return view('test', [
            'name' => request('name'),
            'post' => $post,
        ]);
    }
}
