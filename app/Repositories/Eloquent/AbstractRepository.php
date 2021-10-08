<?php

namespace App\Repositories\Eloquent;

use Exception;

abstract class AbstractRepository
{
    protected $model;

    protected function resolveModel()
    {
        return app($this->model);
    }

    public function findFirst(String $colunm, $value)
    {
        $model = $this->resolveModel();
        return $model->where($colunm, $value)->first();
    }

    public function findAll()
    {
        $model = $this->resolveModel();
        return $model->all();
    }


    public function create($data)
    {
        try {
            $model = $this->resolveModel();
            return $model->create($data);
        } catch (Exception $exception) {
            throw new Exception($exception->getMessage());
        }
    }

    public function update($data)
    {
        try {
            $model = $this->resolveModel();
            $return = $model->whereId($data['id'])->update($data);
            return $model->whereId($data['id'])->first();
        } catch (Exception $exception) {
            throw new Exception($exception->getMessage());
        }
    }

    public function delete($id)
    {
        try {
            $model = $this->resolveModel();
            return $model->whereId($id)->delete();
        } catch (Exception $exception) {
            throw new Exception($exception->getMessage());
        }
    }

    public function find($id)
    {
        try {
            $model = $this->resolveModel();
            return $model->whereId($id)->first();
        } catch (Exception $exception) {
            throw new Exception($exception->getMessage());
        }
    }
}
