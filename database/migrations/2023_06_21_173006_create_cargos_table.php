<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('cargos', function (Blueprint $table) {
            $table->id();
            $table->foreignId("user_id");
            $table->string("traking_no");
            $table->string("sender_name");
            $table->string("sender_mobile_no");
            $table->string("sender_email");
            $table->string("sender_full_address");
            $table->string("receiver_name");
            $table->string("receiver_mobile_no");
            $table->string("receiver_email");
            $table->string("receiver_full_address");
            $table->string("item_name");
            $table->longText("item_description");
            $table->string("cost");
            $table->enum("payment_status", ["pending", "done"]);
            $table->enum("status", ["pending", "approved", "picked", "out_for_delivery", "delivered", "done"]);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cargos');
    }
};
