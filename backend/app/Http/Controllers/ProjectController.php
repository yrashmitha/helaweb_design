<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateProjectRequest;
use App\Http\Requests\UpdateProjectRequest;
use App\Models\Project;
use App\Repositories\ProjectRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Illuminate\Session\Store;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Response;

class ProjectController extends AppBaseController
{
    /** @var  ProjectRepository */
    private $projectRepository;

    public function __construct(ProjectRepository $projectRepo)
    {
        $this->projectRepository = $projectRepo;
        $this->middleware('auth');
    }

    /**
     * Display a listing of the Project.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $projects = $this->projectRepository->all();

        return view('projects.index')
            ->with('projects', $projects);
    }

    /**
     * Show the form for creating a new Project.
     *
     * @return Response
     */
    public function create()
    {
        return view('projects.create');
    }

    /**
     * Store a newly created Project in storage.
     *
     * @param CreateProjectRequest $request
     *
     * @return Response
     */
    public function store(CreateProjectRequest $request)
    {
        $input = $request->all();

        $cover_path = $request->file('cover_path')->store('public/covers');
        $image_path = $request->file('image_path')->store('public/images');



        $input["cover_path"]=$cover_path;
        $input["image_path"]=$image_path;


        $project = $this->projectRepository->create($input);

        Flash::success('Project saved successfully.');

        return redirect(route('projects.index'));
    }

    /**
     * Display the specified Project.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $project = $this->projectRepository->find($id);

        if (empty($project)) {
            Flash::error('Project not found');

            return redirect(route('projects.index'));
        }



        $project["cover"]=explode("public",$project->cover_path,2)[1];
        $project["image"]=explode("public",$project->image_path,2)[1]    ;



        return view('projects.show')->with('project', $project);
    }

    /**
     * Show the form for editing the specified Project.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $project = $this->projectRepository->find($id);

        if (empty($project)) {
            Flash::error('Project not found');

            return redirect(route('projects.index'));
        }

        return view('projects.edit')->with('project', $project);
    }

    /**
     * Update the specified Project in storage.
     *
     * @param int $id
     * @param UpdateProjectRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateProjectRequest $request)
    {
        $project = $this->projectRepository->find($id);

        if (empty($project)) {
            Flash::error('Project not found');

            return redirect(route('projects.index'));
        }

        $input = $request->all();


        $cover_path = $request->file('cover_path')->store('public/covers');
        $image_path = $request->file('image_path')->store('public/images');


        $input["cover_path"]=$cover_path;
        $input["image_path"]=$image_path;

        $path=$project->image_path;
        $path2=$project->cover_path;
        $deletePath=$path;
//        dd($deletePath);
        $deletePath2=$path2;
        Storage::delete($deletePath);
        Storage::delete($deletePath2);

        $project = $this->projectRepository->update($input, $id);



        Flash::success('Project updated successfully.');

        return redirect(route('projects.index'));
    }

    /**
     * Remove the specified Project from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $project = $this->projectRepository->find($id);

        if (empty($project)) {
            Flash::error('Project not found');

            return redirect(route('projects.index'));
        }




        $this->projectRepository->custom_delete($id);

        Flash::success('Project deleted successfully.');

        return redirect(route('projects.index'));
    }
}
