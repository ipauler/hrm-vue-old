<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vacancy extends Model {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'vacancies';

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
    protected $hidden = array ();

    /**
     * The attributes excluded from the model's
     * JSON form.
     *
     * @var array
     */
    protected $visible = array ('id',
                                'name',
                                'description',
                                'status',
                                'deadline',
                                'processed_by',
                                'comments');

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
                                 'description',
                                 'status_id',
                                 'deadline',
                                 'processed_by',
                                 'comments');

    /**
     * Relationships to Status model
     */
    public function status() {
        return $this->hasOne(Status::class, 'id', 'status_id');
    }

    /**
     * Relationships to User model
     */
    public function user() {
        return $this->hasOne(User::class, 'id', 'processed_by');
    }

    /**
     * Relationships to Tracking model
     */
    public function tracking() {
        return $this->hasMany(Tracking::class, 'vacancy_id', 'id');
    }

    /**
     * Relationships to Participation model
     */
    public function participation() {
        return $this->hasMany(Participation::class, 'vacancy_id', 'id');
    }
}
