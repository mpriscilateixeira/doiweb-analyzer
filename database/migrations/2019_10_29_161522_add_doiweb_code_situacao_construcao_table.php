<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddDoiwebCodeSituacaoConstrucaoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('doiweb_code_situacao_construcao', function (Blueprint $table) {
            $table->uuid('id')
                ->index();
            $table->unsignedInteger('code');
            $table->string('value');
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
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('doiweb_code_situacao_construcao');
        Schema::enableForeignKeyConstraints();
    }
}
