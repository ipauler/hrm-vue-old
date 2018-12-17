<?php
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use Illuminate\Support\Facades\Route;

Auth::routes();
Route::get( '/', function () {
    return view( 'layouts.master' );
} );
/**
 * For authorised users only
 */

Route::bind('project', function ($id) {
    return app(\App\Repositories\Project\ProjectRepository::class)->find($id);
});
Route::bind('user', function ($id) {
    return app(\App\Repositories\Project\ProjectRepository::class)->find($id);
});
Route::bind('employee', function ($id) {
    return app(\App\Repositories\Project\ProjectRepository::class)->find($id);
});
Route::bind('candidate', function ($id) {
    return app(\App\Repositories\Project\ProjectRepository::class)->find($id);
});
Route::bind('department', function ($id) {
    return app(\App\Repositories\Project\ProjectRepository::class)->find($id);
});



//Route::group( [ 'middleware' => [ 'auth' ] ], function () {
    /**
     * Main Routes
     */
//    Route::get( '/', 'DashboardController@index' )->name( 'dashboard' );
    Route::get( '/logout', 'Auth\LoginController@logout' );
    /**
     * Users Routes
     */
    Route::group( [ 'prefix' => 'user' ], function () {
        Route::get( '/', 'UserController@index' )->name( 'users' );
        Route::get( 'create', 'UserController@create' )->name( 'user.create' );
        Route::post( 'store', 'UserController@store' )->name( 'user.store' );
        Route::post( 'update/{user}', 'UserController@update' )->name( 'user.update' );
        Route::post( 'delete/{user}', 'UserController@delete' )->name( 'user.delete' );
    } );
    /**
     * Employees Routes
     */
    Route::group( [ 'prefix' => 'employee' ], function () {
        Route::get( '/', 'EmployeeController@index' )->name( 'employees' );
        Route::get( 'create', 'EmployeeController@create' )->name( 'employee.create' );
        Route::post( 'store', 'EmployeeController@store' )->name( 'employee.store' );
        Route::post( 'update/{employee}', 'EmployeeController@update' )->name( 'employee.update' );
        Route::post( 'delete/{employee}', 'EmployeeController@delete' )->name( 'employee.delete' );
    } );
    /**
     * Candidates Routes
     */
    Route::group( [ 'prefix' => 'candidate' ], function () {
        Route::get( '/', 'CandidateController@index' )->name( 'candidates' );
        Route::get( 'create', 'CandidateController@create' )->name( 'candidate.create' );
        Route::post( 'store', 'CandidateController@store' )->name( 'candidate.store' );
        Route::post( 'update/{candidate}', 'CandidateController@update' )->name( 'candidate.update' );
        Route::post( 'delete/{candidate}', 'CandidateController@delete' )->name( 'candidate.delete' );

    } );
    /**
     * Departments Routes
     */
    Route::group( [ 'prefix' => 'department' ], function () {
        Route::get( '/', 'DepartmentController@index' )->name( 'departments' );
        Route::get( 'create', 'DepartmentController@create' )->name( 'department.create' );
        Route::post( 'store', 'DepartmentController@store' )->name( 'department.store' );
        Route::post( 'update/{department}', 'DepartmentController@update' )->name( 'department.update' );
        Route::post( 'delete/{department}', 'DepartmentController@delete' )->name( 'department.delete' );
    } );
    /**
     * Projects Routes
     */



    Route::group( [ 'prefix' => 'project' ], function () {
        Route::get( '/', 'ProjectController@index' )->name( 'projects' );
        Route::get( 'create', 'ProjectController@create' )->name( 'project.create' );
        Route::post( 'store', 'ProjectController@store' )->name( 'project.store' );
        Route::post( 'update/{project}', 'ProjectController@update' )->name( 'project.update' );
        Route::post( 'delete/{project}', 'ProjectController@delete' )->name( 'project.delete' );
    } );
    /**
     * Roles.vue Routes
     */
    //Route::get('roles', 'RolesController@index')->name('roles');
//} );

