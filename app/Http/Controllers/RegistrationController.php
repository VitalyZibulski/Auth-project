<?php

namespace App\Http\Controllers;

use App\Events\User\UserCreatedEvent;
use App\Http\Requests\Registration\StoreRequest;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

class RegistrationController extends Controller
{
    /**
     * @param StoreRequest $request
     * @return RedirectResponse
     */
    public function store(StoreRequest $request): RedirectResponse
    {
        $data = $request->validated();

        $user = User::query()->create($data);

        event(new UserCreatedEvent($user));

        Auth::login($user);

        return redirect()->intended('/user');
    }
}
