<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateTicket_statuteRequest;
use App\Http\Requests\UpdateTicket_statuteRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\Ticket_statuteRepository;
use Illuminate\Http\Request;
use Flash;

class Ticket_statuteController extends AppBaseController
{
    /** @var Ticket_statuteRepository $ticketStatuteRepository*/
    private $ticketStatuteRepository;

    public function __construct(Ticket_statuteRepository $ticketStatuteRepo)
    {
        $this->ticketStatuteRepository = $ticketStatuteRepo;
    }

    /**
     * Display a listing of the Ticket_statute.
     */
    public function index(Request $request)
    {
        $ticketStatutes = $this->ticketStatuteRepository->paginate(10);

        return view('ticket_statutes.index')
            ->with('ticketStatutes', $ticketStatutes);
    }

    /**
     * Show the form for creating a new Ticket_statute.
     */
    public function create()
    {
        return view('ticket_statutes.create');
    }

    /**
     * Store a newly created Ticket_statute in storage.
     */
    public function store(CreateTicket_statuteRequest $request)
    {
        $input = $request->all();

        $ticketStatute = $this->ticketStatuteRepository->create($input);

        Flash::success('Ticket Statute saved successfully.');

        return redirect(route('ticketStatutes.index'));
    }

    /**
     * Display the specified Ticket_statute.
     */
    public function show($id)
    {
        $ticketStatute = $this->ticketStatuteRepository->find($id);

        if (empty($ticketStatute)) {
            Flash::error('Ticket Statute not found');

            return redirect(route('ticketStatutes.index'));
        }

        return view('ticket_statutes.show')->with('ticketStatute', $ticketStatute);
    }

    /**
     * Show the form for editing the specified Ticket_statute.
     */
    public function edit($id)
    {
        $ticketStatute = $this->ticketStatuteRepository->find($id);

        if (empty($ticketStatute)) {
            Flash::error('Ticket Statute not found');

            return redirect(route('ticketStatutes.index'));
        }

        return view('ticket_statutes.edit')->with('ticketStatute', $ticketStatute);
    }

    /**
     * Update the specified Ticket_statute in storage.
     */
    public function update($id, UpdateTicket_statuteRequest $request)
    {
        $ticketStatute = $this->ticketStatuteRepository->find($id);

        if (empty($ticketStatute)) {
            Flash::error('Ticket Statute not found');

            return redirect(route('ticketStatutes.index'));
        }

        $ticketStatute = $this->ticketStatuteRepository->update($request->all(), $id);

        Flash::success('Ticket Statute updated successfully.');

        return redirect(route('ticketStatutes.index'));
    }

    /**
     * Remove the specified Ticket_statute from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $ticketStatute = $this->ticketStatuteRepository->find($id);

        if (empty($ticketStatute)) {
            Flash::error('Ticket Statute not found');

            return redirect(route('ticketStatutes.index'));
        }

        $this->ticketStatuteRepository->delete($id);

        Flash::success('Ticket Statute deleted successfully.');

        return redirect(route('ticketStatutes.index'));
    }
}
