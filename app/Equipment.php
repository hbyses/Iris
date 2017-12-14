<?php

namespace Iris;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class Equipment extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;
}
