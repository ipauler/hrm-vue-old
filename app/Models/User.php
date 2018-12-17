<?php
namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable {

    use Notifiable;
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';

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
    protected $hidden = array ('id',
                               'password',
                               'remember_token');

    /**
     * The attributes excluded from the model's
     * JSON form.
     *
     * @var array
     */
    protected $visible = array ('name',
                                'email',
                                'created_at',
                                'updated_at',);

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
                                 'email',
                                 'password');

    /**
     * The relations to eager load on every query.
     *
     * @var array
     */
    protected $with = array ('vacancy',
                             'tracking',
                             'roleuser');

    /**
     * Relationships to Role model
     */
    public function roleuser() {
        return $this->hasOne(RoleUser::class, 'user_id', 'id');
    }

    /**
     * Relationships to Vacancy model
     */
    public function vacancy() {
        return $this->belongsTo(Vacancy::class, 'processed_by', 'id');
    }

    /**
     * Relationships to Tracking model
     */
    public function tracking() {
        return $this->hasMany(Tracking::class, 'tracked_by', 'id');
    }

}