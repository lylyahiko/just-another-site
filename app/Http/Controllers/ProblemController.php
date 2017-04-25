<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Role;
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
        $user = Auth::user();

        return View::make('pages.problems', compact('problems'))->with('user', $user);
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
        $problem->title = $request->title;
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

    /**
     * Just for viewing a problem
     *
     * @return \Illuminate\Http\Response
     */
    public function viewProblem(Request $request)
    {
        preg_match('/\?(\d*)/', $request->fullUrl(), $id);

        if (!isset($id[1])) {
            Session::flash('message', 'Unable to find proper ID!');
            Session::flash('alert-class', 'alert-alert');
            return back();
        }

        $problem = Problem::find($id[1]);
        return View::make('pages.view-problem', compact('problem'));
    }

    /**
     * View for updating problems.
     *
     * @return \Illuminate\Http\Response
     */
    public function updateView(Request $request)
    {
        preg_match('/\?(\d*)/', $request->fullUrl(), $id);

        if (!isset($id[1])) {
            Session::flash('message', 'Unable to find proper ID!');
            Session::flash('alert-class', 'alert-alert');
            return back();
        }

        $problem = Problem::find($id[1]);
        return View::make('pages.update-problem', compact('problem'));
    }

    /**
     * Does actual update of problems.
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $problem = Problem::find($request->id);
        $problem->description = $request->description;
        $problem->title = $request->title;
        $problem->save();
        Session::flash('message', 'Problem Updated!');
        Session::flash('alert-class', 'alert-success');

        return redirect()->route('problems');
    }
}
