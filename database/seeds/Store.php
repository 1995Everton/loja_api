<?php

use Illuminate\Database\Seeder;

class Store extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Store::create([
            'name' => 'Kabum',
            'telephone' => '(19) 2114-4444',
            'email' => 'atendimento@kabum.com.br',
            'street' => 'Rua Carlos Gomes',
            'number' => '1321',
            'complement'=> '9º Andar',
            'neighborhood' => 'Centro',
            'cep' => '13480-010',
            'city' => 'Limeira',
            'state' => 'SP',
            'country' => 'Brazil',
            'logo' => 'https://static.kabum.com.br/conteudo/temas/001/imagens/topo/logo_kabum_.png',
            'logo_footer' => 'https://static.kabum.com.br/conteudo/temas/001/imagens/topo/logo_kabum_.png',
        ]);
    }
}
