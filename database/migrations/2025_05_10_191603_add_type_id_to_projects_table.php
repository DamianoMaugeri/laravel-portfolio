<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('projects', function (Blueprint $table) {
            //creo la nuova colonna
            $table->foreignId('type_id')->nullable()->constrained()->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('projects', function (Blueprint $table) {


            //eliminiamo la  nuova colonna in 2 passaggi
            $table->dropForeign('projects_type_id_foreign');
            $table->dropColumn('type_id');

        });
    }
};
