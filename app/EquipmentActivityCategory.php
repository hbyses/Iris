<?php

namespace Iris;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;
use Iris\Equipment;
use Iris\EquipmentActivity;

class EquipmentActivityCategory extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;

    protected $table = "equipmentactivitycategory";

    public function ativities() {
        return $this->hasMany('Iris\EquipmentActivity','equipmentActivityCategory_id');
    }
}
