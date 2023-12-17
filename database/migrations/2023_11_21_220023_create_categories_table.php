<?php

use App\Models\Category;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('cover');
            $table->timestamps();
        });

        $categories = [
            ['name' => 'pBook', 'cover' => '/storage/default/pBookCategory.jpg'],
            ['name' => 'pTab', 'cover' => '/storage/default/pTabCategory.jpg'],
            ['name' => 'pPhone', 'cover' => '/storage/default/pPhoneCategory.jpg'],
            ['name' => 'pWatch', 'cover' => '/storage/default/pWatchCategory.jpg'],
            ['name' => 'pTV', 'cover' => '/storage/default/pTVCategory.png'],
            ['name' => 'pAir', 'cover' => '/storage/default/pAirCategory.jpg'],
            ['name' => 'Accessori', 'cover' => '/storage/default/accessoriCategory.jpg'],
            // Aggiungi altre categorie qui...
        ];

        foreach ($categories as $category) {
            Category::create([
                'name' => $category['name'],
                'cover' => $category['cover'],
            ]);
        }

    }



    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categories');
    }
};
