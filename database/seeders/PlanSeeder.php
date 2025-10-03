<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class PlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Array como nome dos plantas
        $plantas = [
            [
                'name' => '84m² Opção - 1',
                'area' => 84,
                'empreendimento_id' => 1
            ],
            [
                'name' => '84m² Opção - 2',
                'area' => 84,
                'empreendimento_id' => 1
            ],
            [
                'name' => '88m² Opção - 1',
                'area' => 88,
                'empreendimento_id' => 1
            ],
            [
                'name' => '88m² Opção - 2',
                'area' => 88,
                'empreendimento_id' => 1
            ],
            [
                'name' => '111m² Opção - 1',
                'area' => 111,
                'empreendimento_id' => 1
            ],
            [
                'name' => '111m² Opção - 2',
                'area' => 111,
                'empreendimento_id' => 1
            ],
            [
                'name' => '136m² Opção - 1',
                'area' => 136,
                'empreendimento_id' => 1
            ],
            [
                'name' => '136m² Opção - 2',
                'area' => 136,
                'empreendimento_id' => 1
            ],
            [
                'name' => 'Duplex',
                'area' => 225,
                'empreendimento_id' => 1
            ],

            
            [
                'name' => '180m² Opção - 1',
                'area' => 180,
                'empreendimento_id' => 2
            ],
            [
                'name' => '180m² Opção - 4',
                'area' => 180,
                'empreendimento_id' => 2
            ],
            [
                'name' => '180m² Opção - 4',
                'area' => 180,
                'empreendimento_id' => 2
            ],
            [
                'name' => '180m² Opção - 4',
                'area' => 180,
                'empreendimento_id' => 2
            ],
            [
                'name' => '341m² - Cobertura',
                'area' => 341,
                'empreendimento_id' => 2
            ],


            [
                'name' => '116m² Opção - 1',
                'area' => 116,
                'empreendimento_id' => 3
            ],
            [
                'name' => '116m² Opção - 2',
                'area' => 116,
                'empreendimento_id' => 3
            ],
            [
                'name' => '122m² Opção - 1',
                'area' => 122,
                'empreendimento_id' => 3
            ],
            [
                'name' => '122m² Opção - 2',
                'area' => 122,
                'empreendimento_id' => 3
            ],
            [
                'name' => '182m² Opção - 1',
                'area' => 182,
                'empreendimento_id' => 3
            ],
            [
                'name' => '182m² Opção - 2',
                'area' => 182,
                'empreendimento_id' => 3
            ],
            [
                'name' => '224m² - Cobertura',
                'area' => 224,
                'empreendimento_id' => 3
            ],
            [
                'name' => '241m² - Cobertura',
                'area' => 241,
                'empreendimento_id' => 3
            ],
            [
                'name' => '310m² - Cobertura',
                'area' => 310,
                'empreendimento_id' => 3
            ],  

            [
                'name' => '21m²',
                'area' => 21,
                'empreendimento_id' => 4
            ],
            [
                'name' => '24m² Opção - 1',
                'area' => 24,
                'empreendimento_id' => 4
            ],
            [
                'name' => '24m² Opção - 2',
                'area' => 24,
                'empreendimento_id' => 4
            ],
            [
                'name' => '28m² Opção - 1',
                'area' => 28,
                'empreendimento_id' => 4
            ],
            [
                'name' => '28m² Opção - 2',
                'area' => 28,
                'empreendimento_id' => 4
            ],
            [
                'name' => '37m² Opção - 1',
                'area' => 37,
                'empreendimento_id' => 4
            ],
            [
                'name' => '37m² Opção - 2',
                'area' => 37,
                'empreendimento_id' => 4
            ],
            [
                'name' => '37m² Opção - 3',
                'area' => 37,
                'empreendimento_id' => 4
            ],
            [
                'name' => '37m² Opção - 4',
                'area' => 37,
                'empreendimento_id' => 4
            ],
            [   
                'name' => 'Duplex',
                'area' => 0,
                'empreendimento_id' => 4
            ],

            
            [
                'name' => '64m² Opção - 1',
                'area' => 64,
                'empreendimento_id' => 5
            ],
            [
                'name' => '64m² Opção - 2',
                'area' => 64,
                'empreendimento_id' => 5
            ],
            [
                'name' => '64m² Opção - 3',
                'area' => 64,
                'empreendimento_id' => 5
            ],
            [
                'name' => 'Duplex - 108m²',
                'area' => 108,
                'empreendimento_id' => 5
            ],

            [
                'name' => '35m²',
                'area' => 35,
                'empreendimento_id' => 6
            ],
            [
                'name' => '63m² Opção - 1',
                'area' => 63,
                'empreendimento_id' => 6
            ],
            [
                'name' => '63m² Opção - 2',
                'area' => 63,
                'empreendimento_id' => 6
            ],
            [
                'name' => '69m²',
                'area' => 69,
                'empreendimento_id' => 6
            ],
            [
                'name' => '105m² Opção - 1',
                'area' => 105,
                'empreendimento_id' => 6
            ],
            [
                'name' => '105m² Opção - 2',
                'area' => 105,
                'empreendimento_id' => 6
            ],
            [
                'name' => '132m²',
                'area' => 132,
                'empreendimento_id' => 6
            ],
            [
                'name' => '163m² - Cobertura',
                'area' => 163,
                'empreendimento_id' => 6
            ],
            [
                'name' => '217m²',
                'area' => 217,
                'empreendimento_id' => 6
            ],

            [
                'name' => '133m² Opção - 1',
                'area' => 133,
                'empreendimento_id' => 7
            ],
            [
                'name' => '133m² Opção - 2',
                'area' => 133,
                'empreendimento_id' => 7
            ],
            [
                'name' => '133m² Opção - 3',
                'area' => 133,
                'empreendimento_id' => 7
            ],
            [
                'name' => '133m² Opção - 4',
                'area' => 133,
                'empreendimento_id' => 7
            ],
            [
                'name' => 'Duplex - 217m²',
                'area' => 217,
                'empreendimento_id' => 7
            ],
            
            [
                'name' => '339m²',
                'area' => 339,
                'empreendimento_id' => 8
            ],
            [
                'name' => '341m²',
                'area' => 341,
                'empreendimento_id' => 8
            ],
            [
                'name' => 'Duplex 574m²',
                'area' => 574,
                'empreendimento_id' => 8
            ],

            [
                'name' => '19m² Opção - 1',
                'area' => 19,
                'empreendimento_id' => 9
            ],
            [
                'name' => '19m² Opção - 2',
                'area' => 19,
                'empreendimento_id' => 9
            ],
            [
                'name' => '19m² Opção - 3',
                'area' => 19,
                'empreendimento_id' => 9
            ],
            [
                'name' => '19m² Opção - 4',
                'area' => 19,
                'empreendimento_id' => 9
            ],
            [
                'name' => '19m² Opção - 5',
                'area' => 19,
                'empreendimento_id' => 9
            ],
            [
                'name' => '19m² Opção - 6',
                'area' => 19,
                'empreendimento_id' => 9
            ],
            [
                'name' => '36m² Opção - 1',
                'area' => 36,
                'empreendimento_id' => 9
            ],
            [
                'name' => '36m² Opção - 2',
                'area' => 36,
                'empreendimento_id' => 9
            ],   
            [
                'name' => '45m² Opção - 1',
                'area' => 45,
                'empreendimento_id' => 9
            ],
            [
                'name' => '45m² Opção - 2',
                'area' => 45,
                'empreendimento_id' => 9
            ],
                     
            [
                'name' => '23m² Opção - 1',
                'area' => 23,
                'empreendimento_id' => 10
            ],
            [
                'name' => '23m² Opção - 2',
                'area' => 23,
                'empreendimento_id' => 10
            ],
            [
                'name' => '23m² Opção - 3',
                'area' => 23,
                'empreendimento_id' => 10
            ],
            [
                'name' => '23m² Opção - 4',
                'area' => 23,
                'empreendimento_id' => 10
            ],
            [
                'name' => '23m² Opção - 5',
                'area' => 23,
                'empreendimento_id' => 10
            ],
            [
                'name' => '23m² Opção - 6',
                'area' => 23,
                'empreendimento_id' => 10
            ],
            [
                'name' => '37m² Opção - 1',
                'area' => 37,
                'empreendimento_id' => 10
            ],
            [
                'name' => '37m² Opção - 2',
                'area' => 37,
                'empreendimento_id' => 10
            ], 

            [
                'name' => '58m²',
                'area' => 58,
                'empreendimento_id' => 11
            ],
            [
                'name' => '75m² Opção - 1',
                'area' => 75,
                'empreendimento_id' => 11
            ],
            [
                'name' => '75m² Opção - 2',
                'area' => 75,
                'empreendimento_id' => 11
            ],

            [
                'name' => '102m² Opção - 1',
                'area' => 102,
                'empreendimento_id' => 12
            ],
            [
                'name' => '102m² Opção - 2',
                'area' => 102,
                'empreendimento_id' => 12
            ],
            [
                'name' => '150m² Opção - 1',
                'area' => 150,
                'empreendimento_id' => 12
            ],
            [
                'name' => '150m² Opção - 2',
                'area' => 150,
                'empreendimento_id' => 12
            ],
            [
                'name' => '150m² Opção - 3',
                'area' => 150,
                'empreendimento_id' => 12
            ],
            [
                'name' => '150m² Opção - 4',
                'area' => 150,
                'empreendimento_id' => 12
            ],
            [
                'name' => '192m²',
                'area' => 192,
                'empreendimento_id' => 12
            ],

            [
                'name' => '106m² Opção - 1',
                'area' => 106,
                'empreendimento_id' => 13
            ],
            [
                'name' => '106m² Opção - 2',
                'area' => 106,
                'empreendimento_id' => 13
            ],
            [
                'name' => '106m² Opção - 3',
                'area' => 106,
                'empreendimento_id' => 13
            ],
            [
                'name' => '106m² Opção - 4',
                'area' => 106,
                'empreendimento_id' => 13
            ],
            [
                'name' => '159m²',
                'area' => 159,
                'empreendimento_id' => 13
            ],

            [
                'name' => '20m² Opção - 1',
                'area' => 20,
                'empreendimento_id' => 14
            ],
            [
                'name' => '20m² Opção - 2',
                'area' => 20,
                'empreendimento_id' => 14
            ],
            [   
                'name' => '40m² Opção - 1',
                'area' => 40,
                'empreendimento_id' => 14
            ],
            [   
                'name' => '40m² Opção - 2',
                'area' => 40,
                'empreendimento_id' => 14
            ],            

            [
                'name' => '130m²',
                'area' => 130,
                'height' => 0,
                'width' => 0,
                'empreendimento_id' => 15
            ],

            [
                'name' => '117m²',
                'area' =>   117,
                'height' => 1880,
                'width' => 898,
                'empreendimento_id' => 15
            ],

            [
                'name' => '81m² Opção - 1',
                'area' => 81,
                'height' => 1590,
                'width' => 685,
                'empreendimento_id' => 15
            ],

            [
                'name' => '81m² Opção - 2',
                'area' => 81,
                'height' => 1590,
                'width' => 685,
                'empreendimento_id' => 15
            ],

            [
                'name' => '81m² Opção - 3',
                'area' => 81,
                'height' => 1590,
                'width' => 685,
                'empreendimento_id' => 15
            ],

            [
                'name' => '64m² Opção - 1',
                'area' => 64,
                'height' => 973,
                'width' => 898,
                'empreendimento_id' => 15
            ],

            [
                'name' => '64m² Opção - 2',
                'area' => 64,
                'height' => 973,
                'width' => 898,
                'empreendimento_id' => 15
            ],

            [
                'name' => '100m² Opção - 1',
                'area' => 100,
                'empreendimento_id' => 16
            ],
            [
                'name' => '100m² Opção - 2',
                'area' => 100,
                'empreendimento_id' => 16
            ],
            [
                'name' => '144m² Opção - 1',
                'area' => 144,
                'empreendimento_id' => 16
            ],
            [
                'name' => '144m² Opção - 2',
                'area' => 144,
                'empreendimento_id' => 16
            ],            

            [
                'name' => '104m² Opção - 1',
                'area' => 104,
                'empreendimento_id' => 17
            ],
            [
                'name' => '104m² Opção - 2',
                'area' => 104,
                'empreendimento_id' => 17
            ],
            [
                'name' => '162m² Opção - 1',
                'area' => 162,
                'empreendimento_id' => 17
            ],
            [
                'name' => '162m² Opção - 2',
                'area' => 162,
                'empreendimento_id' => 17
            ],       

            [
                'name' => '63m² Opção - 1',
                'area' => 63,
                'empreendimento_id' => 18
            ],
            [
                'name' => '63m² Opção - 2',
                'area' => 63,
                'empreendimento_id' => 18
            ],
            [
                'name' => '63m² Opção - 3',
                'area' => 63,
                'empreendimento_id' => 18
            ],
            [
                'name' => '63m² Opção - 4',
                'area' => 63,
                'empreendimento_id' => 18
            ],
            [
                'name' => '70m² Opção - 1',
                'area' => 70,
                'empreendimento_id' => 18
            ],

            [
                'name' => '70m² Opção - 2',
                'area' => 70,
                'empreendimento_id' => 18
            ],
            [
                'name' => '73m² Opção - 1',
                'area' => 73,
                'empreendimento_id' => 18
            ],
            [
                'name' => '73m² Opção - 2',
                'area' => 73,
                'empreendimento_id' => 18
            ],
            [
                'name' => '75m² Opção - 1',
                'area' => 75,
                'empreendimento_id' => 18
            ],
            [
                'name' => '75m² Opção - 2',
                'area' => 75,
                'empreendimento_id' => 18
            ],
            [
                'name' => 'Duplex 120m² Opção - 1',
                'area' => 120,
                'empreendimento_id' => 18
            ],
            [
                'name' => 'Duplex 120m² Opção - 1',
                'area' => 120,
                'empreendimento_id' => 18
            ],
            [
                'name' => 'Duplex 126m² Opção - 1',
                'area' => 126,
                'empreendimento_id' => 18
            ],
            [
                'name' => 'Duplex 126m² Opção - 2',
                'area' => 126,
                'empreendimento_id' => 18
            ],
            [
                'name' => 'Duplex 137m² Opção - 1',
                'area' => 137,
                'empreendimento_id' => 18
            ],
            [
                'name' => 'Duplex 137m² Opção - 2',
                'area' => 137,
                'empreendimento_id' => 18
            ],
            [
                'name' => 'Duplex 145m² Opção - 1',
                'area' => 145,
                'empreendimento_id' => 18
            ],
            [
                'name' => 'Duplex 145m² Opção - 2',
                'area' => 145,
                'empreendimento_id' => 18
            ],
            [
                'name' => 'Duplex 150m² Opção - 1',
                'area' => 150,
                'empreendimento_id' => 18
            ],
            [
                'name' => 'Duplex 150m² Opção - 2',
                'area' => 150,
                'empreendimento_id' => 18
            ],
            [
                'name' => 'Duplex 155m² Opção - 1',
                'area' => 155,
                'empreendimento_id' => 18
            ],
            [
                'name' => 'Duplex 155m² Opção - 2',
                'area' => 155,
                'empreendimento_id' => 18
            ],
            [
                'name' => 'Duplex 165m² Opção - 1',
                'area' => 165,
                'empreendimento_id' => 18
            ],
            [
                'name' => 'Duplex 165m² Opção - 2',
                'area' => 165,
                'empreendimento_id' => 18
            ],

            [
                'name' => '285m²',
                'area' => 285,
                'empreendimento_id' => 19
            ],
            [
                'name' => '290m²',
                'area' => 290,
                'empreendimento_id' => 19
            ],
            [
                'name' => '300m²',
                'area' => 300,
                'empreendimento_id' => 19
            ],
            [
                'name' => '307m²',
                'area' => 307,
                'empreendimento_id' => 19
            ],
            [
                'name' => '367m²',
                'area' => 367,
                'empreendimento_id' => 19
            ],
            [
                'name' => '368m²',
                'area' => 368,
                'empreendimento_id' => 19
            ],
            [
                'name' => '380m²',
                'area' => 380,
                'empreendimento_id' => 19
            ],
            [
                'name' => '560m²',
                'area' => 560,
                'empreendimento_id' => 19
            ],
            [
                'name' => '595m²',
                'area' => 595,
                'empreendimento_id' => 19
            ],
            [
                'name' => '601m²',
                'area' => 601,
                'empreendimento_id' => 19
            ],
            [
                'name' => '618m²',
                'area' => 618,
                'empreendimento_id' => 19
            ],
            [
                'name' => '870m²',
                'area' => 870,
                'empreendimento_id' => 19
            ],
            [
                'name' => '890m²',
                'area' => 890,
                'empreendimento_id' => 19
            ],

            [
                'name' => '110m² Opção - 1',
                'area' => 110,
                'empreendimento_id' => 20
            ],

            [
                'name' => '110m² Opção - 2',
                'area' => 110,
                'empreendimento_id' => 20
            ],
            [
                'name' => '110m² Opção - 3',
                'area' => 110,
                'empreendimento_id' => 20
            ],
            [
                'name' => '110m² Opção - 4',
                'area' => 110,
                'empreendimento_id' => 20
            ],
            [
                'name' => '110m² Opção - 5',
                'area' => 110,
                'empreendimento_id' => 20
            ],
            [
                'name' => '130m² Opção - 1',
                'area' => 130,
                'empreendimento_id' => 20
            ],
            [
                'name' => '130m² Opção - 2',
                'area' => 130,
                'empreendimento_id' => 20
            ],
            [
                'name' => '130m² Opção - 3',
                'area' => 130,
                'empreendimento_id' => 20
            ],
            [
                'name' => '130m² Opção - 4',
                'area' => 130,
                'empreendimento_id' => 20
            ],
            [
                'name' => '130m² Opção - 5',
                'area' => 130,
                'empreendimento_id' => 20
            ],
            [
                'name' => '135m² Opção - 1',
                'area' => 135,
                'empreendimento_id' => 20
            ],
            [
                'name' => '135m² Opção - 2',
                'area' => 135,
                'empreendimento_id' => 20
            ],
            [
                'name' => '135m² Opção - 3',
                'area' => 135,
                'empreendimento_id' => 20
            ],
            [
                'name' => '135m² Opção - 4',
                'area' => 135,
                'empreendimento_id' => 20
            ],
            [
                'name' => '135m² Opção - 5',
                'area' => 135,
                'empreendimento_id' => 20
            ],
            [
                'name' => '135m² Opção - 6',
                'area' => 135,
                'empreendimento_id' => 20
            ],
            [
                'name' => '135m² Opção - 7',
                'area' => 135,
                'empreendimento_id' => 20
            ],
            [
                'name' => '220m² - Cobertura',
                'area' => 220,
                'empreendimento_id' => 20
            ],
            [
                'name' => '263m² - Cobertura',
                'area' => 263,
                'empreendimento_id' => 20
            ],
        ];

        foreach ($plantas as $planta) {

            $empreendimento = DB::table('buildings')->select('name')->find($planta['empreendimento_id']);

            $thumb = Storage::url(Storage::files("empreendimentos/".Str::slug($empreendimento->name)."/apartamentos/plantas/".Str::slug($planta['name'])."/thumb")[0] ?? '');

            DB::table('plans')->insert([
                'name'              => $planta['name'],
                'area'              => $planta['area'],
                'empreendimento_id' => $planta['empreendimento_id'],
                'image'             => $thumb,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
