<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
class CreateEquipmentlistTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'EquipmentList';
    /**
     * Run the migrations.
     * @table EquipmentList
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) return;
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('title', 45)->nullable();
            $table->string('description')->nullable();
            $table->string('type', 45)->nullable()->comment('Vehicle? Kit?');
            $table->unsignedInteger('ApprovedEquipmentList_id');

            $table->index(["ApprovedEquipmentList_id"], 'fk_EquipmentList_ApprovedEquipmentList1_idx');


            $table->foreign('ApprovedEquipmentList_id', 'fk_EquipmentList_ApprovedEquipmentList1_idx')
                ->references('id')->on('ApprovedEquipmentList')
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
