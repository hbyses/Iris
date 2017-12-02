<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
class CreateIssueTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'Issue';
    /**
     * Run the migrations.
     * @table Issue
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) return;
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('Issuable_id');
            $table->integer('User_id');
            $table->dateTime('loanDate')->nullable();
            $table->dateTime('returnDate')->nullable();
            $table->string('Issuecol', 45)->nullable();

            $table->index(["Issuable_id"], 'fk_Issue_Issuable1_idx');

            $table->index(["User_id"], 'fk_Issue_User1_idx');


            $table->foreign('Issuable_id', 'fk_Issue_Issuable1_idx')
                ->references('id')->on('Issuable')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('User_id', 'fk_Issue_User1_idx')
                ->references('id')->on('User')
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
