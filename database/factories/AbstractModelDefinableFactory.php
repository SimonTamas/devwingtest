<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

abstract class AbstractModelDefinableFactory extends Factory
{
    /**
     * @param string $model
     * @return AbstractModelDefinableFactory
     */
    public function setModel(string $model): AbstractModelDefinableFactory
    {
        $this->model = $model;
        return $this;
    }
}
