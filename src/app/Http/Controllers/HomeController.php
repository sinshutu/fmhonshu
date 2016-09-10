<?php
/**
 * Created by IntelliJ IDEA.
 * User: masayuki
 * Date: 11/09/2016
 * Time: 3:56 AM
 */

namespace App\Http\Controllers;


class HomeController extends Controller
{
    public function index() {
        return view('index');
    }

    public function search() {
        return view('search');
    }
}