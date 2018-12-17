<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model {
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'employees';
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
    public $timestamps = true;
    /**
     * The attributes excluded from the model's
     * JSON form.
     *
     * @var array
     */
    protected $hidden = [];
    /**
     * The attributes excluded from the model's
     * JSON form.
     *
     * @var array
     */
    protected $visible = ['id',
        'startdate',
        'enddate',
        'status',
        'profile',
        'salary',
        'vacations',
        'department',
        'projects',
        'created_at',
        'updated_at'];
    /**
     * Protected columns from mass assignment.
     *
     * @var array
     */
    protected $guarded = [];
    /**
     * Accepted columns for mass assignment.
     *
     * @var array
     */
    protected $fillable = [
        'startdate',
        'enddate',
        'department_id',
        'status'];
    /**
     * The relations to eager load on every query.
     *
     * @var array
     */
    protected $with = [
        'profile',
        'salary',
        'vacations',
        'department',
        'projects'
    ];

    /**
     * Relationships to profile model
     */
    public function profile() {
        return $this->morphOne(Profile::class, 'profileable');
    }

    /**
     * Relationships to Salary model
     */
    public function salary() {
        return $this->hasOne(Salary::class, 'employee_id', 'id');
    }

    /**
     * Relationships to Vacation model
     */
    public function vacations() {
        return $this->hasMany(Vacation::class, 'employee_id', 'id');
    }

    /**
     * Relationships to Department model
     */
    public function department() {
        return $this->hasOne(Department::class, 'id', 'department_id');
    }

    /**
     * Relationships to Project model
     */
    public function projects() {
        return $this->hasMany(Project::class, 'id');
    }
}
