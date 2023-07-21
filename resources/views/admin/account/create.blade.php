{{-- Schema::create('classes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('department_id')->nullable();
            $table->string('class')->nullable();
            $table->string('slug')->nullable();
            $table->timestamps();
            $table->foreign('department_id')->references('id')->on('departments')->onDelete('cascade');
        }); --}}

        {{-- Schema::create('subjects', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('class_id')->nullable(); // unsignedBigInteger its mean forign key defind do it.
            $table->string('subject')->nullable();
            $table->string('slug')->nullable();
            $table->timestamps();
            $table->foreign('class_id')->references('id')->on('classes')->onDelete('cascade');
        }); --}}

        {{-- public function class()
    {
        return $this->belongsTo(Classes::class, 'class_id'); // class_id is frogn key
    } --}}