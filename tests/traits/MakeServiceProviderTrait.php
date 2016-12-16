<?php

use Faker\Factory as Faker;
use App\Models\ServiceProvider;
use App\Repositories\ServiceProviderRepository;

trait MakeServiceProviderTrait
{
    /**
     * Create fake instance of ServiceProvider and save it in database
     *
     * @param array $serviceProviderFields
     * @return ServiceProvider
     */
    public function makeServiceProvider($serviceProviderFields = [])
    {
        /** @var ServiceProviderRepository $serviceProviderRepo */
        $serviceProviderRepo = App::make(ServiceProviderRepository::class);
        $theme = $this->fakeServiceProviderData($serviceProviderFields);
        return $serviceProviderRepo->create($theme);
    }

    /**
     * Get fake instance of ServiceProvider
     *
     * @param array $serviceProviderFields
     * @return ServiceProvider
     */
    public function fakeServiceProvider($serviceProviderFields = [])
    {
        return new ServiceProvider($this->fakeServiceProviderData($serviceProviderFields));
    }

    /**
     * Get fake data of ServiceProvider
     *
     * @param array $postFields
     * @return array
     */
    public function fakeServiceProviderData($serviceProviderFields = [])
    {
        $fake = Faker::create();

        return array_merge([
            'name' => $fake->word,
            'contract_no' => $fake->word,
            'service' => $fake->word,
            'course' => $fake->word,
            'capacity' => $fake->randomDigitNotNull,
            'p_name' => $fake->word,
            'p_address' => $fake->word,
            'p_location' => $fake->word,
            'phone' => $fake->word,
            'email' => $fake->word,
            'county' => $fake->word,
            'subc' => $fake->word,
            'ward' => $fake->word,
            'village' => $fake->word,
            'created_at' => $fake->date('Y-m-d H:i:s'),
            'updated_at' => $fake->date('Y-m-d H:i:s'),
            'deleted_at' => $fake->date('Y-m-d H:i:s'),
            'created_by' => $fake->randomDigitNotNull,
            'updated_by' => $fake->randomDigitNotNull,
            'deleted_by' => $fake->randomDigitNotNull
        ], $serviceProviderFields);
    }
}
