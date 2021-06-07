<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(Post $post)
    {
<<<<<<< HEAD
        return view('index')->with(['posts' => $post->getPaginateByLimit()]);  
    }
}
?>
=======
      return $post->get();
    }
}
>>>>>>> master
