<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateEmailRequest;
use App\Http\Requests\UpdateEmailRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\EmailRepository;
use Illuminate\Http\Request;
use Flash;

class EmailController extends AppBaseController
{
    /** @var EmailRepository $emailRepository*/
    private $emailRepository;

    public function __construct(EmailRepository $emailRepo)
    {
        $this->emailRepository = $emailRepo;
    }

    /**
     * Display a listing of the Email.
     */
    public function index(Request $request)
    {
        $emails = $this->emailRepository->paginate(10);

        return view('emails.index')
            ->with('emails', $emails);
    }

    /**
     * Show the form for creating a new Email.
     */
    public function create()
    {
        return view('emails.create');
    }

    /**
     * Store a newly created Email in storage.
     */
    public function store(CreateEmailRequest $request)
    {
        $input = $request->all();

        $email = $this->emailRepository->create($input);

        Flash::success('Email saved successfully.');

        return redirect(route('emails.index'));
    }

    /**
     * Display the specified Email.
     */
    public function show($id)
    {
        $email = $this->emailRepository->find($id);

        if (empty($email)) {
            Flash::error('Email not found');

            return redirect(route('emails.index'));
        }

        return view('emails.show')->with('email', $email);
    }

    /**
     * Show the form for editing the specified Email.
     */
    public function edit($id)
    {
        $email = $this->emailRepository->find($id);

        if (empty($email)) {
            Flash::error('Email not found');

            return redirect(route('emails.index'));
        }

        return view('emails.edit')->with('email', $email);
    }

    /**
     * Update the specified Email in storage.
     */
    public function update($id, UpdateEmailRequest $request)
    {
        $email = $this->emailRepository->find($id);

        if (empty($email)) {
            Flash::error('Email not found');

            return redirect(route('emails.index'));
        }

        $email = $this->emailRepository->update($request->all(), $id);

        Flash::success('Email updated successfully.');

        return redirect(route('emails.index'));
    }

    /**
     * Remove the specified Email from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $email = $this->emailRepository->find($id);

        if (empty($email)) {
            Flash::error('Email not found');

            return redirect(route('emails.index'));
        }

        $this->emailRepository->delete($id);

        Flash::success('Email deleted successfully.');

        return redirect(route('emails.index'));
    }
}
