<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
class CreateVehicleTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'vehicle';
    /**
     * Run the migrations.
     * @table vehicle
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) return;
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->increments('id')->comment('Equipment_equipmentId');
            $table->integer('Location_id');
            $table->string('name', 45)->nullable();
            $table->string('rego', 10)->nullable();
            $table->string('capacity', 45)->nullable();
            $table->string('licence_type', 10)->nullable();
            $table->string('make', 45)->nullable();
            $table->string('model', 45)->nullable();
            $table->integer('year')->nullable();
            $table->string('category', 45)->nullable();
            $table->string('type', 45)->nullable();

            $table->index(["Location_id"], 'fk_vehicle_Location1_idx');

            $table->index(["id"], 'fk_vehicle_Equipment1_idx');


            $table->foreign('id', 'fk_vehicle_Equipment1_idx')
                ->references('id')->on('Equipment')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('Location_id', 'fk_vehicle_Location1_idx')
                ->references('id')->on('Location')
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
