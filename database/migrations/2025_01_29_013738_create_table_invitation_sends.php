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
        Schema::create('invitation_sends', function (Blueprint $table) {
            $table->smallIncrements('id');
            $table->unsignedTinyInteger('invitation_id');
            $table->unsignedSmallInteger('guest_id');
            $table->string('token', 50);
            $table->timestamp('created_at');
            $table->timestamp('send_at');
            $table->timestamp('confirmed_at');
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invitation_sends');
    }
};
