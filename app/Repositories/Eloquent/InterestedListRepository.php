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


}
