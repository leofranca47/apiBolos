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
        return $this->cake->with('interestedList')->whereId($cake_id)->first();
    }

    public function linkInterested($cake_id, $interested_id)
    {
        $cake = $this->cake->with('interestedList')->find($cake_id);
        foreach ($cake->interestedList as $link) {
            if($link->interested_id == $interested_id) {
                return $cake;
            }
        }
        $cake->interestedList()->attach($interested_id);
        return $this->cake->with('interestedList')->find($cake_id);
    }


}
