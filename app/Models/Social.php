<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Social extends Model {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'socials';

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
                               'profile_id');

    /**
     * The attributes excluded from the model's
     * JSON form.
     *
     * @var array
     */
    protected $visible = array ('github',
                                'facebook',
                                'linkedin',
                                'dou');

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
    protected $fillable = array ('profile_id',
                                 'github',
                                 'facebook',
                                 'linkedin',
                                 'dou');

    /**
     * Relationship to Profile model
     */
    public function socials() {
        return $this->belongsTo(Profile::class, 'profileable_id', 'profile_id');
    }

}
