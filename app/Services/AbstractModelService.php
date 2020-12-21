<?php

namespace App\Services;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

abstract class AbstractModelService {

    private Model $model;

    /**
     * @return Model
     */
    public function getModel(): Model
    {
        return $this->model;
    }

    /**
     * @param Model $model
     * @return AbstractModelService
     */
    public function setModel(Model $model): AbstractModelService
    {
        $this->model = $model;
        return $this;
    }

    public function getAll() {
        return $this->getModel()->all();
    }

    public function getPaginated(int $perPage) {
        return $this->getModel()->paginate($perPage);
    }

    /**
     * @param integer $count
     * @return Model[]
     */
    public function factoryCreate($count) {
        /** @var HasFactory $model */
        $model = $this->getModel();
        return $model::factory()->count($count)->create();
    }
}
