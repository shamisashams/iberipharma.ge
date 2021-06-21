<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCertificateLanguagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('certificate_languages', function (Blueprint $table) {
            $table->id();
            $table->foreignId('certificate_id')->constrained('certificates');
            $table->foreignId('language_id')->constrained('languages');
            $table->index(['certificate_id','language_id']);
            $table->string('title')->nullable();
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
        Schema::dropIfExists('certificate_languages');
    }
}
