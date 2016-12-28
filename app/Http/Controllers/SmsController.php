<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateSmsRequest;
use App\Http\Requests\UpdateSmsRequest;
use App\Repositories\SmsRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use DB;

class SmsController extends AppBaseController
{
    /** @var  SmsRepository */
    private $smsRepository;

    public function __construct(SmsRepository $smsRepo)
    {
        $this->smsRepository = $smsRepo;
    }

    /**
     * Display a listing of the Sms.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->smsRepository->pushCriteria(new RequestCriteria($request));
        //$sms = $this->smsRepository
        $sms = DB::table('sms')
        ->groupBy(['thread_id', 'id'])
        ->orderBy('date_received', 'desc')
        ->limit(20)
        ->get();

        return view('sms.index')
            ->with('sms', $sms);
    }

    /**
     * Show the form for creating a new Sms.
     *
     * @return Response
     */
    public function create()
    {
        return view('sms.create');
    }

    /**
     * Store a newly created Sms in storage.
     *
     * @param CreateSmsRequest $request
     *
     * @return Response
     */
    public function store(CreateSmsRequest $request)
    {
        $input = $request->all();

        $sms = $this->smsRepository->create($input);

        Flash::success('Sms saved successfully.');

        return redirect(route('sms.index'));
    }

    /**
     * Display the specified Sms.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $sms = $this->smsRepository->findWithoutFail($id);

        if (empty($sms)) {
            Flash::error('Sms not found');

            return redirect(route('sms.index'));
        }

        return view('sms.show')->with('sms', $sms);
    }

    /**
     * Show the form for editing the specified Sms.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $sms = $this->smsRepository->findWithoutFail($id);

        if (empty($sms)) {
            Flash::error('Sms not found');

            return redirect(route('sms.index'));
        }

        return view('sms.edit')->with('sms', $sms);
    }

    /**
     * Update the specified Sms in storage.
     *
     * @param  int              $id
     * @param UpdateSmsRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateSmsRequest $request)
    {
        $sms = $this->smsRepository->findWithoutFail($id);

        if (empty($sms)) {
            Flash::error('Sms not found');

            return redirect(route('sms.index'));
        }

        $sms = $this->smsRepository->update($request->all(), $id);

        Flash::success('Sms updated successfully.');

        return redirect(route('sms.index'));
    }

    /**
     * Remove the specified Sms from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $sms = $this->smsRepository->findWithoutFail($id);

        if (empty($sms)) {
            Flash::error('Sms not found');

            return redirect(route('sms.index'));
        }

        $this->smsRepository->delete($id);

        Flash::success('Sms deleted successfully.');

        return redirect(route('sms.index'));
    }
}
