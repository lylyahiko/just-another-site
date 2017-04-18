<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Problem;
use Session;
use View;
use Illuminate\Http\RedirectResponse;

class ProblemController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the problem dashboard
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $problems = Problem::all();

        // Session::flash('message', 'This is a message!');
        // Session::flash('alert-class', 'alert-success');
        return View::make('pages.problems', compact('problems'));
    }

    /**
     * Allow to add new problems.
     *
     * @return \Illuminate\Http\Response
     */
    public function addView()
    {
        return view('pages.new-problems');
    }

    /**
     * Allow to add new problems.
     *
     * @return \Illuminate\Http\Response
     */
    public function add(Request $request)
    {
        $problem = new Problem;
        $problem->description = $request->description;
        $problem->save();
        Session::flash('message', 'Problem Created!');
        Session::flash('alert-class', 'alert-success');

        return redirect()->route('problems');
    }

    /**
     * Allow to delete problems.
     *
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $request)
    {
        Problem::destroy($request->id);
        Session::flash('message', 'Problem Deleted!');
        Session::flash('alert-class', 'alert-success');

        return redirect()->route('problems');
    }
}
