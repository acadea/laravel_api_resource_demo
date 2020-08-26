<?php

use Illuminate\Database\Seeder;

class CompanySeeder extends Seeder
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
        \Illuminate\Support\Facades\DB::table('companies')->truncate();
        factory(\App\Company::class, 3)->create();

        $this->enableForeignKeys();
    }
}
