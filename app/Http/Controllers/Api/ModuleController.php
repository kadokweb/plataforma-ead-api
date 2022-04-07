<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ModuleResourse;
use App\Repositories\ModuleRepository;
use Illuminate\Http\Request;

class ModuleController extends Controller
{
    protected $repository;

    public function __construct(ModuleRepository $courseRepository)
    {
        $this->repository = $courseRepository;
    }

    public function index($courseId)
    {
        $modules = $this->repository->getModuleByCourseId($courseId);

        return ModuleResourse::collection($modules);
    }
}