<?php

namespace App\Http\Controllers;

use App\Services\AbstractModelService;
use Illuminate\Http\Resources\Json\JsonResource;
use Symfony\Component\HttpFoundation\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class AbstractModelController extends Controller
{
    protected AbstractModelService $modelService;
    protected string $modelResourceClass;

    /**
     * @return AbstractModelService
     */
    public function getModelService(): AbstractModelService
    {
        return $this->modelService;
    }

    /**
     * @param AbstractModelService $modelService
     * @return AbstractModelController
     */
    public function setModelService(AbstractModelService $modelService): AbstractModelController
    {
        $this->modelService = $modelService;
        return $this;
    }

    /**
     * @return string
     */
    public function getModelResourceClass(): string
    {
        return $this->modelResourceClass;
    }

    /**
     * @param string $modelResourceClass
     * @return AbstractModelController
     */
    public function setModelResourceClass(string $modelResourceClass): AbstractModelController
    {
        $this->modelResourceClass = $modelResourceClass;
        return $this;
    }



    /**
     * @param Request $request
     * @return AnonymousResourceCollection
     */
    public function indexAction(Request $request) {
        $perPage = $request->get('per_page', 0);
        /** @var JsonResource $modelResourceClass */
        $modelResourceClass = $this->getModelResourceClass();
        return $modelResourceClass::collection($perPage > 0 ?
            $this->getModelService()->getPaginated($perPage) :
            $this->getModelService()->getAll()
        );
    }
}
