<?php

namespace App\Http\Controllers;

use App\Models\EatCategory;
use App\Models\EatItems;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\View\View;

/**
 * Class MainController
 * @package App\Http\Controllers
 */

class MainController extends Controller
{
    public function main(): View
    {
        $text = 'yo';
        return view('main', ['product' => $text]);
    }

    public function second($x, $y): View
    {
        $category = EatItems::query()->where('id', 1)->first();
        dd($category);
        echo $x . '<br>' . $y . '<br>';
        $text = 'text text text';
        return view('second', ['product' => $text]);
    }

}
