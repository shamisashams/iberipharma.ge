<?php
/**
 *  database/migrations/2021_06_08_103009_create_feature_languages_table.php
 *
 * Date-Time: 08.06.21
 * Time: 14:31
 * @author Vito Makhatadze <vitomaxatadze@gmail.com>
 */
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFeatureLanguagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('feature_languages', function (Blueprint $table) {
            $table->id();
            $table->foreignId('feature_id')->constrained('features');
            $table->foreignId('language_id')->constrained('languages');
            $table->string('title')->nullable();
            $table->index(['feature_id','language_id']);
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
        Schema::dropIfExists('feature_languages');
    }
}
