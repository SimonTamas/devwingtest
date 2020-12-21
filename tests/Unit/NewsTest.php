<?php

namespace Tests\Unit;

use Illuminate\Database\Eloquent\Model;
use PHPUnit\Framework\TestCase;
use Illuminate\Contracts\Container\BindingResolutionException;

class NewsTest extends TestCase
{
    private $newsClass = 'App\Models\News';

    public function testNewsModelExists()
    {
        $this->assertTrue(class_exists($this->newsClass));
    }

    /**
     * @throws BindingResolutionException
     */
    public function testNewsModelIsModel() {
        $this->assertTrue(app()->make($this->newsClass) instanceof Model);
    }
}
