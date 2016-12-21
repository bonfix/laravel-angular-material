<?php

namespace App\Repositories;

use App\Models\Sms;
use InfyOm\Generator\Common\BaseRepository;

class SmsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
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
     * Configure the Model
     **/
    public function model()
    {
        return Sms::class;
    }
}
