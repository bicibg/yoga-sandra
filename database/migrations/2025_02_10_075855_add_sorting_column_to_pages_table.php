<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('pages', function (Blueprint $table) {
            $table->integer('sorting')->after('slug')->nullable();
        });

        // Step 2: Use MySQL variables to update rows sequentially
        $pages = DB::table('pages')->orderBy('id')->get();
        $counter = 1;
        foreach ($pages as $page) {
            DB::table('pages')
                ->where('id', $page->id)
                ->update(['sorting' => $counter++]);
        }

        Schema::table('pages', function (Blueprint $table) {
            $table->integer('sorting')->nullable(false)->change();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('pages', function (Blueprint $table) {
            $table->dropColumn('sorting');
        });
    }
};
