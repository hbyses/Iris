<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
class CreateEquipmentTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'Equipment';
    /**
     * Run the migrations.
     * @table Equipment
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) return;
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('quantity')->nullable();
            $table->date('last_modified')->nullable();
            $table->string('name', 45)->nullable();
            $table->string('description', 45)->nullable();
            $table->string('consumable', 1)->nullable();
            $table->integer('size')->nullable();
            $table->string('brand', 45)->nullable();
            $table->string('inService', 1)->nullable();
            $table->string('inspectionFrequency', 45)->nullable();
            $table->string('serialNumber', 45)->nullable();
            $table->string('model', 45)->nullable();
            $table->date('endOfLife')->nullable();
            $table->date('datePurchased')->nullable();
            $table->integer('assetNumber')->nullable();
            $table->integer('Supplier_id')->nullable();

            $table->index(["Supplier_id"], 'fk_Equipment_Supplier1_idx');


            $table->foreign('Supplier_id', 'fk_Equipment_Supplier1_idx')
                ->references('id')->on('Supplier')
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
