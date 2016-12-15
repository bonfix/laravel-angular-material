<?php

namespace App\Repositories;

use App\Models\Participant;
use InfyOm\Generator\Common\BaseRepository;

class ParticipantRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
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
     * Configure the Model
     **/
    public function model()
    {
        return Participant::class;
    }
}
