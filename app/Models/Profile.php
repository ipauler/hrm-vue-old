<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model {
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'profiles';
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
    protected $hidden = [ 'profileable_id',
                          'profileable_type',
                          'created_at',
                          'updated_at' ];
    /**
     * The attributes excluded from the model's
     * JSON form.
     *
     * @var array
     */
    protected $visible = [ 'id',
                           'name',
                           'surname',
                           'birthdate',
                           'experience',
                           'image',
                           'contacts',
                           'socials',
                           'city',
                           'technology',
                           'level' ];
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
    protected $fillable = [ 'profileable_id',
                            'profileable_type',
                            'name',
                            'surname',
                            'birthdate',
                            'experience',
                            'city_id',
                            'technology_id',
                            'level_id' ];
    /**
     * The relations to eager load on every query.
     *
     * @var array
     */
    protected $with = [ 'image',
                        'contacts',
                        'socials',
                        'city',
                        'technology',
                        'level' ];

    /**
     * Relationships to Employee or Candidate
     * models
     */
    public function profile () {
        return $this->morphTo();
    }

    /**
     * Relationships to Image model
     */
    public function image () {
        return $this->hasOne( Image::class, 'profile_id', 'profileable_id' );
    }

    /**
     * Relationships to Contact model
     */
    public function contacts () {
        return $this->hasOne( Contact::class, 'profile_id', 'profileable_id' );
    }

    /**
     * Relationships to Socials model
     */
    public function socials () {
        return $this->hasOne( Social::class, 'profile_id', 'profileable_id' );
    }

    /**
     * Relationships to City model
     */
    public function city () {
        return $this->hasOne( City::class, 'id', 'city_id' );
    }

    /**
     * Relationships to Technology model
     */
    public function technology () {
        return $this->hasOne( Technology::class, 'id', 'technology_id' );
    }

    /**
     * Relationships to Level model
     */
    public function level () {
        return $this->hasOne( Level::class, 'id', 'level_id' );
    }
}
