<?php
/**
 *  database/migrations/2021_06_08_101024_create_features_table.php
 *
 * Date-Time: 08.06.21
 * Time: 14:12
 * @author Vito Makhatadze <vitomaxatadze@gmail.com>
 */
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFeaturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::create('features', function (Blueprint $table) {
            $table->id();
            $table->string('position')->nullable();
            $table->boolean('status')->default(true);
            $table->boolean('filter')->default(false);
            $table->enum('type', ['input', 'textarea', 'checkbox', 'radio', 'select']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('features');
    }
}
