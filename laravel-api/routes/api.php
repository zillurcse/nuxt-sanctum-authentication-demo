<?php

use App\Http\Resources\UserResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return new UserResource($request->user());
})->middleware('auth:sanctum');

Route::patch('/profile', function (Request $request) {
    $request->validate([
        'name' => ['required', 'string', 'max:255'],
        'email' => ['required', 'email'],
        'avatar' => [
            // ['required'],
            'nullable',
            'image',
            'mimes:jpg,png',
        ],
    ]);

    $path = null;
    if ($request->hasFile('avatar')) {
        $path = $request->file('avatar')->store('avatars', 'public');
    }

    $request->user()->update([...$request->only('name', 'email'), 'avatar' => $path]);

    return $request->user()->refresh();
})->middleware(['auth:sanctum']);
