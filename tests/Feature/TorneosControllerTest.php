<?php

namespace Tests\Feature;

use App\Models\Torneos;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class TorneosControllerTest extends TestCase
{
    use RefreshDatabase;

    public function setUp(): void
    {
        parent::setUp();
        $this->artisan('migrate:fresh');
        $this->artisan('db:seed');
    }

    public function test_index()
    {
        $response = $this->get('/torneos');
        $response->assertViewIs('torneos.index');
        $response->assertStatus(200);
    }


    public function test_create_view()
    {
        $response = $this->get('/torneos/create');
        $response->assertViewIs('torneos.create');
        $response->assertStatus(200);
    }

    public function test_create()
    {
        $torneoData = Torneos::factory()->make()->toArray();
        $torneoData['imagen'] = \Illuminate\Http\UploadedFile::fake()->image('torneo.jpg');
        $response = $this->post('/torneos', $torneoData);
        $response->assertRedirect('/torneos');
    }

    public function test_create_validation_error()
    {
        $torneoData = Torneos::factory()->make(['ubicacion' => ''])->toArray();
        $torneoData['imagen'] = \Illuminate\Http\UploadedFile::fake()->image('torneo.jpg');
        $response = $this->post('/torneos', $torneoData);
        $response->assertSessionHasErrors('ubicacion');
    }

//    public function test_update()
//    {
//        $torneo = Torneos::factory()->create();
//        $torneo->ubicacion = "Updated Location";
//        $response = $this->put('/torneos/' . $torneo->id, $torneo->toArray());
//        $response->assertRedirect('/torneos/' . $torneo->id);
//        $this->assertDatabaseHas('torneos', ['id' => $torneo->id, 'ubicacion' => 'Updated Location']);
//    }
//
//    public function test_update_view()
//    {
//        $torneo = Torneos::factory()->create();
//        $response = $this->get('/torneos/' . $torneo->id . '/edit');
//        $response->assertRedirectToRoute('login');
//        $response->assertStatus(302);
//    }
//    public function test_delete()
//    {
//        $torneo = Torneos::factory()->create();
//        $response = $this->delete('/torneos/' . $torneo->id);
//        $response->assertRedirect('/torneos');
//    }
}
