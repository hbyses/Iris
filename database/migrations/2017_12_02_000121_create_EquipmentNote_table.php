<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
class CreateEquipmentnoteTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'EquipmentNote';
    /**
     * Run the migrations.
     * @table EquipmentNote
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) return;
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('Equipment_id');
            $table->integer('User_id');
            $table->string('note');

            $table->index(["Equipment_id"], 'fk_EquipmentNote_Equipment1_idx');

            $table->index(["User_id"], 'fk_EquipmentNote_User1_idx');


            $table->foreign('Equipment_id', 'fk_EquipmentNote_Equipment1_idx')
                ->references('id')->on('Equipment')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('User_id', 'fk_EquipmentNote_User1_idx')
                ->references('id')->on('Users')
                ->onDelete('cascade')
                ->onUpdate('cascade');
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
