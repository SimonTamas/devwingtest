<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

/**
 * Class News
 * @package App\Http\Resources
 * @property string title
 * @property string description
 * @property string content
 * @property string slug
 * @property string thumbnail
 * @property string image
 * @property string date
 */
class NewsPost extends JsonResource
{
    public function toArray($request)
    {
        return [
            'title' => $this->title,
            'content' => $this->content,
            'image' => asset($this->image),
            'date' => $this->date
        ];
    }
}
