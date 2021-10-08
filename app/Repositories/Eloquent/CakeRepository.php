<?php

namespace App\Repositories\Eloquent;

use App\Models\Cake;
use App\Repositories\Contracts\CakeRepositoryInterface;

class CakeRepository extends AbstractRepository implements CakeRepositoryInterface
{
    protected $model = Cake::class;
    private $cake;

    public function __construct(Cake $cake)
    {
        $this->cake = $cake;
    }


}
