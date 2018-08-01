<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatehargaRequest;
use App\Http\Requests\UpdatehargaRequest;
use App\Repositories\hargaRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class hargaController extends AppBaseController
{
    /** @var  hargaRepository */
    private $hargaRepository;

    public function __construct(hargaRepository $hargaRepo)
    {
        $this->hargaRepository = $hargaRepo;
    }

    /**
     * Display a listing of the harga.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->hargaRepository->pushCriteria(new RequestCriteria($request));
        $hargas = $this->hargaRepository->all();

        return view('hargas.index')
            ->with('hargas', $hargas);
    }

    /**
     * Show the form for creating a new harga.
     *
     * @return Response
     */
    public function create()
    {
        return view('hargas.create');
    }

    /**
     * Store a newly created harga in storage.
     *
     * @param CreatehargaRequest $request
     *
     * @return Response
     */
    public function store(CreatehargaRequest $request)
    {
        $input = $request->all();

        $harga = $this->hargaRepository->create($input);

        Flash::success('Harga saved successfully.');

        return redirect(route('hargas.index'));
    }

    /**
     * Display the specified harga.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $harga = $this->hargaRepository->findWithoutFail($id);

        if (empty($harga)) {
            Flash::error('Harga not found');

            return redirect(route('hargas.index'));
        }

        return view('hargas.show')->with('harga', $harga);
    }

    /**
     * Show the form for editing the specified harga.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $harga = $this->hargaRepository->findWithoutFail($id);

        if (empty($harga)) {
            Flash::error('Harga not found');

            return redirect(route('hargas.index'));
        }

        return view('hargas.edit')->with('harga', $harga);
    }

    /**
     * Update the specified harga in storage.
     *
     * @param  int              $id
     * @param UpdatehargaRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatehargaRequest $request)
    {
        $harga = $this->hargaRepository->findWithoutFail($id);

        if (empty($harga)) {
            Flash::error('Harga not found');

            return redirect(route('hargas.index'));
        }

        $harga = $this->hargaRepository->update($request->all(), $id);

        Flash::success('Harga updated successfully.');

        return redirect(route('hargas.index'));
    }

    /**
     * Remove the specified harga from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $harga = $this->hargaRepository->findWithoutFail($id);

        if (empty($harga)) {
            Flash::error('Harga not found');

            return redirect(route('hargas.index'));
        }

        $this->hargaRepository->delete($id);

        Flash::success('Harga deleted successfully.');

        return redirect(route('hargas.index'));
    }
}
