<?php

namespace App\Http\Controllers;

use App\Http\Requests\InterestedListStoreRequest;
use App\Http\Requests\InterestedListUpdateRequest;
use App\Http\Resources\InterestedListResource;
use App\Services\InterestedListService;
use Exception;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class InterestedListController extends Controller
{
    private $interestedListService;

    public function __construct(InterestedListService $interestedListService)
    {
        $this->interestedListService = $interestedListService;
    }

    public function getInterestedeLists()
    {
        try {
            $result = $this->interestedListService->findAll();
            return InterestedListResource::collection($result);
        } catch (Exception $exception) {
            return response()->json(["message" => $exception->getMessage()], Response::HTTP_UNPROCESSABLE_ENTITY);
        }
    }

    public function store(InterestedListStoreRequest $request)
    {
        try {
            $result = $this->interestedListService->store($request->all());
            return new InterestedListResource($result);
        } catch (Exception $exception) {
            return response()->json(["message" => $exception->getMessage()], Response::HTTP_UNPROCESSABLE_ENTITY);
        }
    }

    public function update(InterestedListUpdateRequest $request)
    {
        try {
            $result = $this->interestedListService->update($request->all());
            return new InterestedListResource($result);
        } catch (Exception $exception) {
            return response()->json(["message" => $exception->getMessage()], Response::HTTP_UNPROCESSABLE_ENTITY);
        }
    }

    public function delete($id)
    {
        try {
            $result = $this->interestedListService->delete($id);
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
            $result = $this->interestedListService->show($id);
            return new InterestedListResource($result);

        } catch (Exception $exception) {
            return response()->json(["message" => $exception->getMessage()], Response::HTTP_UNPROCESSABLE_ENTITY);
        }
    }
}
