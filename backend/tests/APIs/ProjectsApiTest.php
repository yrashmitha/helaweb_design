<?php namespace Tests\APIs;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;
use App\Models\Projects;

class ProjectsApiTest extends TestCase
{
    use ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function test_create_projects()
    {
        $projects = factory(Projects::class)->make()->toArray();

        $this->response = $this->json(
            'POST',
            '/api/projects', $projects
        );

        $this->assertApiResponse($projects);
    }

    /**
     * @test
     */
    public function test_read_projects()
    {
        $projects = factory(Projects::class)->create();

        $this->response = $this->json(
            'GET',
            '/api/projects/'.$projects->id
        );

        $this->assertApiResponse($projects->toArray());
    }

    /**
     * @test
     */
    public function test_update_projects()
    {
        $projects = factory(Projects::class)->create();
        $editedProjects = factory(Projects::class)->make()->toArray();

        $this->response = $this->json(
            'PUT',
            '/api/projects/'.$projects->id,
            $editedProjects
        );

        $this->assertApiResponse($editedProjects);
    }

    /**
     * @test
     */
    public function test_delete_projects()
    {
        $projects = factory(Projects::class)->create();

        $this->response = $this->json(
            'DELETE',
             '/api/projects/'.$projects->id
         );

        $this->assertApiSuccess();
        $this->response = $this->json(
            'GET',
            '/api/projects/'.$projects->id
        );

        $this->response->assertStatus(404);
    }
}
