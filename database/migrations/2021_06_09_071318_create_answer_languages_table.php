<?php
/**
 *  database/migrations/2021_06_09_071318_create_answer_languages_table.php
 *
 * Date-Time: 09.06.21
 * Time: 11:13
 * @author Vito Makhatadze <vitomaxatadze@gmail.com>
 */

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnswerLanguagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('answer_languages', function (Blueprint $table) {
            $table->id();
            $table->foreignId('answer_id')->constrained('answers');
            $table->foreignId('language_id')->constrained('languages');
            $table->string('title')->nullable();
            $table->index(['answer_id','language_id']);
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
        Schema::dropIfExists('answer_languages');
    }
}
