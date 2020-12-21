<?php

namespace App\Services;

use App\Models\News;

class NewsService extends AbstractModelService {

    public function getUsingSlug(string $slug) {
        return News::findUsingSlug($slug);
    }
}
