<?php

use App\Models\PersonType;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PersonTypeSeeder extends Seeder
{
    public function run()
    {
        PersonType::create([
            'id' => 1,
            'name' => 'EMPLOYEE',
            'description' => 'FUNCIONÁRIO',
            'key' => 'FUNCIONARIO'
        ]);

        PersonType::create([
            'id' => 2,
            'name' => 'CUSTOMER',
            'description' => 'CLIENTE',
            'key' => 'CLIENTE'
        ]);

        PersonType::create([
            'id' => 3,
            'name' => 'SUPPLIER',
            'description' => 'FORNECEDOR',
            'key' => 'FORNECEDOR'
        ]);

        PersonType::create([
            'id' => 4,
            'name' => 'SERVICE PROVIDER',
            'description' => 'PRESTADOR DE SERVIÇO',
            'key' => 'PRESTADOR'
        ]);

        PersonType::create([
            'id' => 5,
            'name' => 'CARRIER',
            'description' => 'TRANSPORTADORA',
            'key' => 'TRANSPORTADORA'
        ]);

        PersonType::create([
            'id' => 6,
            'name' => 'COMPANY',
            'description' => 'EMPRESA DO GRUPO',
            'key' => 'EMPRESA'
        ]);

        PersonType::create([
            'id' => 7,
            'name' => 'SELLER',
            'description' => 'REPRESENTANTE (VENDEDOR)',
            'key' => 'REPRESENTANTE'
        ]);

        PersonType::create([
            'id' => 8,
            'name' => 'CONTACT',
            'description' => 'CONTATO',
            'key' => 'CONTATO'
        ]);

        PersonType::create([
            'id' => 9,
            'name' => 'OWNER',
            'description' => 'PROPRIETÁRIO',
            'key' => 'PROPRIETARIO'
        ]);
    }
}
