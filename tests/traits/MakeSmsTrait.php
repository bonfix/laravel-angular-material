<?php

use Faker\Factory as Faker;
use App\Models\Sms;
use App\Repositories\SmsRepository;

trait MakeSmsTrait
{
    /**
     * Create fake instance of Sms and save it in database
     *
     * @param array $smsFields
     * @return Sms
     */
    public function makeSms($smsFields = [])
    {
        /** @var SmsRepository $smsRepo */
        $smsRepo = App::make(SmsRepository::class);
        $theme = $this->fakeSmsData($smsFields);
        return $smsRepo->create($theme);
    }

    /**
     * Get fake instance of Sms
     *
     * @param array $smsFields
     * @return Sms
     */
    public function fakeSms($smsFields = [])
    {
        return new Sms($this->fakeSmsData($smsFields));
    }

    /**
     * Get fake data of Sms
     *
     * @param array $postFields
     * @return array
     */
    public function fakeSmsData($smsFields = [])
    {
        $fake = Faker::create();

        return array_merge([
            '_id' => $fake->randomDigitNotNull,
            'body' => $fake->text,
            'person' => $fake->randomDigitNotNull,
            'read' => $fake->word,
            'seen' => $fake->word,
            'date_received' => $fake->date('Y-m-d H:i:s'),
            'date_sent' => $fake->date('Y-m-d H:i:s'),
            'thread_id' => $fake->randomDigitNotNull,
            'status' => $fake->word,
            'address' => $fake->word,
            'type' => $fake->word,
            'created_at' => $fake->date('Y-m-d H:i:s'),
            'updated_at' => $fake->date('Y-m-d H:i:s'),
            'deleted_at' => $fake->date('Y-m-d H:i:s'),
            'created_by' => $fake->randomDigitNotNull,
            'updated_by' => $fake->randomDigitNotNull,
            'deleted_by' => $fake->randomDigitNotNull
        ], $smsFields);
    }
}
