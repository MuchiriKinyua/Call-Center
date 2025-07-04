<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateSocial_mediaRequest;
use App\Http\Requests\UpdateSocial_mediaRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\Social_mediaRepository;
use Illuminate\Http\Request;
use Flash;

class Social_mediaController extends AppBaseController
{
    /** @var Social_mediaRepository $socialMediaRepository*/
    private $socialMediaRepository;

    public function __construct(Social_mediaRepository $socialMediaRepo)
    {
        $this->socialMediaRepository = $socialMediaRepo;
    }

    /**
     * Display a listing of the Social_media.
     */
    public function index(Request $request)
    {
        $socialMedia = $this->socialMediaRepository->paginate(10);

        return view('social_media.index')
            ->with('socialMedia', $socialMedia);
    }

    /**
     * Show the form for creating a new Social_media.
     */
    public function create()
    {
        return view('social_media.create');
    }

    /**
     * Store a newly created Social_media in storage.
     */
    public function store(CreateSocial_mediaRequest $request)
    {
        $input = $request->all();

        $socialMedia = $this->socialMediaRepository->create($input);

        Flash::success('Social Media saved successfully.');

        return redirect(route('socialMedia.index'));
    }

    /**
     * Display the specified Social_media.
     */
    public function show($id)
    {
        $socialMedia = $this->socialMediaRepository->find($id);

        if (empty($socialMedia)) {
            Flash::error('Social Media not found');

            return redirect(route('socialMedia.index'));
        }

        return view('social_media.show')->with('socialMedia', $socialMedia);
    }

    /**
     * Show the form for editing the specified Social_media.
     */
    public function edit($id)
    {
        $socialMedia = $this->socialMediaRepository->find($id);

        if (empty($socialMedia)) {
            Flash::error('Social Media not found');

            return redirect(route('socialMedia.index'));
        }

        return view('social_media.edit')->with('socialMedia', $socialMedia);
    }

    /**
     * Update the specified Social_media in storage.
     */
    public function update($id, UpdateSocial_mediaRequest $request)
    {
        $socialMedia = $this->socialMediaRepository->find($id);

        if (empty($socialMedia)) {
            Flash::error('Social Media not found');

            return redirect(route('socialMedia.index'));
        }

        $socialMedia = $this->socialMediaRepository->update($request->all(), $id);

        Flash::success('Social Media updated successfully.');

        return redirect(route('socialMedia.index'));
    }

    /**
     * Remove the specified Social_media from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $socialMedia = $this->socialMediaRepository->find($id);

        if (empty($socialMedia)) {
            Flash::error('Social Media not found');

            return redirect(route('socialMedia.index'));
        }

        $this->socialMediaRepository->delete($id);

        Flash::success('Social Media deleted successfully.');

        return redirect(route('socialMedia.index'));
    }
}
