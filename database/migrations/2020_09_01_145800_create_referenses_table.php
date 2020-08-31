<?php
/**
 * table referenses
 *
 * user_id	    users(id)
 * wallet_id	wallets(id)
 * deposit_id	deposits(id)
 */

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReferensesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('referenses', function (Blueprint $table) {
            $table->integer('user_id');
            $table->integer('wallet_id');
            $table->integer('deposit_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('referenses');
    }
}
