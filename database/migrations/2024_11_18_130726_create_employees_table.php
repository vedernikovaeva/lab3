<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
    Schema::create('employees', function (Blueprint $table) {
        $table->id();
        $table->string('name');
        $table->string('position');
        $table->decimal('salary', 10, 2);
        $table->integer('children')->default(0);
        $table->integer('experience')->default(0);
        $table->timestamps();
        $table->foreignId('creator_user_id')->nullable()->constrained('users')->onDelete('cascade');
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
        Schema::table('employees', function (Blueprint $table) {
            $table->dropForeign(['creator_user_id']);
            $table->dropColumn('creator_user_id');
        });
    }
};
