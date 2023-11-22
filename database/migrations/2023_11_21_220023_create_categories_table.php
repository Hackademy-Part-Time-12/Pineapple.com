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
            ['name' => 'pBook', 'cover' => '/storage/default/pBookCategory.png'],
            ['name' => 'pTab', 'cover' => '/storage/default/product-auto-img.png'],
            ['name' => 'pPhone', 'cover' => '/storage/default/pPhoneCategory.png'],
            ['name' => 'pWatch', 'cover' => '/storage/default/pWatchCategory.png'],
            ['name' => 'pTV', 'cover' => '/storage/default/product-auto-img.png'],
            ['name' => 'pAir', 'cover' => '/storage/default/product-auto-img.png'],
            ['name' => 'Accessori', 'cover' => '/storage/default/product-auto-img.png'],
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
