<?php

namespace App\Repositories;

use App\Models\ServiceProvider;
use InfyOm\Generator\Common\BaseRepository;

class ServiceProviderRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
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
     * Configure the Model
     **/
    public function model()
    {
        return ServiceProvider::class;
    }
}
