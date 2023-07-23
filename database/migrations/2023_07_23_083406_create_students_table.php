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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->nullable(); // unsignedBigInteger its mean forign key defind do it.
            $table->string('stu_name')->nullable(); // unsignedBigInteger its mean forign key defind do it.
            $table->string('stu_id')->nullable();
            $table->string('stu_phone')->nullable();
            $table->string('stu_father')->nullable();
            $table->string('stu_mother')->nullable();
            $table->string('stu_barth')->nullable();
            $table->string('stu_address')->nullable();
            $table->string('stu_email')->nullable();
            $table->string('stu_image')->nullable();
            $table->string('zip_code')->nullable();
            $table->string('post_code')->nullable();
            $table->string('stu_stu_pass')->nullable();
            $table->string('stu_status')->default(0);
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
