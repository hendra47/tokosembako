<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateabsenRequest;
use App\Http\Requests\UpdateabsenRequest;
use App\Repositories\absenRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class absenController extends AppBaseController
{
    /** @var  absenRepository */
    private $absenRepository;

    public function __construct(absenRepository $absenRepo)
    {
        $this->absenRepository = $absenRepo;
    }

    /**
     * Display a listing of the absen.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->absenRepository->pushCriteria(new RequestCriteria($request));
        $absens = $this->absenRepository->all();

        return view('absens.index')
            ->with('absens', $absens);
    }

    /**
     * Show the form for creating a new absen.
     *
     * @return Response
     */
    public function create()
    {
        return view('absens.create');
    }

    /**
     * Store a newly created absen in storage.
     *
     * @param CreateabsenRequest $request
     *
     * @return Response
     */
    public function store(CreateabsenRequest $request)
    {
        $input = $request->all();

        $absen = $this->absenRepository->create($input);

        Flash::success('Absen saved successfully.');

        return redirect(route('absens.index'));
    }

    /**
     * Display the specified absen.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $absen = $this->absenRepository->findWithoutFail($id);

        if (empty($absen)) {
            Flash::error('Absen not found');

            return redirect(route('absens.index'));
        }

        return view('absens.show')->with('absen', $absen);
    }

    /**
     * Show the form for editing the specified absen.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $absen = $this->absenRepository->findWithoutFail($id);

        if (empty($absen)) {
            Flash::error('Absen not found');

            return redirect(route('absens.index'));
        }

        return view('absens.edit')->with('absen', $absen);
    }

    /**
     * Update the specified absen in storage.
     *
     * @param  int              $id
     * @param UpdateabsenRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateabsenRequest $request)
    {
        $absen = $this->absenRepository->findWithoutFail($id);

        if (empty($absen)) {
            Flash::error('Absen not found');

            return redirect(route('absens.index'));
        }

        $absen = $this->absenRepository->update($request->all(), $id);

        Flash::success('Absen updated successfully.');

        return redirect(route('absens.index'));
    }

    /**
     * Remove the specified absen from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $absen = $this->absenRepository->findWithoutFail($id);

        if (empty($absen)) {
            Flash::error('Absen not found');

            return redirect(route('absens.index'));
        }

        $this->absenRepository->delete($id);

        Flash::success('Absen deleted successfully.');

        return redirect(route('absens.index'));
    }
}
