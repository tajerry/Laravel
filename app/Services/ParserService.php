<?php

namespace App\Services;
use App\Models\Category;
use App\Models\News;
use Illuminate\Support\Facades\Storage;
use Orchestra\Parser\Xml\Facade as Parser;
use App\Contracts\Parser as Contract;
class ParserService implements Contract
{
    protected string $url;
    /**
     * @inheritDoc
     */
    public function setUrl(string $url): self
    {
        $this->url = $url;
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function saveNews():void
    {
        $xml = Parser::load($this->url);
        $data = $xml->parse([
            'title' =>[
                'uses' => 'channel.title'
            ],
            'link' =>[
                'uses' => 'channel.link'
            ],
            'description' =>[
                'uses' => 'channel.description'
            ],
            'image' =>[
                'uses' => 'channel.image.url'
            ],
            'items' =>[
                'uses' => 'channel.item[title,description,link,pubDate,author]'
            ],
        ]);
        $category = Category::where('title', $data['title'])->first();
        if (!$category){
            $category = new Category();
            $category->fill([
                'title' => $data['title'],
                'description' => $data['description']
            ])->save();
        }
        foreach ($data['items'] as $item){
            Storage::append('log.txt', date('d.m.Y H:i:s'.' '.implode($item)));
            $category->news()->create([
                'description' => $item['description'],
                'link' => $item['link'],
                'title' => $item['title'],
                'author' => $item['author'],
                'pubDate' => $item['pubDate'],
                'category_id' => $category->id,
                'image' => 'image',
            ]);
        }

    }
}
