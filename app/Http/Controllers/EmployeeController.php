<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Repositories\Employee\EmployeeRepository;

class EmployeeController extends Controller {
    private $employee;

    public function __construct(EmployeeRepository $employee) {
        $this->employee = $employee;
    }

    /**
     * Return list of employees
     *
     * @return static[]
     */
    public function index() {
        //dd( $this->employee->all()->toArray() );
//        return response()->json($this->employee->all());
        return $this->employee->all()->toJson();
//        return view( 'employee.index' )->with( 'employees', json_decode( $this->employee->all() ) );
    }

    /**
     * Get the specified employee
     *
     * @param  int $id
     *
     * @return static[]
     */
    public function profile($id) {
        //dd( $this->employee->find( $id )->toArray() );
        return view('employee.profile')->with('employee', json_decode($this->employee->find($id)));
    }

    /**
     * Create employee
     *
     * @return Response
     */
    public function create() {
        return view('employee.create');
    }

    /**
     * Create employee
     * @param Request $request
     * @return Response
     */
    public function store(Request $request) {
        $employee = $this->employee->create($request->all());
        return response()->json($employee);
    }


    /**
     * Update the specified employee
     *
     * @param  Employee $employee
     * @param  Request $request
     *
     * @return Response
     */
    public function update(Employee $employee, Request $request) {
        $this->employee->update($employee, $request->all());
        return response()->json(['status' => true]);
    }

    /**
     * Delete the specified employee
     *
     * @param  Employee $employee
     *
     * @return bool
     */
    public function delete(Employee $employee) {
        $this->employee->delete($employee);
        return response()->json(['status' => true]);
    }
}
