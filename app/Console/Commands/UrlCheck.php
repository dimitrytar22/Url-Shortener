<?php

namespace App\Console\Commands;

use App\Models\ShortenedURL;
use Illuminate\Console\Command;

class UrlCheck extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'run {url}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $originUrl = $this->argument('url');
        $hashed = ShortenedURL::generateShortURL($originUrl);
        $shortened = ShortenedURL::query()->create([
            'user_id' => 0,
            'origin' => $originUrl,
            'shortened' => $hashed,
            'clicks' => 0
        ]);
        echo $shortened;
    }
}
