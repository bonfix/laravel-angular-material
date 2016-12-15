<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Participant
 * @package App\Models
 * @version December 15, 2016, 6:27 pm UTC
 */
class Participant extends Model
{
    use SoftDeletes;

    public $table = 'participants';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'fn',
        'ln',
        'sn',
        'phone',
        'email',
        'county',
        'subc',
        'ward',
        'village',
        'dob',
        'b_name',
        'b_branch',
        'b_ac_name',
        'b_ac_no',
        'created_by',
        'updated_by',
        'deleted_by'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'fn' => 'string',
        'ln' => 'string',
        'sn' => 'string',
        'phone' => 'string',
        'email' => 'string',
        'county' => 'string',
        'subc' => 'string',
        'ward' => 'string',
        'village' => 'string',
        'dob' => 'string',
        'b_name' => 'string',
        'b_branch' => 'string',
        'b_ac_name' => 'string',
        'b_ac_no' => 'string',
        'created_by' => 'integer',
        'updated_by' => 'integer',
        'deleted_by' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
