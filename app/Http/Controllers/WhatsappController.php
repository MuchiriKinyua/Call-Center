<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateWhatsappRequest;
use App\Http\Requests\UpdateWhatsappRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\WhatsappRepository;
use Illuminate\Http\Request;
use Flash;

class WhatsappController extends AppBaseController
{
    /** @var WhatsappRepository $whatsappRepository*/
    private $whatsappRepository;

    public function __construct(WhatsappRepository $whatsappRepo)
    {
        $this->whatsappRepository = $whatsappRepo;
    }

    /**
     * Display a listing of the Whatsapp.
     */
    public function index(Request $request)
    {
        $whatsapps = $this->whatsappRepository->paginate(10);

        return view('whatsapps.index')
            ->with('whatsapps', $whatsapps);
    }

    /**
     * Show the form for creating a new Whatsapp.
     */
    public function create()
    {
        return view('whatsapps.create');
    }

    /**
     * Store a newly created Whatsapp in storage.
     */
    public function store(CreateWhatsappRequest $request)
    {
        $input = $request->all();

        $whatsapp = $this->whatsappRepository->create($input);

        Flash::success('Whatsapp saved successfully.');

        return redirect(route('whatsapps.index'));
    }

    /**
     * Display the specified Whatsapp.
     */
    public function show($id)
    {
        $whatsapp = $this->whatsappRepository->find($id);

        if (empty($whatsapp)) {
            Flash::error('Whatsapp not found');

            return redirect(route('whatsapps.index'));
        }

        return view('whatsapps.show')->with('whatsapp', $whatsapp);
    }

    /**
     * Show the form for editing the specified Whatsapp.
     */
    public function edit($id)
    {
        $whatsapp = $this->whatsappRepository->find($id);

        if (empty($whatsapp)) {
            Flash::error('Whatsapp not found');

            return redirect(route('whatsapps.index'));
        }

        return view('whatsapps.edit')->with('whatsapp', $whatsapp);
    }

    /**
     * Update the specified Whatsapp in storage.
     */
    public function update($id, UpdateWhatsappRequest $request)
    {
        $whatsapp = $this->whatsappRepository->find($id);

        if (empty($whatsapp)) {
            Flash::error('Whatsapp not found');

            return redirect(route('whatsapps.index'));
        }

        $whatsapp = $this->whatsappRepository->update($request->all(), $id);

        Flash::success('Whatsapp updated successfully.');

        return redirect(route('whatsapps.index'));
    }

    /**
     * Remove the specified Whatsapp from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $whatsapp = $this->whatsappRepository->find($id);

        if (empty($whatsapp)) {
            Flash::error('Whatsapp not found');

            return redirect(route('whatsapps.index'));
        }

        $this->whatsappRepository->delete($id);

        Flash::success('Whatsapp deleted successfully.');

        return redirect(route('whatsapps.index'));
    }
}
