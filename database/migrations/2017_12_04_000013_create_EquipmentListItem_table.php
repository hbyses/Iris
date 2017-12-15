<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
class CreateEquipmentlistitemTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'EquipmentListItem';
    /**
     * Run the migrations.
     * @table EquipmentListItem
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) return;
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->unsignedInteger('EquipmentList_id');
            $table->unsignedInteger('Equipment_id');
            $table->string('quantity', 45)->nullable();

            $table->index(["EquipmentList_id"], 'fk_EquipmentListItem_EquipmentList1_idx');

            $table->index(["Equipment_id"], 'fk_EquipmentListItem_Equipment1_idx');


            $table->foreign('EquipmentList_id', 'fk_EquipmentListItem_EquipmentList1_idx')
                ->references('id')->on('EquipmentList')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('Equipment_id', 'fk_EquipmentListItem_Equipment1_idx')
                ->references('id')->on('Equipment')
                ->onDelete('no action')
                ->onUpdate('no action');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
     public function down()
     {
       Schema::dropIfExists($this->set_schema_table);
     }
}
