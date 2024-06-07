<?php

namespace Tests\Feature;

use App\Models\Tenistas;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class TenistasControllerTest extends TestCase
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
        $response = $this->get('/tenistas');
        $response->assertViewIs('tenistas.index');
        $response->assertStatus(200);
    }


    public function test_create_view()
    {
        $response = $this->get('/tenistas/create');
        $response->assertViewIs('tenistas.create');
        $response->assertStatus(200);
    }

//    public function test_create()
//    {
//        $tenistaData = Tenistas::factory()->make()->toArray();
//        $tenistaData['imagen'] = \Illuminate\Http\UploadedFile::fake()->image('tenista.jpg');
//        $response = $this->post('/tenistas', $tenistaData);
//        $response->assertRedirect(route('tenistas.index'));
//    }


    public function test_create_validation_error()
    {
        $tenistaData = Tenistas::factory()->make(['nombre' => ''])->toArray();
        $tenistaData['imagen'] = \Illuminate\Http\UploadedFile::fake()->image('tenista.jpg');
        $response = $this->post('/tenistas', $tenistaData);
        $response->assertSessionHasErrors('nombre');
    }
//        public function test_update()
//    {
//        $tenista = Tenistas::factory()->create();
//        $tenista->nombre = "Juan";
//        $response = $this->put('/tenistas/' . $tenista->id, $tenista->toArray());
//        $response->assertRedirect('/tenistas/' . $tenista->id);
//        $this->assertDatabaseHas('tenistas', ['id' => $tenista->id, 'nombre' => 'Juan']);
//    }
//
//    public function test_update_view()
//    {
//        $tenista = Tenistas::factory()->create();
//        $response = $this->get('/tenistas/' . $tenista->id . '/edit');
//        $response->assertRedirectToRoute('login');
//        $response->assertStatus(302);
//    }
//    public function test_delete()
//    {
//        $tenista = Tenistas::factory()->create();
//        $response = $this->delete('/tenistas/' . $tenista->id);
//        $response->assertRedirect('/tenistas');
//    }
}

