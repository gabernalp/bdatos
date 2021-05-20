<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToReportesSplnsTable extends Migration
{
    public function up()
    {
        Schema::table('reportes_splns', function (Blueprint $table) {
            $table->unsignedBigInteger('usuario_id')->nullable();
            $table->foreign('usuario_id', 'usuario_fk_3771998')->references('id')->on('users');
        });
    }
}
