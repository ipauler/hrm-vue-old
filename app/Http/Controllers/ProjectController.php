<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Repositories\Project\ProjectRepository ;
use App\Models\Project as Project;
use App\Repositories\Profile\ProfileRepository as Profile;
use App\Repositories\Department\DepartmentRepository as Department;
use App\Repositories\Stage\StageRepository as Stage;


class ProjectController extends Controller {

    private $project, $manager, $department, $stage;


    public function __construct(ProjectRepository $project, Profile $profile, Department $department, Stage $stage) {
        $this->project = $project;
        $this->manager = $profile;
        $this->department = $department;
        $this->stage = $stage;

    }

    /**
     * Return list of projects
     *
     * @return static[]
     */
    public function index() {
        //dd($this->project->all()->toArray());
//        return view( 'project.index' )->with( 'projects', json_decode( $this->project->all() ) );
        return response()->json($this->project->all());
    }

    /**
     * Get the specified project
     *
     * @param  int $id
     *
     * @return static[]
     */
    public function profile($id) {
        dd($this->project->find($id)->toArray());
        //return view('project.profile')->with('project', $this->project->find($id));
    }

    /**
     * Create user
     *
     * @return Response
     */
    public function create() {


        return response()->json([
            'managers' => $this->manager->allManagers(['id', 'name']),
            'departments' => $this->department->all(['id', 'name']),
            'stage' => $this->stage->all(['id', 'name']),
        ]);
    }

    /**
     * Store project
     *
     * @param Request $request
     * @return Project
     */

    public function store(Request $request) {
        $project = $this->project->create($request->all());
        return response()->json($project);
    }

    /**
     * Update the specified project
     *
     * @param  Project $project
     * @param  Request $request
     *
     * @return Response
     */
    public function update(Project $project, Request $request) {
        $this->project->update($project, $request->all());
        return response()->json(['status' => true]);
    }

    /**
     * Delete the specified project
     *
     * @param  Project $project
     *
     * @return bool
     */
    public function delete(Project $project) {
        $this->project->delete($project);
        return response()->json(['status' => true]);
    }
}
