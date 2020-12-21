<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

/**
 * Class News
 * @package App\Http\Resources
 * @property string title
 * @property string description
 * @property string slug
 * @property string thumbnail
 * @property string date
 */
class NewsAnchor extends JsonResource
{
    public function toArray($request)
    {
        return [
            'title' => $this->title,
            'description' => $this->description,
            'slug' => $this->slug,
            'thumbnail' => asset($this->thumbnail),
            'date' => $this->date
        ];
    }
}
