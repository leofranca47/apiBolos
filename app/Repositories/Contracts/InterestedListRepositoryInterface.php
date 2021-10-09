<?php

namespace App\Repositories\Contracts;

interface InterestedListRepositoryInterface
{
    public function findFirst(String $colunm, $value);
    public function findAll();
    public function create($data);
    public function update($data);
    public function delete($id);
    public function find($id);
    public function getCakeInterested($interested_id);
    public function linkCake($interested_id, $cake_id);
}
