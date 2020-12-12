<?php namespace Tests\Repositories;

use App\Models\Projects;
use App\Repositories\ProjectsRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;

class ProjectsRepositoryTest extends TestCase
{
    use ApiTestTrait, DatabaseTransactions;

    /**
     * @var ProjectsRepository
     */
    protected $projectsRepo;

    public function setUp() : void
    {
        parent::setUp();
        $this->projectsRepo = \App::make(ProjectsRepository::class);
    }

    /**
     * @test create
     */
    public function test_create_projects()
    {
        $projects = factory(Projects::class)->make()->toArray();

        $createdProjects = $this->projectsRepo->create($projects);

        $createdProjects = $createdProjects->toArray();
        $this->assertArrayHasKey('id', $createdProjects);
        $this->assertNotNull($createdProjects['id'], 'Created Projects must have id specified');
        $this->assertNotNull(Projects::find($createdProjects['id']), 'Projects with given id must be in DB');
        $this->assertModelData($projects, $createdProjects);
    }

    /**
     * @test read
     */
    public function test_read_projects()
    {
        $projects = factory(Projects::class)->create();

        $dbProjects = $this->projectsRepo->find($projects->id);

        $dbProjects = $dbProjects->toArray();
        $this->assertModelData($projects->toArray(), $dbProjects);
    }

    /**
     * @test update
     */
    public function test_update_projects()
    {
        $projects = factory(Projects::class)->create();
        $fakeProjects = factory(Projects::class)->make()->toArray();

        $updatedProjects = $this->projectsRepo->update($fakeProjects, $projects->id);

        $this->assertModelData($fakeProjects, $updatedProjects->toArray());
        $dbProjects = $this->projectsRepo->find($projects->id);
        $this->assertModelData($fakeProjects, $dbProjects->toArray());
    }

    /**
     * @test delete
     */
    public function test_delete_projects()
    {
        $projects = factory(Projects::class)->create();

        $resp = $this->projectsRepo->delete($projects->id);

        $this->assertTrue($resp);
        $this->assertNull(Projects::find($projects->id), 'Projects should not exist in DB');
    }
}
