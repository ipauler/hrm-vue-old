<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'projects';
    /**
     * The primary key for a table used by the
     * model.
     *
     * @var string
     */
    protected $primaryKey = 'id';
    /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = true;
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
    protected $hidden = [ ];
    /**
     * The attributes excluded from the model's
     * JSON form.
     *
     * @var array
     */
    protected $visible = [ 'id',
                           'name',
                           'description',
                           'started_from',
                           'deadline',
                           'manager',
                           'department',
                           'stage' ];
    /**
     * Protected columns from mass assignment.
     *
     * @var array
     */
    protected $guarded = [ ];
    /**
     * Accepted columns for mass assignment.
     *
     * @var array
     */
    protected $fillable = [ 'name',
                            'description',
                            'started_from',
                            'deadline',
                            'manager_id',
                            'department_id',
                            'stage_id' ];
    /**
     * The relations to eager load on every query.
     *
     * @var array
     */
    protected $with = [ 'stage',
                        'department',
                        'manager' ];

    /**
     * Relationships to Employee model
     */
    public function manager () {
        return $this->hasOne( Profile::class, 'profileable_id', 'manager_id' );
    }

    /**
     * Relationships to Department model
     */
    public function department () {
        return $this->hasOne( Department::class, 'id', 'department_id' );
    }

    /**
     * Relationships to Stage model
     */
    public function stage () {
        return $this->hasOne( Stage::class, 'id', 'stage_id' );
    }
}
