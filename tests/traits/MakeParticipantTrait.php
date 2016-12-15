<?php

use Faker\Factory as Faker;
use App\Models\Participant;
use App\Repositories\ParticipantRepository;

trait MakeParticipantTrait
{
    /**
     * Create fake instance of Participant and save it in database
     *
     * @param array $participantFields
     * @return Participant
     */
    public function makeParticipant($participantFields = [])
    {
        /** @var ParticipantRepository $participantRepo */
        $participantRepo = App::make(ParticipantRepository::class);
        $theme = $this->fakeParticipantData($participantFields);
        return $participantRepo->create($theme);
    }

    /**
     * Get fake instance of Participant
     *
     * @param array $participantFields
     * @return Participant
     */
    public function fakeParticipant($participantFields = [])
    {
        return new Participant($this->fakeParticipantData($participantFields));
    }

    /**
     * Get fake data of Participant
     *
     * @param array $postFields
     * @return array
     */
    public function fakeParticipantData($participantFields = [])
    {
        $fake = Faker::create();

        return array_merge([
            'fn' => $fake->word,
            'ln' => $fake->word,
            'sn' => $fake->word,
            'phone' => $fake->word,
            'email' => $fake->word,
            'county' => $fake->word,
            'subc' => $fake->word,
            'ward' => $fake->word,
            'village' => $fake->word,
            'dob' => $fake->word,
            'b_name' => $fake->word,
            'b_branch' => $fake->word,
            'b_ac_name' => $fake->word,
            'b_ac_no' => $fake->word,
            'created_at' => $fake->date('Y-m-d H:i:s'),
            'updated_at' => $fake->date('Y-m-d H:i:s'),
            'deleted_at' => $fake->date('Y-m-d H:i:s'),
            'created_by' => $fake->randomDigitNotNull,
            'updated_by' => $fake->randomDigitNotNull,
            'deleted_by' => $fake->randomDigitNotNull
        ], $participantFields);
    }
}
