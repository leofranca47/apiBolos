<?php

namespace App\Services;

use App\Repositories\Contracts\InterestedListRepositoryInterface;
use Exception;

class InterestedListService
{
    private $interestedRepository;
    private $cakeService;
    private $sendEmail;

    public function __construct(InterestedListRepositoryInterface $interestedRepository, CakeService $cakeService, SendEmailInterested $sendEmail)
    {
        $this->interestedRepository = $interestedRepository;
        $this->cakeService = $cakeService;
        $this->sendEmail = $sendEmail;
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
            $interested =  $this->interestedRepository->create($data);
            if (isset($data["cake_id"])) {
                $cake = $this->cakeService->show($data["cake_id"]);
                $this->linkCake($interested["id"], $cake["id"]);

                if ($cake->amount > 0) {
                    $this->sendEmail->SendEmailInterested([$interested], $cake);
                }
            }
            return $interested;
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

    public function getCakeInterested($interested_id)
    {
        try {
            return $this->interestedRepository->getCakeInterested($interested_id);
        } catch (Exception $exception) {
            throw new Exception($exception->getMessage());
        }
    }

    public function linkCake($interested_id, $cake_id)
    {
        try {
            return $this->interestedRepository->linkCake($interested_id, $cake_id);
        } catch (Exception $exception) {
            throw new Exception($exception->getMessage());
        }
    }
}
