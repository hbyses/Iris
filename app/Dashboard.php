<?php

namespace Iris;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Dashboard extends Model
{
    // Options
    protected $table = "dashboards";
    public $timestamps = false;
}
