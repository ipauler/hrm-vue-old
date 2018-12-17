<?php
namespace App\Http\Controllers;

use App\Http\Requests\User\CreateRequest;
use App\Http\Requests\User\UpdateRequest;
use App\Http\Controllers\Controller;
use App\Repositories\User\UserRepository as User;

//use App\Repositories\Role\RoleRepository as Role; //TODO: create Role repository, controller
class UserController extends Controller {
    private $user;
    private $role;

    public function __construct ( User $user/* ,Role $role*/ ) {
        $this->user = $user;
        // $this->role = $role;
    }

    /**
     * Get list of users with all relations
     *
     * @return static[]
     */
    public function index () {
       return response()->json($this->user->all()->toArray());
//        return view( 'user.index' )->with( 'users', $this->user->all() );
    }

    /**
     * Get the specified user
     *
     * @param  int $id
     *
     * @return static[]
     */
    public function profile ( $id ) {
        return view( 'user.profile' )->with( 'user', $this->user->find( $id ) );
    }

    /**
     * Route to user create form
     *
     * @return \Illuminate\View\View
     */
    public function create () {
        return view( 'user.create' );//->with($this->roles->listAllRoles());
    }

    /**
     * Create new user
     * TODO: add validation of form data - App\Http\Requests\User\CreateRequest
     *
     * @param  array $data
     *
     * @return \Illuminate\Http\Response
     */
    public function store ( $data ) {
        //TODO: store to DB and route to profile with new ID
        return view( 'user.profile' )->with( 'user', $this->user->find( $id ) );
    }

    /**
     * Update existing user
     * TODO: add validation of form data - App\Http\Requests\User\UpdateRequest
     *
     * @param  int   $id
     * @param  array $data
     *
     * @return \Illuminate\Http\Response
     */
    public function update ( $data, $id ) {
        return view( 'user.update' );
    }

    /**
     * Delete a specified user
     *
     * @param  int $id
     *
     * @return bool
     */
    public function delete ( $id ) {
        return view( 'user.delete' );
    }
}
