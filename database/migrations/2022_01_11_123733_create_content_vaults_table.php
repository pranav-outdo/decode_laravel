<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContentVaultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('content_vaults', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->text('link')->nullable();
            $table->string('image')->nullable();
            $table->json('topic_ids')->nullable();
            $table->json('type_ids')->nullable();
            $table->boolean('is_active')->default(1)->comment('1=Active, 2=Inactive');
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
        Schema::dropIfExists('content_vaults');
    }
}
