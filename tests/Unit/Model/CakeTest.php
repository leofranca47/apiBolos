<?php

namespace Tests\Unit\Model;

use App\Models\Cake;
use PHPUnit\Framework\TestCase;

class CakeTest extends TestCase
{
    public function setUp(): void
    {
        parent::setUp();
        $this->fillable = (new Cake)->getFillable();
    }

    public function testShouldReturnCakeFillable()
    {
        $expected = [
            'name',
            'weigth',
            'price',
            'amount',
            'created_at',
            'updated_at'
        ];

        $this->assertEquals($expected, $this->fillable);
    }
}
