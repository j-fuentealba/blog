<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

//Invocamos a la Entidad Posts
use App\Post;

//Invocamos a la Entidad Category
use App\Category;

//Invocamos a la Entidad Tag
use App\Tag;

class PageController extends Controller
{
    
	public function index(){

		$posts=Post::orderBy('id', 'DESC')->where('status', 'PUBLISHED')->paginate(10);

		return view('web.index', compact('posts'));

	}

	public function show($slug){

		$post=Post::where('slug', $slug)->first();

		return view('web.show', compact('post'));

	}

	public function category($slug){

		//Obtenemos solo el ID de la Categoria mediante el método PLUCK
		$category=Category::where('slug', $slug)->pluck('id')->first();

		$posts=Post::where('category_id', $category)->where('status', 'PUBLISHED')->orderBy('id', 'DESC')->paginate(5);

		return view('web.index', compact('posts'));

	}

	public function tag($slug){

		$posts=Post::whereHas('tags', function($query) use($slug){

			$query->where('slug', $slug);//Consición que afecta a las etiquetas de acuerdo a su relación con los posts

		})->orderBy('id', 'DESC')->paginate(5);

		return view('web.index', compact('posts'));

	}

}
