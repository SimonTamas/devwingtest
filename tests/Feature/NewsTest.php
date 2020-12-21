<?php

namespace Tests\Feature;

use Illuminate\Support\Facades\Route;
use Tests\TestCase;

class NewsTest extends TestCase
{
    private $newsRouteName = 'news';

    public function testNewsRouteExists() {
        $this->assertTrue(Route::has($this->newsRouteName));
    }

    public function testNewsRouteWorks() {
        $this->get(route($this->newsRouteName))->assertStatus(200);
    }

    public function testNewsRouteReturnsJSON() {
       json_decode($this->get(route($this->newsRouteName))->getContent());
       $this->assertTrue(json_last_error() == JSON_ERROR_NONE);
    }
}
