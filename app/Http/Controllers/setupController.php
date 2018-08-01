<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatesetupRequest;
use App\Http\Requests\UpdatesetupRequest;
use App\Repositories\setupRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class setupController extends AppBaseController
{
    /** @var  setupRepository */
    private $setupRepository;

    public function __construct(setupRepository $setupRepo)
    {
        $this->setupRepository = $setupRepo;
    }

    /**
     * Display a listing of the setup.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->setupRepository->pushCriteria(new RequestCriteria($request));
        $setups = $this->setupRepository->all();

        return view('setups.index')
            ->with('setups', $setups);
    }

    /**
     * Show the form for creating a new setup.
     *
     * @return Response
     */
    public function create()
    {
        return view('setups.create');
    }

    /**
     * Store a newly created setup in storage.
     *
     * @param CreatesetupRequest $request
     *
     * @return Response
     */
    public function store(CreatesetupRequest $request)
    {
        $input = $request->all();

        $setup = $this->setupRepository->create($input);

        Flash::success('Setup saved successfully.');

        return redirect(route('setups.index'));
    }

    /**
     * Display the specified setup.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $setup = $this->setupRepository->findWithoutFail($id);

        if (empty($setup)) {
            Flash::error('Setup not found');

            return redirect(route('setups.index'));
        }

        return view('setups.show')->with('setup', $setup);
    }

    /**
     * Show the form for editing the specified setup.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $setup = $this->setupRepository->findWithoutFail($id);

        if (empty($setup)) {
            Flash::error('Setup not found');

            return redirect(route('setups.index'));
        }

        return view('setups.edit')->with('setup', $setup);
    }

    /**
     * Update the specified setup in storage.
     *
     * @param  int              $id
     * @param UpdatesetupRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatesetupRequest $request)
    {
        $setup = $this->setupRepository->findWithoutFail($id);

        if (empty($setup)) {
            Flash::error('Setup not found');

            return redirect(route('setups.index'));
        }

        $setup = $this->setupRepository->update($request->all(), $id);

        Flash::success('Setup updated successfully.');

        return redirect(route('setups.index'));
    }

    /**
     * Remove the specified setup from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $setup = $this->setupRepository->findWithoutFail($id);

        if (empty($setup)) {
            Flash::error('Setup not found');

            return redirect(route('setups.index'));
        }

        $this->setupRepository->delete($id);

        Flash::success('Setup deleted successfully.');

        return redirect(route('setups.index'));
    }
}
