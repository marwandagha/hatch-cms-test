<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->addUsers();
        $this->addContent();
    }

    /**
     * Add user
     */
    public function addUsers(): void
    {
        \DB::table('users')->delete();
        \App\Models\User::create(['email' => 'admin@admin.com', 'password' => 'secret']);
    }

    /**
     * Add some content
     */
    public function addContent(): void
    {
        \DB::table('categories')->delete();
        \App\Models\Category::factory(5)->create();
        \DB::table('articles')->delete();
        \App\Models\Article::factory(5)->create();
        \DB::table('pages')->delete();
        \App\Models\Page::factory(6)->create(['parent_id' => null]);
        foreach (range(4, 5) as $p) {
            \App\Models\Page::factory(2)->create(['parent_id' => $p]);
        }



    }
}
