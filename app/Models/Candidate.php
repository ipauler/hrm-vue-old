<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Candidate extends Model {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'candidates';

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
                                'profile',
                                'expected_salary',
                                'participations',
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
    protected $fillable = array ('expected_salary');

    /**
     * The relations to eager load on every query.
     *
     * @var array
     */
    protected $with = array ();

    /**
     * Relationships to Participation model
     */
    public function participations() {
        return $this->hasMany(Participation::class, 'candidate_id', 'id');
    }

}
