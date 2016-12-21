<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateSmsAPIRequest;
use App\Http\Requests\API\UpdateSmsAPIRequest;
use App\Models\Sms;
use App\Repositories\SmsRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use InfyOm\Generator\Criteria\LimitOffsetCriteria;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

/**
 * Class SmsController
 * @package App\Http\Controllers\API
 */

class SmsAPIController extends AppBaseController
{
    /** @var  SmsRepository */
    private $smsRepository;

    public function __construct(SmsRepository $smsRepo)
    {
        $this->smsRepository = $smsRepo;
    }

    /**
     * Display a listing of the Sms.
     * GET|HEAD /sms
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->smsRepository->pushCriteria(new RequestCriteria($request));
        $this->smsRepository->pushCriteria(new LimitOffsetCriteria($request));
        $sms = $this->smsRepository->all();

        return $this->sendResponse($sms->toArray(), 'Sms retrieved successfully');
    }

    /**
     * Store a newly created Sms in storage.
     * POST /sms
     *
     * @param CreateSmsAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateSmsAPIRequest $request)
    {
        $input = $request->all();

        $sms = $this->smsRepository->create($input);

        return $this->sendResponse($sms->toArray(), 'Sms saved successfully');
    }

    /**
     * Display the specified Sms.
     * GET|HEAD /sms/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Sms $sms */
        $sms = $this->smsRepository->findWithoutFail($id);

        if (empty($sms)) {
            return $this->sendError('Sms not found');
        }

        return $this->sendResponse($sms->toArray(), 'Sms retrieved successfully');
    }

    /**
     * Update the specified Sms in storage.
     * PUT/PATCH /sms/{id}
     *
     * @param  int $id
     * @param UpdateSmsAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateSmsAPIRequest $request)
    {
        $input = $request->all();

        /** @var Sms $sms */
        $sms = $this->smsRepository->findWithoutFail($id);

        if (empty($sms)) {
            return $this->sendError('Sms not found');
        }

        $sms = $this->smsRepository->update($input, $id);

        return $this->sendResponse($sms->toArray(), 'Sms updated successfully');
    }

    /**
     * Remove the specified Sms from storage.
     * DELETE /sms/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Sms $sms */
        $sms = $this->smsRepository->findWithoutFail($id);

        if (empty($sms)) {
            return $this->sendError('Sms not found');
        }

        $sms->delete();

        return $this->sendResponse($id, 'Sms deleted successfully');
    }
}
