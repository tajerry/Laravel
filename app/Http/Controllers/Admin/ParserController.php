<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Jobs\NewsParser;
use Illuminate\Http\Request;
use App\Contracts\Parser;



class ParserController extends Controller

{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request, Parser $parser)
    {
        $urls = [
            'https://news.rambler.ru/rss/tech',
            'https://news.rambler.ru/rss/moscow_city',
            'https://news.rambler.ru/rss/holiday',
            'https://news.rambler.ru/rss/technology',
            'https://news.rambler.ru/rss/gifts',
            'https://news.rambler.ru/rss/world',
        ];
        foreach ($urls as $url){
            dispatch(new NewsParser($url));
        }
        return redirect('/');

    }
}
