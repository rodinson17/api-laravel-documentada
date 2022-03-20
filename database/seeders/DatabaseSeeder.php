<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(10)->create();

        File::deleteDirectory(storage_path("app/public/products"));
        File::makeDirectory(storage_path("app/public/products"));
        Product::factory(15)->create();
    }
}
