<?php

use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    use DisableForeignKeys;

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $this->disableForeignKeys();

        \Illuminate\Support\Facades\DB::table('posts')->truncate();
        factory(\App\Post::class, 3)->create();
        $this->enableForeignKeys();

    }
}
