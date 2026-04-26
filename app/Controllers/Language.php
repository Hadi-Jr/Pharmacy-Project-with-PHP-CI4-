<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Language extends BaseController
{
    public function switch()
    {
        $locale = $this->request->getPost('locale');

        if (in_array($locale, config('app')->supportedLocales)) {
            $this->session->set('locale', $locale);
        }

        return redirect()->back();
    }
}