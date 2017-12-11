<?php


namespace Iris\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Iris\Dashboard;

class DashboardController extends Controller
{
    public function index($area = null){
        $title = 'Dashboards';
        if (isset($area) /*&& $filter !== ''*/) {
            return "<h1>Dashboards related to $area coming soon!</h1>";
        } else {
            return view('pages.dashboards.index')->with('title', $title);
        }
    }

    public function ops_duty()
    {
        $title = 'Operational Dashboard - Current Duties';
        $duty_officer = DB::table('dashboards')->where('field', 'do')->value('value');
        $backup_duty_officer = DB::table('dashboards')->where('field', 'budo')->value('value');
        $team_leader = DB::table('dashboards')->where('field', 'tl')->value('value');
        $team = DB::table('dashboards')->where('field', 'team')->value('value');

        return view ('pages.dashboards.ops_duty', ['title' => $title, 'duty_officer' => $duty_officer, 'backup_duty_officer' => $backup_duty_officer, 'team_leader' => $team_leader, 'team' => $team]);
    }
}