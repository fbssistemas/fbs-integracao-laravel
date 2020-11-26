<?php

use App\Models\Group;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Group::create([
            'id' => 1,
            'name' => 'FBS SISTEMAS',
            'cnpj' => '11299898000167',
            'type' => '1',
            'active' => '1',
        ]);
    }
}
