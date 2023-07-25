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
            $table->string('t_name')->nullable(); // unsignedBigInteger its mean forign key defind do it.
            $table->string('t_id')->nullable();
            $table->string('t_phone')->nullable();
            $table->string('t_father')->nullable();
            $table->string('t_mother')->nullable();
            $table->string('t_barth')->nullable();
            $table->string('t_address')->nullable();
            $table->string('t_email')->nullable();
            $table->string('t_image')->nullable();
            $table->string('zip_code')->nullable();
            $table->string('post_code')->nullable();
            $table->string('t_pass')->nullable();
            $table->string('t_status')->default(0);
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
