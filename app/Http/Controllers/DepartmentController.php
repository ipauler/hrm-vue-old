<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Repositories\Employee\EmployeeRepository;
use App\Repositories\Profile\ProfileRepository;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Repositories\Department\DepartmentRepository;

class DepartmentController extends Controller {
    private $department;
    private $profile;
    private $employee;

    public function __construct(DepartmentRepository $department, ProfileRepository $profile, EmployeeRepository $employee) {
        $this->department = $department;
        $this->employee = $employee;
        $this->profile = $profile;
    }

    /**
     * Return list of departments
     *
     * @return static[]
     */
    public function index() {
        $departments = $this->department->all();
        foreach ($departments as $department) {
            $department->staff;

        }
//        return response()->json($departments);
        return response()->json($departments->toArray());
//        return view( 'department.index' )->with( 'departments', json_decode( $departments ) );
    }

    /**
     * Get the specified department
     *
     * @param  int $id
     *
     * @return static[]
     */
    public function unit($id) {
        // return view('department.profile')->with('department', json_decode($this->department->find($id)));
    }

    /**
     * Create department
     *
     * @return Response
     */
    public function create() {
        $employee = $this->employee->all();
        dd($employee);
        return request()->json([
            'headed_by' => $employee,
            'staff' => $employee
        ]);
    }

    /**
     * Create department
     * @param Request $request
     * @return Response
     */
    public function store(Request $request) {
        $department = $this->department->create($request->all());
        return response()->json($department);
    }

    /**
     * Update the specified department
     *
     * @param  Department $department
     * @param  Request $request
     *
     * @return Response
     */
    public function update(Department $department, Request $request) {
        $this->department->update($department, $request->all());
        return response()->json(['status' => true]);
    }

    /**
     * Delete the specified department
     *
     * @param  Department $department
     *
     * @return bool
     */
    public function delete(Department $department) {
        $this->department->delete($department);
        return response()->json(['status' => true]);
    }
}
