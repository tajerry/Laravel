<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\News;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    /**
     * @param News $news
     * @param Category $category
     * @return View
     */
    public function index(News $news, Category $category):view
    {
        return view('news.index',[
            'newsList' => $news->with('category')->orderBy('created_at', 'DESC')->paginate(7),
            'category' => $category
        ]);
    }

    public function showNews(News $news):view
    {
        return view('news.show' , [
           'news' => $news
        ]);
    }

}
