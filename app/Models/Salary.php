<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Salary extends Model {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'salaries';

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
    protected $hidden = array ('id',
                               'employee_id');

    /**
     * The attributes excluded from the model's
     * JSON form.
     *
     * @var array
     */
    protected $visible = array ('salary',
                                'start_date',
                                'end_date');

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
    protected $fillable = array ('employee_id',
                                 'salary',
                                 'start_date',
                                 'end_date');

    /**
     * Relationships to Employee model
     */
    public function employee() {
        return $this->belongsTo(Employee::class, 'employee_id', 'id');
    }
}
