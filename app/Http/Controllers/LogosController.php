<?php

namespace App\Http\Controllers;

use Storage;
use File;
use Illuminate\Http\Request;

class LogosController extends Controller
{
    public function __invoke()
    {
        $icons = [];
        $files = Storage::disk('publicImages')->files('logo');
        foreach($files as $file) {
            array_push($icons, [
                'path' => 'images/'.$file,
                'name' => File::name($file),
                'ext' => File::extension($file),
            ]);
        }
        
        $fonts = [
            "'Roboto', sans-serif", // 300, 400, 500, 600
            "'Roboto Condensed', sans-serif", // 500, 600
            "'Galada', cursive", // 500, 600
            "'Rubik', sans-serif",
            "'Lobster', cursive",
            "'Pacifico', cursive",
            "'Kaushan Script', cursive",
            "'Lobster Two', cursive",
            "'Istok Web', sans-serif",
            "'Playball', cursive",
            "'Rancho', cursive",
            "'Oleo Script', cursive",
            "'Contrail One', cursive",
            "'Allerta Stencil', sans-serif",
            "'Gugi', cursive",
            "'Belleza', sans-serif",
            "'Sonsie One', cursive",
            "'Plaster', cursive",
            "'Uncial Antiqua', cursive",
            "'Nova Oval', cursive",
        ];

        $weights = [
            400,
            700
        ];


        return view('logomaker', compact(
            'icons',
            'fonts', 
            'weights'
        ));
    }
}
