<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
class CreateIssuableorderTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'IssuableOrder';
    /**
     * Run the migrations.
     * @table IssuableOrder
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) return;
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->increments('id');
            $table->integer('Issuable_id');

            $table->index(["Issuable_id"], 'fk_IssuableOrder_Issuable1_idx');


            $table->foreign('Issuable_id', 'fk_IssuableOrder_Issuable1_idx')
                ->references('id')->on('Issuable')
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
