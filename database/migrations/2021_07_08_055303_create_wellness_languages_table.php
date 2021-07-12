<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWellnessLanguagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wellness_languages', function (Blueprint $table) {
            $table->id();
            $table->foreignId('wellness_id')->constrained('wellnesses');
            $table->foreignId('language_id')->constrained('languages');
            $table->index(['wellness_id','language_id']);
            $table->longText('name')->nullable();
            $table->longText('content')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('wellness_languages');
    }
}
