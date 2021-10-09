<?php

namespace App\Services;

use App\Repositories\Contracts\CakeRepositoryInterface;
use Exception;

class CakeService
{
    private $cakeRepository;

    public function __construct(CakeRepositoryInterface $cakeRepository)
    {
        $this->cakeRepository = $cakeRepository;
    }

    public function findAll()
    {
        try {
            return $this->cakeRepository->findAll();

        } catch (Exception $exception) {
            throw new Exception($exception->getMessage());
        }
    }

    public function store($data)
    {
        try {
            return $this->cakeRepository->create($data);
        } catch (Exception $exception) {
            throw new Exception($exception->getMessage());
        }
    }

    public function update($data)
    {
        try {
            return $this->cakeRepository->update($data);
        } catch (Exception $exception) {
            throw new Exception($exception->getMessage());
        }
    }

    public function delete($id)
    {
        try {
            return $this->cakeRepository->delete($id);
        } catch (Exception $exception) {
            throw new Exception($exception->getMessage());
        }
    }

    public function show($id)
    {
        try {
            return $this->cakeRepository->find($id);
        } catch (Exception $exception) {
            throw new Exception($exception->getMessage());
        }
    }

    public function getInterestedCake($cake_id)
    {
        try {
            return $this->cakeRepository->getInterestedCake($cake_id);
        } catch (Exception $exception) {
            throw new Exception($exception->getMessage());
        }
    }

    public function linkInterested($cake_id, $interested_id)
    {
        try {
            return $this->cakeRepository->linkInterested($cake_id, $interested_id);
        }catch (Exception $exception) {
            throw new Exception($exception->getMessage());
        }
    }

}
