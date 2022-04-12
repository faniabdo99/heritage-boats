<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LocalizationController extends Controller{
    public function postChangeLocal($locale = 'ar'): \Illuminate\Http\RedirectResponse {
        if (isset($locale) && in_array($locale, config('app.available_locales'))) {
            app()->setLocale($locale);
            session()->put('locale', $locale);
        }
        return redirect()->back();
    }
}
