<?php

namespace App\Services;

use App\Repositories\Contracts\InterestedListRepositoryInterface;
use Exception;

class InterestedListService
{
    private $interestedRepository;

    public function __construct(InterestedListRepositoryInterface $interestedRepository)
    {
        $this->interestedRepository = $interestedRepository;
    }

    public function findAll()
    {
        try {
            return $this->interestedRepository->findAll();

        } catch (Exception $exception) {
            throw new Exception($exception->getMessage());
        }
    }

    public function store($data)
    {
        try {
            return $this->interestedRepository->create($data);
        } catch (Exception $exception) {
            throw new Exception($exception->getMessage());
        }
    }

    public function update($data)
    {
        try {
            return $this->interestedRepository->update($data);
        } catch (Exception $exception) {
            throw new Exception($exception->getMessage());
        }
    }

    public function delete($id)
    {
        try {
            return $this->interestedRepository->delete($id);
        } catch (Exception $exception) {
            throw new Exception($exception->getMessage());
        }
    }

    public function show($id)
    {
        try {
            return $this->interestedRepository->find($id);
        } catch (Exception $exception) {
            throw new Exception($exception->getMessage());
        }
    }

}
