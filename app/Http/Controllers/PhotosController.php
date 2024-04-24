<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePhotosRequest;
use App\Http\Requests\UpdatePhotosRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\PhotosRepository;
use Illuminate\Http\Request;
use Flash;

class PhotosController extends AppBaseController
{
    /** @var PhotosRepository $photosRepository*/
    private $photosRepository;

    public function __construct(PhotosRepository $photosRepo)
    {
        $this->photosRepository = $photosRepo;
    }

    /**
     * Display a listing of the Photos.
     */
    public function index(Request $request)
    {
        $photos = $this->photosRepository->paginate(10);

        return view('photos.index')
            ->with('photos', $photos);
    }

    /**
     * Show the form for creating a new Photos.
     */
    public function create()
    {
        return view('photos.create');
    }

    /**
     * Store a newly created Photos in storage.
     */
    public function store(CreatePhotosRequest $request)
    {
        $input = $request->all();

        $photos = $this->photosRepository->create($input);

        Flash::success('Photos saved successfully.');

        return redirect(route('photos.index'));
    }

    /**
     * Display the specified Photos.
     */
    public function show($id)
    {
        $photos = $this->photosRepository->find($id);

        if (empty($photos)) {
            Flash::error('Photos not found');

            return redirect(route('photos.index'));
        }

        return view('photos.show')->with('photos', $photos);
    }

    /**
     * Show the form for editing the specified Photos.
     */
    public function edit($id)
    {
        $photos = $this->photosRepository->find($id);

        if (empty($photos)) {
            Flash::error('Photos not found');

            return redirect(route('photos.index'));
        }

        return view('photos.edit')->with('photos', $photos);
    }

    /**
     * Update the specified Photos in storage.
     */
    public function update($id, UpdatePhotosRequest $request)
    {
        $photos = $this->photosRepository->find($id);

        if (empty($photos)) {
            Flash::error('Photos not found');

            return redirect(route('photos.index'));
        }

        $photos = $this->photosRepository->update($request->all(), $id);

        Flash::success('Photos updated successfully.');

        return redirect(route('photos.index'));
    }

    /**
     * Remove the specified Photos from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $photos = $this->photosRepository->find($id);

        if (empty($photos)) {
            Flash::error('Photos not found');

            return redirect(route('photos.index'));
        }

        $this->photosRepository->delete($id);

        Flash::success('Photos deleted successfully.');

        return redirect(route('photos.index'));
    }
}
