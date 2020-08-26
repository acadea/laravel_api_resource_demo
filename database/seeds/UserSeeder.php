<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
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
        \Illuminate\Support\Facades\DB::table('users')->truncate();
        factory(\App\User::class, 3)->create();

        $this->enableForeignKeys();

    }
}
