<?php

namespace Iris;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use OwenIt\Auditing\Contracts\Auditable;

class WeeklyDuties extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;
    protected $table = 'weeklyDuties';
    public $timestamps = 'false';

    public static function getWeeklyDuties ()
    {
        $query = DB::table('weeklyDuties')
            ->join('users as tl', 'weeklyDuties.teamLeader', '=', 'tl.memberNumber')
            ->join('users as dtl', 'weeklyDuties.teamLeader', '=', 'dtl.memberNumber')
            ->join('users as do', 'weeklyDuties.teamLeader', '=', 'do.memberNumber')
            ->join('users as budo', 'weeklyDuties.teamLeader', '=', 'budo.memberNumber')
            ->select('weeklyDuties.*' , 'tl.name as tlName', 'dtl.name as dtlName', 'do.name as doName', 'budo.name as budoName')
            ->get();

        $result = json_decode($query, true);

        return $result;
    }
}
