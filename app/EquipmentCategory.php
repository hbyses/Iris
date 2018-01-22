<?php

namespace Iris;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;
use Iris\Equipment;

class EquipmentCategory extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;

    protected $table = "equipmentcategory";

    public function equipment() {
        return $this->hasMany('Iris\Equipment','equipmentCategory_id');
    }
}
