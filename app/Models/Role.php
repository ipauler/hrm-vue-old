<?php
namespace App\Models;

use Zizaco\Entrust\EntrustRole;
use App\Models\Permission;

class Role extends EntrustRole {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'roles';

    /**
     * The primary key for a table used by the
     * model.
     *
     * @var string
     */
    protected $primaryKey = null;

    /**
     * /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = false;

    /**
     * Indicates if the model should to write
     * updated_at и created_at to db.
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * The attributes excluded from the model's
     * JSON form.
     *
     * @var array
     */
    protected $hidden = array ();

    /**
     * The attributes excluded from the model's
     * JSON form.
     *
     * @var array
     */
    protected $visible = array ('name',
                                'display_name',
                                'description');

    /**
     * Protected columns from mass assignment.
     *
     * @var array
     */
    protected $guarded = array ();

    /**
     * Accepted columns for mass assignment.
     *
     * @var array
     */
    protected $fillable = array ('name',
                                 'display_name',
                                 'description');

    /**
     * Relationships to User model
     */
    public function userRole() {
        return $this->hasMany(Role::class, 'user_id', 'id');
    }

    public function permissions() {
        return $this->belongsToMany(Permission::class, 'permission_role', 'role_id', 'permission_id');
    }
}
