<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRemboursementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('remboursements', function (Blueprint $table) {
            $table->id();
            $table->foreignId("credit_id")->constrained();
            $table->foreignId("echeancier_id")->constrained();
            $table->integer("num_remb");
            $table->dateTime("date_remb");
            $table->double("mnt_remb_cap");
            $table->double("mnt_remb_int");
            $table->double("mnt_remb_gar");
            $table->double("mnt_remb_pen");
            $table->boolean("annul_remb")->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('remboursements');
    }
}
