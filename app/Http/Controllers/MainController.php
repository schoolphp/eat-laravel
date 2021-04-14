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

    public function second($id): View
    {
        $category = EatItems::query()->where('id', $id)->first();
        dump($category);
        $text = 'text text text';
        return view('second', ['product' => $text]);
    }
}
