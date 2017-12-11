<?php

namespace Iris\Http\Controllers;

use Illuminate\Http\Request;

class DashboardsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index($area = null){
        $title = 'Dashboards';
        if (isset($area) /*&& $filter !== ''*/) {
            return "<h1>Dashboards related to $area coming soon!</h1>";
        } else {
            return view('pages.dashboards.index')->with('title', $title);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function operations_duties()
    {
        $dashdata = Dashboard::all();

        $ops_dash_data = array(
            $title => 'Operational Dashboard - Current Duties',
            $do = $dashdata->where('dashcat', 'operations')->where('dashboard', 'duties')->where('field', 'do')->value('value'),
            $budo = $dashdata->where('dashcat', 'operations')->where('dashboard', 'duties')->where('field', 'budo')->value('value'),
            $tl = $dashdata->where('dashcat', 'operations')->where('dashboard', 'duties')->where('field', 'tl')->value('value'),
            $team = $dashdata->where('dashcat', 'operations')->where('dashboard', 'duties')->where('field', 'team')->value('value')
        );

        return view ('pages.dashboards.ops_duty', ['title' => $title, 'ops_dash_data' => $ops_dash_data]);
    }
}
