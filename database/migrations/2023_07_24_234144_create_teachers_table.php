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
        Schema::create('teachers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->cascadeOnDelete();
            $table->foreignId('department_id')->constrained('departments')->cascadeOnDelete();
            $table->string('name')->nullable(); // unsignedBigInteger its mean forign key defind do it.
            $table->string('t_id')->nullable();
            $table->string('phone')->nullable();
            $table->string('father')->nullable();
            $table->string('mother')->nullable();
            $table->string('barth')->nullable();
            $table->string('address')->nullable();
            $table->string('email')->nullable();
            $table->string('image')->nullable();
            $table->string('zip_code')->nullable();
            $table->string('post_code')->nullable();
            $table->string('pass')->nullable();
            $table->string('status')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teachers');
    }
};
