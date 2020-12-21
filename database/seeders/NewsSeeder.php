<?php

namespace Database\Seeders;

use App\Services\Traits\UsesNewsService;
use Illuminate\Database\Seeder;

class NewsSeeder extends Seeder
{
    use UsesNewsService;

    public function run()
    {
        $this->getNewsService()->factoryCreate(10);
    }
}
