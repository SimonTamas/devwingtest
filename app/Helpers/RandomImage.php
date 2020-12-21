<?php

namespace App\Helpers;

final class RandomImage {

    /**
     * @param int $width
     * @param int $height
     * @return string
     */
    public static function getURLWithSize(int $width, int $height) {
        return "https://picsum.photos/" . $width . "/" . $height;
    }
}
