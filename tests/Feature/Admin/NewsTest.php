<?php

namespace Tests\Feature\Admin;

use Tests\TestCase;

class NewsTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_index_status_success(): void
    {
        $response = $this->get(route('admin.news.index'));

        $response->assertStatus(200);
    }
    public function test_create_status_success(): void
    {
        $response = $this->get(route('admin.news.create'));

        $response->assertStatus(200);
    }
    public function test_store_status_success(): void
    {
        $data =[
            'title' => 'Some title',
            'author' => 'Admin',
            'description' => 'Some text'
        ];
        $response = $this->post(route('admin.news.store'), $data);

        $response->assertJson($data)
                 ->assertCreated();
    }


}
