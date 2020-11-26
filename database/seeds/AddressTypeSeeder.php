<?php

use App\Models\AddressType;
use Illuminate\Database\Seeder;

class AddressTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AddressType::create([
            'id' => 1,
            'name' => 'DOMICILIO',
            'description' => 'ENDEREÇO RESIDENCIAL'
        ]);

        AddressType::create([
            'id' => 2,
            'name' => 'COMERCIAL',
            'description' => 'ENDEREÇO COMERCIAL'
        ]);

        AddressType::create([
            'id' => 3,
            'name' => 'COBRANCA',
            'description' => 'ENDEREÇO DE COBRANÇA'
        ]);

        AddressType::create([
            'id' => 4,
            'name' => 'OUTROS',
            'description' => 'OUTRO TIPO DE ENDEREÇO'
        ]);
    }
}
