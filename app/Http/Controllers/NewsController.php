<?php

namespace App\Http\Controllers;

use App\Http\Resources\NewsPost as NewsResource;
use App\Services\NewsService;

class NewsController extends AbstractModelController
{
    public function showAction(string $slug) {
        /** @var NewsService $newsService */
        $newsService = $this->getModelService();
        return new NewsResource($newsService->getUsingSlug($slug));
    }
}
