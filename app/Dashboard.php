<?php

namespace Iris;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use OwenIt\Auditing\Contracts\Auditable;

class Dashboard extends Model implements Auditable
{
    // Options
    protected $table = "dashboards";
    public $timestamps = false;
}
