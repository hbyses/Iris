<?php

namespace Iris\Http\Controllers;

use Illuminate\Http\Request;
use Iris\Dashboard;
use Iris\WeeklyDuties;
use Illuminate\Support\Facades\DB;
class DashboardsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    //
    //
    // Index Page
    //
    //
    public function index(){
        $title = 'Dashboards';

        //Breadcrumbs
        $parentBreadcrumbs = array();

        return view('pages.dashboards.index', ['title' => $title, 'parentBreadcrumbs' => $parentBreadcrumbs]);
    }

    //
    //
    //Operations
    //
    //
    
    //Current Duties
    public function operations_duties()
    {
        $title = 'Current Duties';

        //Breadcrumbs
        $parentBreadcrumbs = array();
        $parentBreadcrumbs = array(
            '1' => array(
                'url' => '/dashboards',
                'name' => 'Dashboards'
            ),
            '2' => array(
                'url' => '#',
                'name' => 'Operations'
            )
        );

        $currentDutyTeam = array(
            'do' => DB::table('dashboards')->where(['dashcat' => 'operations', 'dashboard' => 'duties', 'field' => 'do'])->value('value'),
            'budo' => DB::table('dashboards')->where(['dashcat' => 'operations', 'dashboard' => 'duties', 'field' => 'budo'])->value('value'),
            'tl' => DB::table('dashboards')->where(['dashcat' => 'operations', 'dashboard' => 'duties', 'field' => 'tl'])->value('value'),
            'team' => DB::table('dashboards')->where(['dashcat' => 'operations', 'dashboard' => 'duties', 'field' => 'team'])->value('value')
        );

        $weeklyDuties = WeeklyDuties::getWeeklyDuties();

        return view ('pages.dashboards.ops_duty', ['title' => $title, 'weeklyDuties' => $weeklyDuties, 'currentDutyTeam' => $currentDutyTeam, 'parentBreadcrumbs' => $parentBreadcrumbs]);
        //return $weeklyDuties;
    }

    //Unit Capability
    public function capability()
    {
        $title = 'Unit Capability';

        //Breadcrumbs
        $parentBreadcrumbs = array();
        $parentBreadcrumbs = array(
            '1' => array(
                'url' => '/dashboards',
                'name' => 'Dashboards'
            ),
            '2' => array(
                'url' => '#',
                'name' => 'Operations'
            )
        );

        return view ('pages.dashboards.unit_capability', ['title'=> $title, 'parentBreadcrumbs' => $parentBreadcrumbs]);
    }
}
