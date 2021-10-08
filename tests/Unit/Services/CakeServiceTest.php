<?php

namespace Tests\Unit\Services;

use App\Repositories\Eloquent\CakeRepository;
use App\Services\CakeService;
use PHPUnit\Framework\TestCase;

class CakeServiceTest extends TestCase
{
   public function testShouldReturnDataCakes()
   {
       $cakeRepositoryStub = $this->createMock(CakeRepository::class);
       $cakeRepositoryStub->method('findAll')
        ->willReturn([
            'name' => 'Chocolate',
            'price' => 10.00,
            'weight' => 10,
            'amount' => 20
        ]);

        $cakeService = new CakeService($cakeRepositoryStub);
        $response = $cakeService->findAll();

        $expected = [
            'name' => 'Chocolate',
            'price' => 10.00,
            'weight' => 10,
            'amount' => 20
        ];

        $this->assertEquals($expected, $response);
   }
}
