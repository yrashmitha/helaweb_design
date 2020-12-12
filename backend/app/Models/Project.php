<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Project
 * @package App\Models
 * @version September 21, 2020, 6:48 pm UTC
 *
 * @property string $name
 * @property string $description
 * @property string $url
 * @property string $image_path
 * @property string $cover_path
 */
class Project extends Model
{
//    use SoftDeletes;

    public $table = 'projects';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


//    protected $dates = ['deleted_at'];



    public $fillable = [
        'name',
        'description',
        'url',
        'image_path',
        'cover_path'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'description' => 'string',
        'url' => 'string',
        'image_path' => 'string',
        'cover_path' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required|string|max:191',
        'description' => 'required|string|max:9999',
        'url' => 'required|string|max:191',
//        'image_path' => 'required|string|max:191',
//        'cover_path' => 'required|string|max:191',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];


}
