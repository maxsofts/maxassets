<?php
namespace maxsofts\maxcms\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

class MaxAdminController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        var_dump(Auth::check());die();
        if (Auth::check()) {

        }
        //$this->middleware('auth');

    }

    public function index()
    {

        /**
         * Sample asset
         */
        return view('maxcms::admin');
    }
}
