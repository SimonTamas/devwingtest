<?php

namespace App\Services\Traits;

use App\Services\NewsService;

trait UsesNewsService {

    protected NewsService $newsService;

    /**
     * @return mixed
     */
    public function getNewsService()
    {
        return $this->newsService;
    }

    /**
     * @param NewsService $newsService
     * @return mixed
     */
    public function setNewsService(NewsService $newsService)
    {
        $this->newsService = $newsService;
        return $this;
    }
}
