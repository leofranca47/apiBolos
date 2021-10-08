<?php

namespace Tests\Feature\Controller;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Symfony\Component\HttpFoundation\Response;
use Tests\TestCase;

class CakeControllerTest extends TestCase
{
    public function testShouldGetAllCakes()
    {
        $response = $this->getJson('/api/cakes');
        $response->assertStatus(Response::HTTP_OK)
            ->assertJsonStructure([
                "data" =>[
                    'name',
                    'weigth',
                    'price',
                    'amount',
                    'updated_at',
                    'created_at'
                    ]
            ]);
    }

    public function testShouldStoreCake()
    {
        $body = [
            'name' => 'Chocolate',
            'weigth' => 10,
            'price' => 10.50,
            'amount' => 20
        ];
        $response = $this->postJson('/api/cake',$body);
        $response->assertStatus(Response::HTTP_CREATED)
            ->assertJsonStructure([
                "data" =>[
                'name',
                'weigth',
                'price',
                'amount',
                'updated_at',
                'created_at'
                ]
            ]);
    }
}
