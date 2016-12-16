<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateServiceProviderAPIRequest;
use App\Http\Requests\API\UpdateServiceProviderAPIRequest;
use App\Models\ServiceProvider;
use App\Repositories\ServiceProviderRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use InfyOm\Generator\Criteria\LimitOffsetCriteria;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

/**
 * Class ServiceProviderController
 * @package App\Http\Controllers\API
 */

class ServiceProviderAPIController extends AppBaseController
{
    /** @var  ServiceProviderRepository */
    private $serviceProviderRepository;

    public function __construct(ServiceProviderRepository $serviceProviderRepo)
    {
        $this->serviceProviderRepository = $serviceProviderRepo;
    }

    /**
     * Display a listing of the ServiceProvider.
     * GET|HEAD /serviceProviders
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->serviceProviderRepository->pushCriteria(new RequestCriteria($request));
        $this->serviceProviderRepository->pushCriteria(new LimitOffsetCriteria($request));
        $serviceProviders = $this->serviceProviderRepository->all();

        return $this->sendResponse($serviceProviders->toArray(), 'Service Providers retrieved successfully');
    }

    /**
     * Store a newly created ServiceProvider in storage.
     * POST /serviceProviders
     *
     * @param CreateServiceProviderAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateServiceProviderAPIRequest $request)
    {
        $input = $request->all();

        $serviceProviders = $this->serviceProviderRepository->create($input);

        return $this->sendResponse($serviceProviders->toArray(), 'Service Provider saved successfully');
    }

    /**
     * Display the specified ServiceProvider.
     * GET|HEAD /serviceProviders/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var ServiceProvider $serviceProvider */
        $serviceProvider = $this->serviceProviderRepository->findWithoutFail($id);

        if (empty($serviceProvider)) {
            return $this->sendError('Service Provider not found');
        }

        return $this->sendResponse($serviceProvider->toArray(), 'Service Provider retrieved successfully');
    }

    /**
     * Update the specified ServiceProvider in storage.
     * PUT/PATCH /serviceProviders/{id}
     *
     * @param  int $id
     * @param UpdateServiceProviderAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateServiceProviderAPIRequest $request)
    {
        $input = $request->all();

        /** @var ServiceProvider $serviceProvider */
        $serviceProvider = $this->serviceProviderRepository->findWithoutFail($id);

        if (empty($serviceProvider)) {
            return $this->sendError('Service Provider not found');
        }

        $serviceProvider = $this->serviceProviderRepository->update($input, $id);

        return $this->sendResponse($serviceProvider->toArray(), 'ServiceProvider updated successfully');
    }

    /**
     * Remove the specified ServiceProvider from storage.
     * DELETE /serviceProviders/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var ServiceProvider $serviceProvider */
        $serviceProvider = $this->serviceProviderRepository->findWithoutFail($id);

        if (empty($serviceProvider)) {
            return $this->sendError('Service Provider not found');
        }

        $serviceProvider->delete();

        return $this->sendResponse($id, 'Service Provider deleted successfully');
    }
}
