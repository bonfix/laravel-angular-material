<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateParticipantAPIRequest;
use App\Http\Requests\API\UpdateParticipantAPIRequest;
use App\Models\Participant;
use App\Repositories\ParticipantRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use InfyOm\Generator\Criteria\LimitOffsetCriteria;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

/**
 * Class ParticipantController
 * @package App\Http\Controllers\API
 */

class ParticipantAPIController extends AppBaseController
{
    /** @var  ParticipantRepository */
    private $participantRepository;

    public function __construct(ParticipantRepository $participantRepo)
    {
        $this->participantRepository = $participantRepo;
    }

    /**
     * Display a listing of the Participant.
     * GET|HEAD /participants
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->participantRepository->pushCriteria(new RequestCriteria($request));
        $this->participantRepository->pushCriteria(new LimitOffsetCriteria($request));
        $participants = $this->participantRepository->all();

        return $this->sendResponse($participants->toArray(), 'Participants retrieved successfully');
    }

    /**
     * Store a newly created Participant in storage.
     * POST /participants
     *
     * @param CreateParticipantAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateParticipantAPIRequest $request)
    {
        $input = $request->all();

        $participants = $this->participantRepository->create($input);

        return $this->sendResponse($participants->toArray(), 'Participant saved successfully');
    }

    /**
     * Display the specified Participant.
     * GET|HEAD /participants/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Participant $participant */
        $participant = $this->participantRepository->findWithoutFail($id);

        if (empty($participant)) {
            return $this->sendError('Participant not found');
        }

        return $this->sendResponse($participant->toArray(), 'Participant retrieved successfully');
    }

    /**
     * Update the specified Participant in storage.
     * PUT/PATCH /participants/{id}
     *
     * @param  int $id
     * @param UpdateParticipantAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateParticipantAPIRequest $request)
    {
        $input = $request->all();

        /** @var Participant $participant */
        $participant = $this->participantRepository->findWithoutFail($id);

        if (empty($participant)) {
            return $this->sendError('Participant not found');
        }

        $participant = $this->participantRepository->update($input, $id);

        return $this->sendResponse($participant->toArray(), 'Participant updated successfully');
    }

    /**
     * Remove the specified Participant from storage.
     * DELETE /participants/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Participant $participant */
        $participant = $this->participantRepository->findWithoutFail($id);

        if (empty($participant)) {
            return $this->sendError('Participant not found');
        }

        $participant->delete();

        return $this->sendResponse($id, 'Participant deleted successfully');
    }
}
