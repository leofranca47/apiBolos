<?php

namespace App\Repositories\Contracts;

interface CakeRepositoryInterface
{
    public function findFirst(String $colunm, $value);
    public function findAll();
    public function create($data);
    public function update($data);
    public function delete($id);
    public function find($id);
    public function getInterestedCake($cake_id);
    public function linkInterested($cake_id, $interested_id);
}
