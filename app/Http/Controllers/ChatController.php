<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateChatRequest;
use App\Http\Requests\UpdateChatRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\ChatRepository;
use Illuminate\Http\Request;
use Flash;

class ChatController extends AppBaseController
{
    /** @var ChatRepository $chatRepository*/
    private $chatRepository;

    public function __construct(ChatRepository $chatRepo)
    {
        $this->chatRepository = $chatRepo;
    }

    /**
     * Display a listing of the Chat.
     */
    public function index(Request $request)
    {
        $chats = $this->chatRepository->paginate(10);

        return view('chats.index')
            ->with('chats', $chats);
    }

    /**
     * Show the form for creating a new Chat.
     */
    public function create()
    {
        return view('chats.create');
    }

    /**
     * Store a newly created Chat in storage.
     */
    public function store(CreateChatRequest $request)
    {
        $input = $request->all();

        $chat = $this->chatRepository->create($input);

        Flash::success('Chat saved successfully.');

        return redirect(route('chats.index'));
    }

    /**
     * Display the specified Chat.
     */
    public function show($id)
    {
        $chat = $this->chatRepository->find($id);

        if (empty($chat)) {
            Flash::error('Chat not found');

            return redirect(route('chats.index'));
        }

        return view('chats.show')->with('chat', $chat);
    }

    /**
     * Show the form for editing the specified Chat.
     */
    public function edit($id)
    {
        $chat = $this->chatRepository->find($id);

        if (empty($chat)) {
            Flash::error('Chat not found');

            return redirect(route('chats.index'));
        }

        return view('chats.edit')->with('chat', $chat);
    }

    /**
     * Update the specified Chat in storage.
     */
    public function update($id, UpdateChatRequest $request)
    {
        $chat = $this->chatRepository->find($id);

        if (empty($chat)) {
            Flash::error('Chat not found');

            return redirect(route('chats.index'));
        }

        $chat = $this->chatRepository->update($request->all(), $id);

        Flash::success('Chat updated successfully.');

        return redirect(route('chats.index'));
    }

    /**
     * Remove the specified Chat from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $chat = $this->chatRepository->find($id);

        if (empty($chat)) {
            Flash::error('Chat not found');

            return redirect(route('chats.index'));
        }

        $this->chatRepository->delete($id);

        Flash::success('Chat deleted successfully.');

        return redirect(route('chats.index'));
    }
}
