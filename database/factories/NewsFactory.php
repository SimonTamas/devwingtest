<?php

namespace Database\Factories;

use App\Helpers\RandomImage;
use App\Models\News;
use  Intervention\Image\Facades\Image;

class NewsFactory extends AbstractModelDefinableFactory
{
    /**
     * @param int $width
     * @param int $height
     * @param string $name
     * @return string
     */
    private function getRandomImageURLWithSizes(int $width, int $height, $name = null) {
        $img = Image::make(file_get_contents(RandomImage::getURLWithSize($width, $height)));
        $location = implode("_", array_filter([
            '/images/news/news',
            $name,
            uniqid(),
            '.jpg'
        ]));
        $img->save(public_path($location));
        return $location;
    }

    public function definition()
    {
        $slug = $this->faker->unique()->word;
        return [
            'title' => ucfirst(implode(" ", $this->faker->words(3))),
            'description' => $this->faker->paragraph(2),
            'content' => $this->faker->paragraph(10),
            'slug' => $slug,
            'thumbnail' => $this->getRandomImageURLWithSizes(News::THUMBNAIL_WIDTH, News::THUMBNAIL_HEIGHT, 'thumb'),
            'image' => $this->getRandomImageURLWithSizes(News::IMAGE_WIDTH, News::IMAGE_HEIGHT, 'img'),
            'date' => $this->faker->date()
        ];
    }
}
