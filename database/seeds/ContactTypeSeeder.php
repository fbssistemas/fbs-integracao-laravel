<?php

use App\Models\ContactType;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ContactType::create([
            'id' => 1,
            'name' => 'TELEFONE RESIDENCIAL',
            'description' => 'TELEFONE DA CASA DA PESSOA'
        ]);

        ContactType::create([
            'id' => 2,
            'name' => 'TELEFONE COMERCIAL',
            'description' => 'TELEFONE DA EMPRESA'
        ]);

        ContactType::create([
            'id' => 3,
            'name' => 'CELULAR',
            'description' => 'NUMERO DO CELULAR'
        ]);

        ContactType::create([
            'id' => 4,
            'name' => 'E-MAIL',
            'description' => 'ENDEREÇO DE E-MAIL'
        ]);

        ContactType::create([
            'id' => 5,
            'name' => 'SITE',
            'description' => 'ENDEREÇO DO SITE'
        ]);

        ContactType::create([
            'id' => 6,
            'name' => 'BIP',
            'description' => 'NUMERO DO PAGER (BIP)'
        ]);

        ContactType::create([
            'id' => 7,
            'name' => 'WHATSAPP',
            'description' => 'NUMERO DO WHATSAPP'
        ]);

        ContactType::create([
            'id' => 8,
            'name' => 'TELEGRAM',
            'description' => 'NUMERO DO TELEGRAM'
        ]);

        ContactType::create([
            'id' => 9,
            'name' => 'SKYPE',
            'description' => 'ENDEREÇO DO SKYPE'
        ]);

        ContactType::create([
            'id' => 10,
            'name' => 'FACEBOOK',
            'description' => 'ENDEREÇO DO FACEBOOK'
        ]);

        ContactType::create([
            'id' => 11,
            'name' => 'INSTAGRAM',
            'description' => 'ENDEREÇO DO INSTAGRAM'
        ]);

        ContactType::create([
            'id' => 12,
            'name' => 'TWITTER',
            'description' => 'ENDEREÇO DO TWITTER'
        ]);

        ContactType::create([
            'id' => 13,
            'name' => 'LINKEDIN',
            'description' => 'ENDEREÇO DO LINKEDIN'
        ]);

        ContactType::create([
            'id' => 14,
            'name' => 'GITHUB',
            'description' => 'ENDEREÇO DO GITHUB'
        ]);
    }
}
