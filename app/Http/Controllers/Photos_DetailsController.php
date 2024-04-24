<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePhotos_detailsRequest;
use App\Http\Requests\UpdatePhotos_detailsRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\Photos_detailsRepository;
use Illuminate\Http\Request;
use Flash;

class Photos_detailsController extends AppBaseController
{
    /** @var Photos_detailsRepository $photosDetailsRepository*/
    private $photosDetailsRepository;

    public function __construct(Photos_detailsRepository $photosDetailsRepo)
    {
        $this->photosDetailsRepository = $photosDetailsRepo;
    }

    /**
     * Display a listing of the Photos_details.
     */
    public function index(Request $request)
    {
        $photosDetails = $this->photosDetailsRepository->paginate(10);

        return view('photos_details.index')
            ->with('photosDetails', $photosDetails);
    }

    /**
     * Show the form for creating a new Photos_details.
     */
    public function create()
    {
        return view('photos_details.create');
    }

    /**
     * Store a newly created Photos_details in storage.
     */
    public function store(CreatePhotos_detailsRequest $request)
    {
        $input = $request->all();

        $photosDetails = $this->photosDetailsRepository->create($input);

        Flash::success('Photos Details saved successfully.');

        return redirect(route('photosDetails.index'));
    }

    /**
     * Display the specified Photos_details.
     */
    public function show($id)
    {
        $photosDetails = $this->photosDetailsRepository->find($id);

        if (empty($photosDetails)) {
            Flash::error('Photos Details not found');

            return redirect(route('photosDetails.index'));
        }

        return view('photos_details.show')->with('photosDetails', $photosDetails);
    }

    /**
     * Show the form for editing the specified Photos_details.
     */
    public function edit($id)
    {
        $photosDetails = $this->photosDetailsRepository->find($id);

        if (empty($photosDetails)) {
            Flash::error('Photos Details not found');

            return redirect(route('photosDetails.index'));
        }

        return view('photos_details.edit')->with('photosDetails', $photosDetails);
    }

    /**
     * Update the specified Photos_details in storage.
     */
    public function update($id, UpdatePhotos_detailsRequest $request)
    {
        $photosDetails = $this->photosDetailsRepository->find($id);

        if (empty($photosDetails)) {
            Flash::error('Photos Details not found');

            return redirect(route('photosDetails.index'));
        }

        $photosDetails = $this->photosDetailsRepository->update($request->all(), $id);

        Flash::success('Photos Details updated successfully.');

        return redirect(route('photosDetails.index'));
    }

    /**
     * Remove the specified Photos_details from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $photosDetails = $this->photosDetailsRepository->find($id);

        if (empty($photosDetails)) {
            Flash::error('Photos Details not found');

            return redirect(route('photosDetails.index'));
        }

        $this->photosDetailsRepository->delete($id);

        Flash::success('Photos Details deleted successfully.');

        return redirect(route('photosDetails.index'));
    }
}
