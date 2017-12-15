<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
class CreateApprovedequipmentlistitemTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'ApprovedEquipmentListItem';
    /**
     * Run the migrations.
     * @table ApprovedEquipmentListItem
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) return;
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('ApprovedEquipmentList_id');
            $table->unsignedInteger('ApprovedEquipment_id');
            $table->integer('quantity')->nullable();

            $table->index(["ApprovedEquipment_id"], 'fk_ApprovedEquipmentListItem_ApprovedEquipment1_idx');


            $table->foreign('ApprovedEquipment_id', 'fk_ApprovedEquipmentListItem_ApprovedEquipment1_idx')
                ->references('id')->on('ApprovedEquipment')
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
