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
        Schema::create('guests', function (Blueprint $table) {
            $table->smallIncrements('id');
            $table->unsignedTinyInteger('group_id')->nullable();
            $table->string('name', 25);
            $table->string('surname', 25);
            $table->string('email', 30)->nullable();
            $table->string('phone');
            $table->tinyInteger('quantity_of_invitations')->default(1);
            $table->timestamp('confirmed_at')->nullable()->default(null);
            $table->unsignedTinyInteger('created_by')->nullable()->default(null);
            $table->enum('origin', ['individual', 'masivo'])->default('individual');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //Schema::dropIfExists('guests');
    }
};
