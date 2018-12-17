<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Department extends Model {
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'departments';
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
                           'headed_by',
                           'staff' ];
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
                            'headed_by_id' ];
    /**
     * The relations to eager load on every query.
     *
     * @var array
     */
    protected $with = [ 'headed_by' ];

    /**
     * Relationships to Employee model
     */
    public function headed_by () {
        return $this->hasOne( Profile::class, 'profileable_id', 'headed_by_id' );
    }

    public function staff () {
        return $this->hasMany( Employee::class, 'department_id', 'id' );
    }
}
