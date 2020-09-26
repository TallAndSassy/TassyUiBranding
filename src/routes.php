<?php

if (App::environment('local')) {
    Route::get('/grok/tassy/groks_tasbranding', function () {
        return view('tassy::groks_tasbranding/index');
    });
}