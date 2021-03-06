<?php

namespace App\Repositories\Eloquent;

use App\Models\InterestedList;
use App\Repositories\Contracts\InterestedListRepositoryInterface;

class InterestedListRepository extends AbstractRepository implements InterestedListRepositoryInterface
{
    protected $model = InterestedList::class;
    protected $interestedList;

    public function __construct(InterestedList $interestedList)
    {
        $this->interestedList = $interestedList;
    }

    public function getCakeInterested($interested_id)
    {
        return $this->interestedList->with('cake')->whereId($interested_id)->get();
    }

    public function linkCake($interested_id, $cake_id)
    {
        $interested = $this->interestedList->with('cake')->find($interested_id);
        foreach ($interested->cake as $link) {
            if($link->pivot->cake_id == $cake_id) {
                return $interested;
            }
        }
        $interested->cake()->attach($cake_id);
        return $this->interestedList->with('cake')->find($interested_id);
    }
}
