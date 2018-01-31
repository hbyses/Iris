<?php

namespace Iris;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;
use Iris\Equipment;
use Iris\EquipmentActivityCategory;

class EquipmentActivity extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;

    protected $table = "equipmentactivity";

    public function category() {
        return $this->belongsTo('Iris\EquipmentActivityCategory','Equipmentactivitycategory_id');
    }
    public function equipment() {
        return $this->belongsTo('Iris\Equipment','equipment_id');
    }
    public function creator() {
        return $this->belongsTo('Iris\User','Creator_User_id');
    }
    public function owner() {
        return $this->belongsTo('Iris\User','Owner_User_id');
    }
}
