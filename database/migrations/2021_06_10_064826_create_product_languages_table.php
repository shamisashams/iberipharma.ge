<?php
/**
 *  database/migrations/2021_06_10_064826_create_product_languages_table.php
 *
 * Date-Time: 10.06.21
 * Time: 10:54
 * @author Vito Makhatadze <vitomaxatadze@gmail.com>
 */
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductLanguagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_languages', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_id')->constrained('products');
            $table->foreignId('language_id')->constrained('languages');
            $table->index(['product_id', 'language_id']);
            $table->string('meta_title')->nullable();
            $table->string('meta_description')->nullable();
            $table->longText('meta_keywords')->nullable();
            $table->string('title')->nullable();
            $table->longText('description')->nullable();
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
        Schema::dropIfExists('product_languages');
    }
}
