<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddPeriodAndCommentToChatterBanUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('chatter_ban_user', function (Blueprint $table) {
            $table->integer('period');
            $table->string('comment');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('chatter_ban_user', function (Blueprint $table) {
            $table->dropColumn('period');
            $table->dropColumn('comment');
        });
    }
}
