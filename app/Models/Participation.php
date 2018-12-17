<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Participation extends Model {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'participations';

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
    protected $hidden = array ('id');

    /**
     * The attributes excluded from the model's
     * JSON form.
     *
     * @var array
     */
    protected $visible = array ('vacancy_id',
                                'candidate_id');

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
                                 'candidate_id');

    /**
     * Relationships to Vacancy model
     */
    public function vacancy() {
        return $this->belongsTo(Vacancy::class, 'id', 'vacancy_id');
    }

    /**
     * Relationships to Candidate model
     */
    public function candidate() {
        return $this->belongsTo(Candidate::class, 'id', 'candidate_id');
    }
}
