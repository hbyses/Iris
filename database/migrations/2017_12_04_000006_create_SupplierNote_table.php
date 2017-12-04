<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
class CreateSuppliernoteTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'SupplierNote';
    /**
     * Run the migrations.
     * @table SupplierNote
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) return;
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->unsignedInteger('Supplier_id');
            $table->unsignedInteger('User_id');
            $table->string('note', 191);

            $table->index(["Supplier_id"], 'fk_SupplierNote_Supplier1_idx');

            $table->index(["User_id"], 'fk_SupplierNote_User1_idx');


            $table->foreign('Supplier_id', 'fk_SupplierNote_Supplier1_idx')
                ->references('id')->on('Supplier')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('User_id', 'fk_SupplierNote_User1_idx')
                ->references('id')->on('users')
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
