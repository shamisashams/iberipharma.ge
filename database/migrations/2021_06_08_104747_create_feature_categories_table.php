<?php
/**
 *  database/migrations/2021_06_08_104747_create_feature_categories_table.php
 *
 * Date-Time: 08.06.21
 * Time: 14:47
 * @author Vito Makhatadze <vitomaxatadze@gmail.com>
 */

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * Class CreateFeatureCategoriesTable
 */
class CreateFeatureCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('feature_categories', function (Blueprint $table) {
            $table->bigInteger('feature_id')->unsigned()->index();
            $table->bigInteger('category_id')->unsigned()->index();

            $table->foreign('feature_id')->references('id')->on('features');
            $table->foreign('category_id')->references('id')->on('categories');

            $table->primary(['feature_id', 'category_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('feature_categories');
    }
}
