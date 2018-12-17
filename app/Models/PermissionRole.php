<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PermissionRole extends Model {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'permission_role';

    /**
     * The primary key for a table used by the
     * model.
     *
     * @var string
     */
    protected $primaryKey = 'permission_id';

    /**
     * Accepted columns for mass assignment.
     *
     * @var array
     */
    protected $fillable = array ('permission_id',
                                 'role_id');

    public function employee() {
        return $this->hasMany(PermissionRole::class, 'role_id', 3);
    }

    public function hasperm() {
        return $this->hasMany(Permission::class, 'Permission_role');
    }
}
