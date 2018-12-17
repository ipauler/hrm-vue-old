<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Image extends Model {


    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'images';

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
    protected $hidden = array('id',
        'profile_id');

    /**
     * The attributes excluded from the model's
     * JSON form.
     *
     * @var array
     */
    protected $visible = array('image_path');

    /**
     * Protected columns from mass assignment.
     *
     * @var array
     */
    protected $guarded = array();

    /**
     * Accepted columns for mass assignment.
     *
     * @var array
     */
    protected $fillable = array('profile_id',
        'image_path');

    /**
     * Relationships to Profile model
     */
    public function image() {
        return $this->belongsTo(Profile::class, 'profile_id', 'profileable_id');
    }

    public function getImage() {
        return storage_path('app/public') . '/' . $this->image_path;
    }
}
