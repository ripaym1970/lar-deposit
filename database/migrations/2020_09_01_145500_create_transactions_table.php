<?php
/**
 * table transactions
 *
 * id               int autoincrement
 * type             varying(30)
 * user_id          int
 * wallet_id        int
 * deposit_id       int [NULL]
 * amount           double precision [0]
 * created_at       timestamp
 */

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->string('type', 30);
            $table->integer('user_id');
            $table->integer('wallet_id');
            $table->integer('deposit_id')->default(NULL);
            $table->double('amount')->default(0);
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
        Schema::dropIfExists('transactions');
    }
}
