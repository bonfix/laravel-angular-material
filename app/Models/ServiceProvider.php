<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class ServiceProvider
 * @package App\Models
 * @version December 15, 2016, 8:17 pm UTC
 */
class ServiceProvider extends Model
{
    use SoftDeletes;

    public $table = 'providers';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'name',
        'contract_no',
        'service',
        'course',
        'capacity',
        'p_name',
        'p_address',
        'p_location',
        'phone',
        'email',
        'county',
        'subc',
        'ward',
        'village',
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
        'name' => 'string',
        'contract_no' => 'string',
        'service' => 'string',
        'course' => 'string',
        'capacity' => 'integer',
        'p_name' => 'string',
        'p_address' => 'string',
        'p_location' => 'string',
        'phone' => 'string',
        'email' => 'string',
        'county' => 'string',
        'subc' => 'string',
        'ward' => 'string',
        'village' => 'string',
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
