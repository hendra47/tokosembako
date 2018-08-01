<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreategajiRequest;
use App\Http\Requests\UpdategajiRequest;
use App\Repositories\gajiRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class gajiController extends AppBaseController
{
    /** @var  gajiRepository */
    private $gajiRepository;

    public function __construct(gajiRepository $gajiRepo)
    {
        $this->gajiRepository = $gajiRepo;
    }

    /**
     * Display a listing of the gaji.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->gajiRepository->pushCriteria(new RequestCriteria($request));
        $gajis = $this->gajiRepository->all();

        return view('gajis.index')
            ->with('gajis', $gajis);
    }

    /**
     * Show the form for creating a new gaji.
     *
     * @return Response
     */
    public function create()
    {
        return view('gajis.create');
    }

    /**
     * Store a newly created gaji in storage.
     *
     * @param CreategajiRequest $request
     *
     * @return Response
     */
    public function store(CreategajiRequest $request)
    {
        $input = $request->all();

        $gaji = $this->gajiRepository->create($input);

        Flash::success('Gaji saved successfully.');

        return redirect(route('gajis.index'));
    }

    /**
     * Display the specified gaji.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $gaji = $this->gajiRepository->findWithoutFail($id);

        if (empty($gaji)) {
            Flash::error('Gaji not found');

            return redirect(route('gajis.index'));
        }

        return view('gajis.show')->with('gaji', $gaji);
    }

    /**
     * Show the form for editing the specified gaji.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $gaji = $this->gajiRepository->findWithoutFail($id);

        if (empty($gaji)) {
            Flash::error('Gaji not found');

            return redirect(route('gajis.index'));
        }

        return view('gajis.edit')->with('gaji', $gaji);
    }

    /**
     * Update the specified gaji in storage.
     *
     * @param  int              $id
     * @param UpdategajiRequest $request
     *
     * @return Response
     */
    public function update($id, UpdategajiRequest $request)
    {
        $gaji = $this->gajiRepository->findWithoutFail($id);

        if (empty($gaji)) {
            Flash::error('Gaji not found');

            return redirect(route('gajis.index'));
        }

        $gaji = $this->gajiRepository->update($request->all(), $id);

        Flash::success('Gaji updated successfully.');

        return redirect(route('gajis.index'));
    }

    /**
     * Remove the specified gaji from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $gaji = $this->gajiRepository->findWithoutFail($id);

        if (empty($gaji)) {
            Flash::error('Gaji not found');

            return redirect(route('gajis.index'));
        }

        $this->gajiRepository->delete($id);

        Flash::success('Gaji deleted successfully.');

        return redirect(route('gajis.index'));
    }
}
