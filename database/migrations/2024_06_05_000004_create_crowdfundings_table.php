
<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCrowdfundingsTable extends Migration
{
    public function up()
    {
        Schema::create('crowdfundings', function (Blueprint $table) {
            $table->id();
            $table->decimal('required_amount', 10, 2);
            $table->decimal('collected_amount', 10, 2)->default(0);
            $table->date('start_date');
            $table->date('end_date');
            $table->foreignId('problem_id')->constrained('problems');
            $table->timestamps(); // created_at and updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('crowdfundings');
    }
}
