<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tracking extends Model {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'trackings';

    /**
     * The primary key for a table used by the
     * model.
     *
     * @var string
     */
    protected $primaryKey = null;

    /**
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
    protected $visible = array ('vacancy_id',
                                'tracked_by',
                                'tracked_from');

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
    protected $fillable = array ('vacancy_id',
                                 'tracked_by',
                                 'tracked_from');

    /**
     * Relationships to Vacancy model
     */
    public function vacancy() {
        return $this->belongsTo(Vacancy::class, 'id', 'vacancy_id');
    }

    /**
     * Relationships to User model
     */
    public function user() {
        return $this->belongsTo(User::class, 'id', 'tracked_by');
    }
}
