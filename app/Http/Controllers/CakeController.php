<?php

namespace App\Http\Controllers;

use App\Http\Requests\CakeStoreRequest;
use App\Http\Requests\CakeUpdateRequest;
use App\Http\Resources\CakeResource;
use App\Services\CakeService;
use Exception;
use Symfony\Component\HttpFoundation\Response;

class CakeController extends Controller
{
    private $cakeService;

    public function __construct(CakeService $cakeService)
    {
        $this->cakeService = $cakeService;
    }

    public function getCakes()
    {
        try {
            $result = $this->cakeService->findAll();
            return CakeResource::collection($result);
        } catch (Exception $exception) {
            return response()->json(["message" => $exception->getMessage()], Response::HTTP_UNPROCESSABLE_ENTITY);
        }
    }

    public function store(CakeStoreRequest $request)
    {
        try {
            $result = $this->cakeService->store($request->all());
            return new CakeResource($result);
        } catch (Exception $exception) {
            return response()->json(["message" => $exception->getMessage()], Response::HTTP_UNPROCESSABLE_ENTITY);
        }
    }

    public function update(CakeUpdateRequest $request)
    {
        try {
            $result = $this->cakeService->update($request->all());
            return new CakeResource($result);
        } catch (Exception $exception) {
            return response()->json(["message" => $exception->getMessage()], Response::HTTP_UNPROCESSABLE_ENTITY);
        }
    }

    public function delete($id)
    {
        try {
            $result = $this->cakeService->delete($id);
            if ($result) {
                return response()->json(["message" => "O Bolo de id {$id} foi deletado com sucesso!"]);
            }
            return response()->json(["message" => "O Bolo de id {$id} não existe no banco para deletar!"]);

        } catch (Exception $exception) {
            return response()->json(["message" => $exception->getMessage()], Response::HTTP_UNPROCESSABLE_ENTITY);
        }
    }

    public function show($id)
    {
        try {
            $result = $this->cakeService->show($id);
            return new CakeResource($result);

        } catch (Exception $exception) {
            return response()->json(["message" => $exception->getMessage()], Response::HTTP_UNPROCESSABLE_ENTITY);
        }
    }
}