<?php
/**
 * table deposits
 *
 * id           int autoincrement
 * user_id      int
 * wallet_id    int
 * invested     double precision [0]
 * percent      double precision [0]
 * active       smallint [0]
 * duration     smallint [0]
 * accrue_times smallint [0]
 * created_at   timestamp
 */

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDepositsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('deposits', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->integer('wallet_id');
            $table->double('invested')->default(0);
            $table->double('percent')->default(0);
            $table->smallInteger('active')->default(0);
            $table->smallInteger('duration')->default(0);
            $table->smallInteger('accrue_times')->default(0);
            $table->timestamp('created_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('deposits');
    }
}
