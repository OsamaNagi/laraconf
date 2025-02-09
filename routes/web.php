<?php

use App\Components\TextInput;
use App\Livewire\ConferenceSignUpPage;
use Illuminate\Support\Facades\Route;

Route::get('/conference-sign-up', ConferenceSignUpPage::class);

Route::get('/demo', function () {
    $input = TextInput::make('email')->label('Email');

    return view('demo', [
        'input' => $input,
    ]);
});
