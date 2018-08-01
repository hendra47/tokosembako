<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatekaryawanRequest;
use App\Http\Requests\UpdatekaryawanRequest;
use App\Repositories\karyawanRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class karyawanController extends AppBaseController
{
    /** @var  karyawanRepository */
    private $karyawanRepository;

    public function __construct(karyawanRepository $karyawanRepo)
    {
        $this->karyawanRepository = $karyawanRepo;
    }

    /**
     * Display a listing of the karyawan.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->karyawanRepository->pushCriteria(new RequestCriteria($request));
        $karyawans = $this->karyawanRepository->all();

        return view('karyawans.index')
            ->with('karyawans', $karyawans);
    }

    /**
     * Show the form for creating a new karyawan.
     *
     * @return Response
     */
    public function create()
    {
        return view('karyawans.create');
    }

    /**
     * Store a newly created karyawan in storage.
     *
     * @param CreatekaryawanRequest $request
     *
     * @return Response
     */
    public function store(CreatekaryawanRequest $request)
    {
        $input = $request->all();

        $karyawan = $this->karyawanRepository->create($input);

        Flash::success('Karyawan saved successfully.');

        return redirect(route('karyawans.index'));
    }

    /**
     * Display the specified karyawan.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $karyawan = $this->karyawanRepository->findWithoutFail($id);

        if (empty($karyawan)) {
            Flash::error('Karyawan not found');

            return redirect(route('karyawans.index'));
        }

        return view('karyawans.show')->with('karyawan', $karyawan);
    }

    /**
     * Show the form for editing the specified karyawan.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $karyawan = $this->karyawanRepository->findWithoutFail($id);

        if (empty($karyawan)) {
            Flash::error('Karyawan not found');

            return redirect(route('karyawans.index'));
        }

        return view('karyawans.edit')->with('karyawan', $karyawan);
    }

    /**
     * Update the specified karyawan in storage.
     *
     * @param  int              $id
     * @param UpdatekaryawanRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatekaryawanRequest $request)
    {
        $karyawan = $this->karyawanRepository->findWithoutFail($id);

        if (empty($karyawan)) {
            Flash::error('Karyawan not found');

            return redirect(route('karyawans.index'));
        }

        $karyawan = $this->karyawanRepository->update($request->all(), $id);

        Flash::success('Karyawan updated successfully.');

        return redirect(route('karyawans.index'));
    }

    /**
     * Remove the specified karyawan from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $karyawan = $this->karyawanRepository->findWithoutFail($id);

        if (empty($karyawan)) {
            Flash::error('Karyawan not found');

            return redirect(route('karyawans.index'));
        }

        $this->karyawanRepository->delete($id);

        Flash::success('Karyawan deleted successfully.');

        return redirect(route('karyawans.index'));
    }
}
