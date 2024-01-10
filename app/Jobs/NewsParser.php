<?php

namespace App\Jobs;

use App\Contracts\Parser;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class NewsParser implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    public string $link;

    /**
     * Create a new job instance.
     * @param $link
     */
    public function __construct($link)
    {
        $this->link = $link;

    }

    /**
     * Execute the job.
     * @param Parser $parser
     */
    public function handle(Parser $parser): void
    {
        $parser->setUrl($this->link)->saveNews();
    }
}
