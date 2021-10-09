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

    public function getInterestedCake($cake_id)
    {
        return $this->cake->with('interestedList')->whereId($cake_id)->get();
    }

    public function linkInterested($cake_id, $interested_id)
    {
        $cake = $this->cake->find($cake_id);
        // todoleo vincular só se ja nao exitir vinculo
        if (isset($cake->interestedList)) {
            return $this->cake->with('interestedList')->find($cake_id);
        }
        $cake->interestedList()->attach($interested_id);
        return $this->cake->with('interestedList')->find($cake_id);
    }


}
