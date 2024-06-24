<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCrowdsourcingsTable extends Migration
{
    public function up()
    {
        Schema::create('crowdsourcings', function (Blueprint $table) {
            $table->id();
            $table->text('proposal');
            $table->date('submission_date');
            $table->foreignId('user_id')->constrained('users');
            $table->foreignId('problem_id')->constrained('problems');
            $table->timestamps(); // created_at and updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('crowdsourcings');
    }
}
