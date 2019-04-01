<?php

namespace App\Console\Commands;

use App\Gift;
use App\RequestApi\RequestApi;
use Illuminate\Console\Command;

class SearchGiftToDatabase extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'gift:search-gift-to-database';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = '查询商品入库';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle(Gift $gift)
    {
        $gift->searchGift();
    }
}
