<?php

namespace Database\Seeders;

use App\Models\Location;
use App\Models\Status;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class BuildingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $locationCount = Location::count();
        $statusCount = Status::count();

        $buildings = [
            [
                // id - 01
                'name' => 'BELVEDERE LORIAN',
                'address' => 'Av. Martin Luther Kinf, 980',
                'district' => 'Adalsia',
                'status_id' => rand(1, $statusCount),
                'location_id' => rand(1, $locationCount),
                'high_description' => ' 3 e 4 Dormitórios I 84 a 225m² I 2 a 3 vagas ',
                'description' => 'O Lorian Boulevard tem um conceito de moradia moderno, internacional e de alto padrão. É perfeito para quem busca mais qualidade de vida e a tranquilidade do interior, mas não quer sair de São Paulo.'
            ],

            [
                // id - 02
                'name' => 'CHEZ PERDIZES',
                'address' => 'Rua Cotoxó, 665',
                'district' => 'Perdizes',
                'status_id' => rand(1, $statusCount),
                'location_id' => rand(1, $locationCount),
                'high_description' => '4 Suítes I 180m² a 343m² I 3 a 4 vagas.',
                'description' => 'Chez, do francês “a casa de” é, desde sua essência, um apartamento com o clima de uma casa. Um lar com o melhor da exclusividade. Em uma localização privilegiada, que dá as boas-vindas a uma vida de pura sofisticação'
            ],

            [
                // id - 03
                'name' => 'CINQUO PERDIZES',
                'address' => 'RUA AIMBERÊ, 1.405',
                'district' => 'Perdizes',
                'status_id' => rand(1, $statusCount),
                'location_id' => rand(1, $locationCount),
                'high_description' => '3 e 4 Dormitórios I 116 a 310m² I 3 a 4 vagas ',
                'description' => 'Nobre. Autêntico. Desejado. Cinquo traz para perdizes, o privilégio de viver de maneira verdadeiramente exclusiva. Um projeto único, que apresenta cinco das melhores possibilidades para viver com sofisticação, privacidade e conforto.'
            ],

            [
                // id - 04
                'name' => 'FLOW BY GAFISA',
                'address' => 'Rua Nestor Pestana, 94',
                'district' => 'Consolação',
                'status_id' => rand(1, $statusCount),
                'location_id' => rand(1, $locationCount),
                'high_description' => 'Studio, 2 Dormitórios e Duplex',
                'description' => 'Flow Single, Flow Space e Double Flow.'
            ],

            [
                // id - 05
                'name' => 'HIGH LINE JARDINS',
                'address' => 'Rua Pamplona, 1004',
                'district' => 'Jardins',
                'status_id' => rand(1, $statusCount),
                'location_id' => rand(1, $locationCount),
                'high_description' => '2 Suítes  I 64m² a 108m² I 1 vaga',
                'description' => 'O Jardins é, desde sempre o bairro mais desejado da cidade. A região reúne excelente gastronomia, abriga casas e prédios de alto padrão, hotéis requintados, grifes de luxo, museus,galerias e parques. É referência em lifestyle, inovação e considerada, por muitos, a Manhattan Paulistana.'
            ],

            [
                // id - 06
                'name' => 'INVERT CAMPO BELO',
                'address' => 'Rua Otávio Tarquino de Sousa, 1222',
                'district' => 'Campo Belo',
                'status_id' => rand(1, $statusCount),
                'location_id' => rand(1, $locationCount),
                'high_description' => '2 a 3 Dormitórios - 1 a 3 Suítes I 63m² a 217m² I 1 a 3 vagas.',
                'description' => 'A Gafisa inverteu a lógica e trouxe o verde para dentro da sua casa. '
            ],

            [
                // id - 07
                'name' => 'J330',
                'address' => 'RUA JOSÉ MARIA LISBOA, 330',
                'district' => 'Jardins',
                'status_id' => rand(1, $statusCount),
                'location_id' => rand(1, $locationCount),
                'high_description' => ' 3 e 4 Dormitórios I 133m² a 217m² I 2 a 4 vagas',
                'description' => 'Viver no Jardins é aproveitar o que as quadras mais charmosas da cidade têm para oferecer. É ter um estilo de vida único.'
            ],

            [ 
                // id - 08
                'name' => 'MN15',
                'address' => 'Rua Manoel da Nóbrega, 812',
                'district' => 'Ibirapuera',
                'status_id' => rand(1, $statusCount),
                'location_id' => rand(1, $locationCount),
                'high_description' => '4 Dormitórios I 339m² a 573m² I 5 a 7 vagas',
                'description' => 'MN15. Uma obra de arte para ser admirada a em São Paulo.'
            ],

            [
                // id - 09
                'name' => 'MOOV BRÁS',
                'address' => 'RUA CORONEL MURSA, 56',
                'district' => 'Brás',
                'status_id' => rand(1, $statusCount),
                'location_id' => rand(1, $locationCount),
                'high_description' => '1 e 2 Dormitórios I 19m² e 45m²',
                'description' => 'MOOV é um convite à mudança. É viver as novas fases da vida. Aproveitar as melhores oportunidades. Ter o melhor custo-benefício. E estar sempre bem localizado.'
            ],

            [
                // id - 10
                'name' => 'MOOV. BELÉM',
                'address' => 'Rua Serra de Jairé, 72',
                'district' => 'Belém',
                'status_id' => rand(1, $statusCount),
                'location_id' => rand(1, $locationCount),
                'high_description' => '1 e 2 Dormitórios I 23m² e 27m²',
                'description' => 'MOOV é um convite à mudança. É viver as novas fases da vida. Aproveitar as melhores oportunidades. Ter o melhor custo-benefício. E estar sempre bem localizado.'
            ],

            [
                // id - 11
                'name' => 'MOOV. PARQUE MAIA',
                'address' => 'RUA ANTONIETA, 602',
                'district' => 'Parque Maia',
                'status_id' => rand(1, $statusCount),
                'location_id' => rand(1, $locationCount),
                'high_description' => '2 e 3 Dormitórios I 58m² e 75m² I 1 a 2 vagas',
                'description' => 'MOOV é um convite à mudança. É viver as novas fases da vida. Aproveitar as melhores oportunidades. Ter o melhor custo-benefício. E estar sempre bem localizado.'
            ],

            [
                // id - 12
                'name' => 'NORMANDIE MOEMA',
                'address' => 'AV. COTOVIA, 611',
                'district' => 'Moema',
                'status_id' => rand(1, $statusCount),
                'location_id' => rand(1, $locationCount),
                'high_description' => '2 e 3 Suítes I 102m² a 192m² I 2 vagas determinadas',
                'description' => 'Uma nova geração de apartamentos, reunindo tecnologia, PRATICIDADE E MUITO CONFORTO. O Normandie Moema foi concebido segundo esse conceito. Um endereço único, emoldurado por toda a magia da Rua Normandia incorporando um cenário de rara beleza.'
            ],

            [
                // id - 13
                'name' => 'SCENA TATUAPÉ',
                'address' => 'Rua Tuiuti, 626',
                'district' => 'Tatuapé',
                'status_id' => rand(1, $statusCount),
                'location_id' => rand(1, $locationCount),
                'high_description' => '2 e 3 Dormitórios I 106m² a 159m² I 2 vagas',
                'description' => 'Morar no Scena Tatuapé é estar a poucos passos da natureza, com o parque do Piqueri como extensão do condomínio.'
            ],

            [
                // id - 14
                'name' => 'UPDATE VILA MADALENA',
                'address' => 'RUA SIMPATIA, 200',
                'district' => 'Vila Madalena',
                'status_id' => rand(1, $statusCount),
                'location_id' => rand(1, $locationCount),
                'high_description' => 'Studios e Apartamentos I 20m² a 86m²',
                'description' => 'Resultado da cocriação de renomados profissionais, o Update Vila Madalena reúne a praticidade necessária para a vida moderna e o conforto de um apartamento inteligente e bem planejado, que traz consigo o consagrado DNA Upcon.'
            ],

            [
                // id - 15
                'name' => 'UPLIFE CONCEIÇÃO',
                'address' => 'Av. Dr. Hugo Beolchi,686',
                'district' => 'Conceição',
                'status_id' => rand(1, $statusCount),
                'location_id' => rand(1, $locationCount),
                'high_description' => '2 e 3 Dormitórios I 64m² a 130m² I 1 a 2 vagas',
                'description' => 'Chegar de metrô, sair de carro, passear de bike e voltar de avião. Surreal? Não para você. No Up Life Conceição, a mobilidade está em alta e você tem todos os meios disponíveis para ir e vir.'
            ],

            [
                // id - 16
                'name' => 'UPSIDE PARAÍSO',
                'address' => 'RUA AFONSO DE FREITAS, 59',
                'district' => 'Paraíso',
                'status_id' => rand(1, $statusCount),
                'location_id' => rand(1, $locationCount),
                'high_description' => '100m² a 144m²',
                'description' => 'Viver o melhor do seu tempo é viver no paraíso, bairro tranquilo onde você não vê o tempo passar e está bem perto de tudo o que a cidade tem de melhor para você aproveitar melhor o seu dia. Viver o melhor do seu tempo é ter um apartamento com uma planta perfeita para passar mais tempo com a família e receber os amigos. É ter a cozinha integrada com o terraço gourmet e uma linda vista da cidade.'
            ],

            [   
                // id - 17
                'name' => 'UPSIDE PINHEIROS',
                'address' => 'RUA JOÃO MOURA, 375',
                'district' => 'Pinheiros',
                'status_id' => rand(1, $statusCount),
                'location_id' => rand(1, $locationCount),
                'high_description' => '3 e 4 Dormitórios I 104m² e 162m² I 2 vagas',
                'description' => 'Viver em Pinheiros é estar em um dos bairros mais versáteis e sofisticados da cidade, ao lado dos principais centros comerciais de São Paulo. É a melhor forma de evitar o trânsito do dia a dia, além de estar superpróximo das melhores lojas e dos seus restaurantes preferidos em Pinheiros e nos Jardins.'
            ],

            [
                // id - 18
                'name' => 'LIFE 360°',
                'address' => 'Estrada do Bananal, 360',
                'district' => 'Freguesia',
                'status_id' => rand(1, $statusCount),
                'location_id' => rand(1, $locationCount),
                'high_description' => '62m² a 74m² I 2 e 3 quartos, cobertura 2,3 e 4 quartos I 1 ou 2 vagas',
                'description' => 'A Freguesia é um dos mais importantes bairros da Zona Oeste. Uma região que fica ainda mais valorizada com a nova parceria da Gafisa e Montserrat, referências no mercado imobiliário, com projetos que somam diferenciais exclusivos a uma localização planejada para transformar a vida de cada morador.'
            ],

            [
                // id - 19
                'name' => 'CYANO',
                'address' => 'Avenida Lucio Costa, 4.260',
                'district' => 'Barra da Tijuca',
                'status_id' => rand(1, $statusCount),
                'location_id' => rand(1, $locationCount),
                'high_description' => '285m² a 870m²',
                'description' => 'Viver de frente para o mar da Barra da Tijuca: Uma exclusividade que ganha ares de raridade.'
            ],

            [
                // id - 19
                'name' => 'WE Sorocaba',
                'address' => 'Rua Sorocaba, 701',
                'district' => 'Botafogo',
                'status_id' => rand(1, $statusCount),
                'location_id' => rand(1, $locationCount),
                'high_description' => '1010 m² a 263m² ',
                'description' => 'Moderno, com arquitetura contemporânea, chama a atenção pela beleza e localização.'
            ],
        ];

        // Inserindo nome por nome na tabela
        foreach ($buildings as $building) {
            DB::table('buildings')->insert([
                'name'              => Str::title($building['name']),
                'address'           => Str::title($building['address']),
                'district'          => Str::title($building['district']),
                'high_description'  => $building['high_description'],
                'description'       => $building['description'],
                'status_id'         => $building['status_id'],
                'location_id'       => $building['location_id'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
