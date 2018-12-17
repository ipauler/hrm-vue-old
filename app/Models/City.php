<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class City extends Model {
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'cities';
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
    protected $hidden = [ 'id' ];
    /**
     * The attributes excluded from the model's
     * JSON form.
     *
     * @var array
     */
    protected $visible = [ 'name' ];
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
    protected $fillable = [ 'name' ];
}
