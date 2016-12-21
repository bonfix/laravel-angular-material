<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Sms
 * @package App\Models
 * @version December 21, 2016, 6:30 pm UTC
 */
class Sms extends Model
{
    use SoftDeletes;

    public $table = 'sms';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        '_id',
        'body',
        'person',
        'read',
        'seen',
        'date_received',
        'date_sent',
        'thread_id',
        'status',
        'address',
        'type',
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
        '_id' => 'integer',
        'body' => 'string',
        'person' => 'integer',
        'thread_id' => 'integer',
        'status' => 'string',
        'address' => 'string',
        'type' => 'string',
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
