<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AproposController extends Controller
{
    public function quisommeNous()
    {
        $breadcrumbs = [
            ['label' => 'A propos', 'url' => null, 'active' => false],
            ['label' => 'Qui sommes nous', 'url' => null, 'active' => true],
        ];

        return view('pages.apropos.quisommesnous', [
            'breadcrumbs' => $breadcrumbs
        ]);
    }

    public function mission()
    {
        $breadcrumbs = [
            ['label' => 'A propos', 'url' => null, 'active' => false],
            ['label' => 'mission', 'url' => null, 'active' => true],
        ];

        return view('pages.apropos.mission', [
            'breadcrumbs' => $breadcrumbs
        ]);
    }

    public function vision()
    {
        $breadcrumbs = [
            ['label' => 'A propos', 'url' => null, 'active' => false],
            ['label' => 'vision', 'url' => null, 'active' => true],
        ];

        return view('pages.apropos.vision', [
            'breadcrumbs' => $breadcrumbs
        ]);
    }
}
