<?php

namespace Database\Seeders;

use App\Models\Attraction;
use App\Models\Building;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AttractionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $states = [             
            'AC' => [
                ["name" => "Gameleira", "address" => "Av. Ceará, Centro"],
                ["name" => "Parque Zoobotânico", "address" => "Rodovia BR-364, Km 2"],
                ["name" => "Palácio Rio Branco", "address" => "Rua Benjamin Constant, Centro"],
                ["name" => "Passarela Joaquim Macedo", "address" => "Rio Acre, Centro"],
                ["name" => "Mercado Velho", "address" => "Av. Epaminondas Jácome, Centro"],
                ["name" => "Museu da Borracha", "address" => "Rua Benjamin Constant, Centro"],
                ["name" => "Parque Ambiental Chico Mendes", "address" => "Estrada Dias Martins, 5000"],
                ["name" => "Horto Florestal", "address" => "Avenida Ceará, Floresta Sul"],
                ["name" => "Praça Plácido de Castro", "address" => "Centro"],
                ["name" => "Biblioteca da Floresta", "address" => "Rua Eduardo Assmar, 1293"]
            ],

            'AL' => [
                ["name" => "Praia do Francês", "address" => "Rod. AL-101, Praia do Francês"],
                ["name" => "Praia de Pajuçara", "address" => "Av. Silvio Carlos Viana, Pajuçara"],
                ["name" => "Igreja de São Gonçalo do Amarante", "address" => "Rua São Gonçalo, Centro"],
                ["name" => "Museu Théo Brandão", "address" => "Av. da Paz, 221"],
                ["name" => "Teatro Deodoro", "address" => "Rua Barão de Anadia, Centro"],
                ["name" => "Centro Cultural e de Exposições Ruth Cardoso", "address" => "Av. Dr. José Sampaio, Centro"],
                ["name" => "Praia do Carro Quebrado", "address" => "Rod. AL-101, Barra de São Miguel"],
                ["name" => "Maceió Shopping", "address" => "Av. Comendador Gustavo Paiva, 5000"],
                ["name" => "Parque Municipal de Maceió", "address" => "Av. Manoel Severiano, Centro"],
                ["name" => "Igreja da Penha", "address" => "Rua da Penha, 98"]
            ],

            'AM' => [
                ["name" => "Teatro Amazonas", "address" => "Largo de São Sebastião, Centro"],
                ["name" => "Encontro das Águas", "address" => "Rio Negro e Rio Solimões"],
                ["name" => "Museu do Seringal", "address" => "Igarapé São João, Tarumã"],
                ["name" => "Praia de Ponta Negra", "address" => "Ponta Negra"],
                ["name" => "Palácio Rio Negro", "address" => "Av. 7 de Setembro, Centro"],
                ["name" => "Museu do Índio", "address" => "Av. Duque de Caxias, Centro"],
                ["name" => "Zoológico do CIGS", "address" => "Av. São Jorge, 750"],
                ["name" => "Bosque da Ciência", "address" => "Rua Otávio Cabral, Petrópolis"],
                ["name" => "Porto de Manaus", "address" => "Centro"],
                ["name" => "Arena da Amazônia", "address" => "Av. Constantino Nery, Flores"]
            ],
            
            'AP' => [
                ["name" => "Fortaleza de São José de Macapá", "address" => "Rua Cândido Mendes, Centro"],
                ["name" => "Marco Zero do Equador", "address" => "Rod. Juscelino Kubitschek, s/n"],
                ["name" => "Trapiche Eliezer Levy", "address" => "Av. Beira Rio, Centro"],
                ["name" => "Parque do Forte", "address" => "Av. Beira Rio, Centro"],
                ["name" => "Igreja de São José de Macapá", "address" => "Rua São José, Centro"],
                ["name" => "Museu Sacaca", "address" => "Av. Feliciano Coelho, Trem"],
                ["name" => "Praça Floriano Peixoto", "address" => "Centro"],
                ["name" => "Sambódromo de Macapá", "address" => "Rua Rio Vila Nova, Pacoval"],
                ["name" => "Estádio Zerão", "address" => "Rod. Juscelino Kubitschek"],
                ["name" => "Curiaú", "address" => "Zona Rural"]
            ],

            'BA' => [
                ["name" => "Pelourinho", "address" => "Centro Histórico"],
                ["name" => "Elevador Lacerda", "address" => "Praça Tomé de Souza, Comércio"],
                ["name" => "Farol da Barra", "address" => "Av. Sete de Setembro, Barra"],
                ["name" => "Igreja do Bonfim", "address" => "Colina Sagrada, Bonfim"],
                ["name" => "Mercado Modelo", "address" => "Praça Visc. de Cayru, Comércio"],
                ["name" => "Museu de Arte da Bahia", "address" => "Av. Sete de Setembro, Vitória"],
                ["name" => "Solar do Unhão", "address" => "Av. Contorno, Comércio"],
                ["name" => "Praia do Porto da Barra", "address" => "Porto da Barra"],
                ["name" => "Dique do Tororó", "address" => "Av. Vasco da Gama, Tororó"],
                ["name" => "Ilha de Itaparica", "address" => "Baía de Todos os Santos"]
            ],

            'CE' => [
                ["name" => "Praia do Futuro", "address" => "Praia do Futuro"],
                ["name" => "Dragão do Mar", "address" => "R. Dragão do Mar, Praia de Iracema"],
                ["name" => "Mercado Central de Fortaleza", "address" => "Av. Alberto Nepomuceno, 199"],
                ["name" => "Centro de Arte e Cultura (CEC)", "address" => "Av. Pres. Castelo Branco"],
                ["name" => "Fortaleza de Nossa Senhora da Assunção", "address" => "Centro"],
                ["name" => "Catedral Metropolitana de Fortaleza", "address" => "Praça Pedro II"],
                ["name" => "Museu do Ceará", "address" => "Rua São Paulo, 51"],
                ["name" => "Parque do Cocó", "address" => "Av. Padre Antônio Tomás, Cocó"],
                ["name" => "Beira Mar", "address" => "Av. Beira Mar"],
                ["name" => "Feirinha da Beira Mar", "address" => "Av. Beira Mar"]
            ],

            'DF' => [
                ["name" => "Congresso Nacional", "address" => "Praça dos Três Poderes"],
                ["name" => "Catedral Metropolitana", "address" => "Esplanada dos Ministérios"],
                ["name" => "Palácio da Alvorada", "address" => "Zona Cívico-Administrativa"],
                ["name" => "Museu Nacional da República", "address" => "Esplanada dos Ministérios"],
                ["name" => "Ponte JK", "address" => "Lago Sul"],
                ["name" => "Parque da Cidade Sarah Kubitschek", "address" => "SGCV Sul, Asa Sul"],
                ["name" => "Palácio do Planalto", "address" => "Praça dos Três Poderes"],
                ["name" => "Memorial JK", "address" => "Eixo Monumental, Zona Cívico-Administrativa"],
                ["name" => "Jardim Botânico de Brasília", "address" => "Lago Sul"],
                ["name" => "Praça dos Três Poderes", "address" => "Zona Cívico-Administrativa"]
            ],

            'ES' => [
                ["name" => "Praia de Camburi", "address" => "Avenida Dante Michelini, Camburi"],
                ["name" => "Convento da Penha", "address" => "Convento da Penha, Vila Velha"],
                ["name" => "Museu Vale", "address" => "Rua João Baptista de Mello, Centro"],
                ["name" => "Parque Pedra da Cebola", "address" => "Av. Fernando Ferrari, Jardim da Penha"],
                ["name" => "Teatro Carlos Gomes", "address" => "Rua Sete de Setembro, Centro"],
                ["name" => "Ilha das Caieiras", "address" => "Praia de Santa Luiza"],
                ["name" => "Praça do Papa", "address" => "Av. Marechal Mascarenhas de Morais, Santa Lucia"],
                ["name" => "Centro Cultural Sesi", "address" => "Rua João de Deus, 66"],
                ["name" => "Shopping Vitória", "address" => "Av. Nossa Senhora da Penha, 151"],
                ["name" => "Praça da Paz", "address" => "Av. José Maria Viva, Centro"]
            ],

            'GO' => [
                ["name" => "Bosque dos Buritis", "address" => "R. 1, St. Oeste"],
                ["name" => "Parque Flamboyant", "address" => "Av. H, Jardim Goiás"],
                ["name" => "Parque Vaca Brava", "address" => "Av. T-10, St. Bueno"],
                ["name" => "Praça Cívica", "address" => "Setor Central"],
                ["name" => "Museu Zoroastro Artiaga", "address" => "Praça Cívica, St. Central"],
                ["name" => "Parque Areião", "address" => "Av. Areião, St. Pedro Ludovico"],
                ["name" => "Feira Hippie de Goiânia", "address" => "Praça do Trabalhador, Setor Norte Ferroviário"],
                ["name" => "Monumento às Três Raças", "address" => "Praça Cívica, Setor Central"],
                ["name" => "Museu de Arte Contemporânea", "address" => "Rua 4, Setor Central"],
                ["name" => "Catedral Metropolitana de Goiânia", "address" => "Praça Dom Emanuel, Setor Central"]
            ],

            'MA' => [
                ["name" => "Centro Histórico de São Luís", "address" => "Centro"],
                ["name" => "Teatro Arthur Azevedo", "address" => "Rua do Sol, Centro"],
                ["name" => "Palácio dos Leões", "address" => "Praça Dom Pedro II, Centro"],
                ["name" => "Museu Histórico e Artístico do Maranhão", "address" => "Rua do Sol, Centro"],
                ["name" => "Praia de São Marcos", "address" => "Av. dos Holandeses, São Marcos"],
                ["name" => "Convento das Mercês", "address" => "Rua da Paz, Centro"],
                ["name" => "Praça João Lisboa", "address" => "Centro"],
                ["name" => "Casa das Tulhas", "address" => "Rua das Tulhas, Centro"],
                ["name" => "Igreja de São João Batista", "address" => "Praça Pedro II, Centro"],
                ["name" => "Parque Nacional dos Lençóis Maranhenses", "address" => "Lençóis Maranhenses"]
            ],
            
            'MG' => [
                ["name" => "Praça da Liberdade", "address" => "Centro"],
                ["name" => "Parque das Mangabeiras", "address" => "Rua Professor Mário Werneck, Mangabeiras"],
                ["name" => "Museu de Artes e Ofícios", "address" => "Praça Rui Barbosa, Centro"],
                ["name" => "Mercado Central", "address" => "Av. Augusto de Lima, Centro"],
                ["name" => "Catedral da Boa Viagem", "address" => "Av. Afonso Pena, Centro"],
                ["name" => "Mirante do Mangabeiras", "address" => "Rua São Sebastião, Mangabeiras"],
                ["name" => "Teatro Francisco Nunes", "address" => "Av. dos Andradas, Centro"],
                ["name" => "Parque Municipal Américo Renné Giannetti", "address" => "Av. Afonso Pena, Centro"],
                ["name" => "Igreja São José", "address" => "Rua São José, Centro"],
                ["name" => "Museu Clube da Esquina", "address" => "Rua Guaicurus, Santa Tereza"]
            ],
            
            'MS' => [
                ["name" => "Parque das Nações Indígenas", "address" => "Av. Afonso Pena, Jardim dos Estados"],
                ["name" => "Museu Dom Bosco", "address" => "Av. Afonso Pena, Jardim dos Estados"],
                ["name" => "Horto Florestal", "address" => "Rua Anhanduí, Centro"],
                ["name" => "Mercadão Municipal", "address" => "Rua 7 de Setembro, Centro"],
                ["name" => "Aquário do Pantanal", "address" => "Av. Afonso Pena, Parque das Nações"],
                ["name" => "Memorial da Cultura Indígena", "address" => "Rua Brasil, Centro"],
                ["name" => "Catedral de Nossa Senhora da Abadia", "address" => "Rua 14 de Julho, Centro"],
                ["name" => "Praça das Araras", "address" => "Rua Dom Aquino, Centro"],
                ["name" => "Igreja São José", "address" => "Rua Pedro Celestino, Centro"],
                ["name" => "Centro Cultural José Octávio Guizzo", "address" => "Rua 26 de Agosto, Centro"]
            ],

            'MT' => [
                ["name" => "Parque Mãe Bonifácia", "address" => "Av. Miguel Sutil, Duque de Caxias"],
                ["name" => "Museu do Rio", "address" => "Av. Beira Rio, Porto"],
                ["name" => "Aquário Municipal", "address" => "Rua 13 de Junho, Porto"],
                ["name" => "Zoológico da UFMT", "address" => "Av. Fernando Corrêa da Costa, Boa Esperança"],
                ["name" => "Parque Zé Bolo Flô", "address" => "Rua Alenquer, Sucuri"],
                ["name" => "Museu de Arte Sacra", "address" => "Rua Clóvis Hugueney, Dom Aquino"],
                ["name" => "Centro Histórico de Cuiabá", "address" => "Praça da República, Centro"],
                ["name" => "Igreja de Nossa Senhora do Rosário e São Benedito", "address" => "Rua 13 de Junho, Centro"],
                ["name" => "Catedral Basílica do Senhor Bom Jesus", "address" => "Praça da República, Centro"],
                ["name" => "Parque Nacional da Chapada dos Guimarães", "address" => "Chapada dos Guimarães"]
            ],

            'PA' => [
                ["name" => "Estação das Docas", "address" => "Av. Boulevard Castilhos França, Campina"],
                ["name" => "Mercado Ver-o-Peso", "address" => "Praça do Relógio, Cidade Velha"],
                ["name" => "Basílica de Nazaré", "address" => "Av. Nazaré, Nazaré"],
                ["name" => "Mangal das Garças", "address" => "Rua Carneiro da Rocha, Cidade Velha"],
                ["name" => "Theatro da Paz", "address" => "Praça da República, Centro"],
                ["name" => "Forte do Presépio", "address" => "Praça Frei Caetano Brandão, Cidade Velha"],
                ["name" => "Praça Batista Campos", "address" => "Rua dos Tamoios, Batista Campos"],
                ["name" => "Museu Emílio Goeldi", "address" => "Av. Magalhães Barata, São Brás"],
                ["name" => "Círio de Nazaré", "address" => "Vários locais, Belém"],
                ["name" => "Palácio Lauro Sodré (Museu de Arte Sacra)", "address" => "Praça Frei Caetano Brandão, Cidade Velha"]
            ],

            'PB' => [
                ["name" => "Praia de Tambaú", "address" => "Av. Governador Flávio Ribeiro Coutinho"],
                ["name" => "Estação Ciência", "address" => "Rua João de Deus, 94"],
                ["name" => "Ponte do Rio Mamanguape", "address" => "Rodovia PB-008"],
                ["name" => "Centro Histórico de João Pessoa", "address" => "Centro"],
                ["name" => "Cabo Branco Science Station", "address" => "Praça da Ciência, Cabo Branco"],
                ["name" => "Parque Arruda Câmara (Bica)", "address" => "Av. Dom Pedro II, Jaguaribe"],
                ["name" => "Praia do Seixas", "address" => "Av. Seixas, Seixas"],
                ["name" => "Praça da Independência", "address" => "Centro"],
                ["name" => "Igreja de São Francisco", "address" => "Centro"],
                ["name" => "Praia de Coqueirinho", "address" => "Coqueirinho"]
            ],

            'PE' => [
                ["name" => "Marco Zero", "address" => "Praça Rio Branco, Bairro do Recife"],
                ["name" => "Instituto Ricardo Brennand", "address" => "Alameda Antônio Brennand, Várzea"],
                ["name" => "Praia de Boa Viagem", "address" => "Boa Viagem"],
                ["name" => "Casa da Cultura", "address" => "Rua Floriano Peixoto, Santo Antônio"],
                ["name" => "Museu do Estado de Pernambuco", "address" => "Av. Rui Barbosa, Graças"],
                ["name" => "Oficina Francisco Brennand", "address" => "Propriedade Santos Cosme e Damião"],
                ["name" => "Palácio do Campo das Princesas", "address" => "Praça da República, Santo Antônio"],
                ["name" => "Cais do Sertão", "address" => "Av. Alfredo Lisboa, Recife"],
                ["name" => "Parque da Jaqueira", "address" => "Rua do Futuro, Jaqueira"],
                ["name" => "Paço do Frevo", "address" => "Praça do Arsenal, Bairro do Recife"]
            ],

            'PI' => [
                ["name" => "Encontro dos Rios", "address" => "Rios Parnaíba e Poty"],
                ["name" => "Ponte Estaiada", "address" => "Av. Raul Lopes, Fátima"],
                ["name" => "Parque Lagoas do Norte", "address" => "Avenida Boa Esperança, Centro"],
                ["name" => "Palácio de Karnak", "address" => "Rua 1º de Maio, Centro"],
                ["name" => "Museu do Piauí", "address" => "Rua Areolino de Abreu, 900"],
                ["name" => "Catedral de Nossa Senhora das Dores", "address" => "Praça Saraiva, Centro"],
                ["name" => "Parque da Cidadania", "address" => "Rua João Cabral, Centro"],
                ["name" => "Museu de Arte Sacra de Teresina", "address" => "Rua Félix Pacheco, Centro"],
                ["name" => "Polo Cerâmico do Poty Velho", "address" => "Bairro Poty Velho"],
                ["name" => "Shopping da Cidade", "address" => "Praça da Bandeira, Centro"]
            ],

            'PR' => [
                ["name" => "Jardim Botânico", "address" => "Rua Engo. Ostoja Roguski, Jardim Botânico"],
                ["name" => "Museu Oscar Niemeyer", "address" => "Rua Marechal Hermes, 999"],
                ["name" => "Ópera de Arame", "address" => "Rua João Gava, Abranches"],
                ["name" => "Parque Tanguá", "address" => "Rua Oswaldo Maciel, Taboão"],
                ["name" => "Bosque Alemão", "address" => "Rua Francisco Schaffer, Vista Alegre"],
                ["name" => "Rua 24 Horas", "address" => "Rua Visconde de Nácar, Centro"],
                ["name" => "Centro Histórico de Curitiba", "address" => "Largo da Ordem, Centro"],
                ["name" => "Parque Barigui", "address" => "Av. Cândido Hartmann, Santo Inácio"],
                ["name" => "Memorial Ucraniano", "address" => "Parque Tingui, Rua Dr. Mba de Ferrante"],
                ["name" => "Largo da Ordem", "address" => "Centro Histórico"]
            ],

            'RJ' => [
                ["name" => "Parque Lage", "address" => "Rua Jardim Botânico, 414"],
                ["name" => "Cristo Redentor", "address" => "Parque Nacional da Tijuca"],
                ["name" => "Pão de Açúcar", "address" => "Av. Pasteur, Urca"],
                ["name" => "Copacabana", "address" => "Praia de Copacabana"],
                ["name" => "Jardim Botânico", "address" => "Rua Jardim Botânico, 1008"],
                ["name" => "Maracanã", "address" => "Av. Presidente Castelo Branco, Maracanã"],
                ["name" => "Museu do Amanhã", "address" => "Praça Mauá, 1"],
                ["name" => "Santa Teresa", "address" => "Bairro Santa Teresa"],
                ["name" => "Lagoa Rodrigo de Freitas", "address" => "Lagoa"],
                ["name" => "Escadaria Selarón", "address" => "R. Manuel Carneiro, Santa Teresa"]
            ],

            'RN' => [
                ["name" => "Praia de Ponta Negra", "address" => "Avenida Engenheiro Roberto Freire, Ponta Negra"],
                ["name" => "Forte dos Reis Magos", "address" => "Avenida Silvio Pedroza, Ribeira"],
                ["name" => "Parque da Cidade", "address" => "Avenida Ayrton Senna, Lagoa Nova"],
                ["name" => "Centro Histórico de Natal", "address" => "Rua da Conceição, Cidade Alta"],
                ["name" => "Museu Câmara Cascudo", "address" => "Rua Professor Nascimento de Castro, 151"],
                ["name" => "Natal Shopping", "address" => "Avenida Dom Eugênio de Araújo, Lagoa Nova"],
                ["name" => "Ilha de Fernando de Noronha", "address" => "Fernando de Noronha"],
                ["name" => "Praia de Genipabu", "address" => "Genipabu, Extremoz"],
                ["name" => "Teatro Alberto Maranhão", "address" => "Rua Jundiaí, Ribeira"],
                ["name" => "Dunas de Genipabu", "address" => "Avenida Genipabu, Extremoz"]
            ],

            'RO' => [
                ["name" => "Estrada de Ferro Madeira-Mamoré", "address" => "Av. Farquar, Centro"],
                ["name" => "Praia de Cacoal", "address" => "Margem do Rio Machado"],
                ["name" => "Museu Internacional do Presépio", "address" => "Rua José Bonifácio, 1254"],
                ["name" => "Palácio Getúlio Vargas", "address" => "Rua José do Patrocínio, Centro"],
                ["name" => "Catedral Sagrado Coração de Jesus", "address" => "Rua D. Pedro II, Centro"],
                ["name" => "Mercado Cultural", "address" => "Praça Getúlio Vargas, Centro"],
                ["name" => "Parque Natural de Porto Velho", "address" => "Av. Farquar, Distrito Industrial"],
                ["name" => "Museu Palácio da Memória", "address" => "Av. Farquar, Arigolândia"],
                ["name" => "Praça das Três Caixas D'Água", "address" => "Rua D. Pedro II, Centro"],
                ["name" => "Parque Circuito", "address" => "Rua José Camacho, Centro"]
            ],

            'RR' => [
                ["name" => "Praça das Águas", "address" => "Centro"],
                ["name" => "Orla Taumanan", "address" => "Centro"],
                ["name" => "Monumento aos Pioneiros", "address" => "Centro"],
                ["name" => "Parque Anauá", "address" => "Av. Brigadeiro Eduardo Gomes, Mecejana"],
                ["name" => "Igreja Matriz de Nossa Senhora do Carmo", "address" => "Centro"],
                ["name" => "Praia Grande", "address" => "Margem do Rio Branco"],
                ["name" => "Portal do Milênio", "address" => "Centro"],
                ["name" => "Centro de Artesanato Velia Coutinho", "address" => "Centro"],
                ["name" => "Zoológico do Batalhão do Forte São Joaquim", "address" => "Centro"],
                ["name" => "Parque Nacional do Monte Roraima", "address" => "Fronteira com Venezuela"]
            ],

            'RS' => [
                ["name" => "Parque Farroupilha (Redenção)", "address" => "Av. João Pessoa, Farroupilha"],
                ["name" => "Usina do Gasômetro", "address" => "Av. Presidente João Goulart, Centro"],
                ["name" => "Mercado Público", "address" => "Largo Glênio Peres, Centro"],
                ["name" => "Museu de Arte do Rio Grande do Sul (MARGS)", "address" => "Praça da Alfândega, Centro"],
                ["name" => "Fundação Iberê Camargo", "address" => "Av. Padre Cacique, 2000"],
                ["name" => "Jardim Botânico de Porto Alegre", "address" => "Rua Dr. Salvador França, Jardim Botânico"],
                ["name" => "Catedral Metropolitana de Porto Alegre", "address" => "Rua Duque de Caxias, Centro"],
                ["name" => "Casa de Cultura Mario Quintana", "address" => "Rua dos Andradas, 736"],
                ["name" => "Parque Moinhos de Vento (Parcão)", "address" => "Rua Comendador Caminha, Moinhos de Vento"],
                ["name" => "Orla do Guaíba", "address" => "Av. Edvaldo Pereira Paiva"]
            ],            

            'SC' => [
                ["name" => "Praia da Joaquina", "address" => "Praia da Joaquina"],
                ["name" => "Lagoa da Conceição", "address" => "Lagoa da Conceição"],
                ["name" => "Ponte Hercílio Luz", "address" => "Centro"],
                ["name" => "Praia Mole", "address" => "Praia Mole"],
                ["name" => "Mercado Público de Florianópolis", "address" => "Rua Conselheiro Mafra, Centro"],
                ["name" => "Dunas da Joaquina", "address" => "Praia da Joaquina"],
                ["name" => "Ilha do Campeche", "address" => "Praia do Campeche"],
                ["name" => "Catedral Metropolitana de Florianópolis", "address" => "Praça XV de Novembro, Centro"],
                ["name" => "Parque Municipal da Lagoa do Peri", "address" => "Lagoa do Peri"],
                ["name" => "Museu Histórico de Santa Catarina", "address" => "Praça XV de Novembro, Centro"]
            ],

            'SP' => [
                ["name" => "Parque Ibirapuera", "address" => "Av. Pedro Álvares Cabral, Vila Mariana"],
                ["name" => "Museu de Arte de São Paulo (MASP)", "address" => "Av. Paulista, 1578"],
                ["name" => "Catedral da Sé", "address" => "Praça da Sé, Sé"],
                ["name" => "Mercado Municipal", "address" => "R. da Cantareira, 306"],
                ["name" => "Avenida Paulista", "address" => "Av. Paulista"],
                ["name" => "Pateo do Collegio", "address" => "Praça Pateo do Collegio, 2"],
                ["name" => "Museu do Futebol", "address" => "Praça Charles Miller, Pacaembu"],
                ["name" => "Pinacoteca", "address" => "Praça da Luz, 2"],
                ["name" => "Liberdade", "address" => "Bairro Liberdade"],
                ["name" => "Parque da Independência", "address" => "Av. Nazaré, Ipiranga"]
            ],

            'SE' => [
                ["name" => "Orla de Atalaia", "address" => "Av. Santos Dumont, Atalaia"],
                ["name" => "Museu da Gente Sergipana", "address" => "Av. Ivo do Prado, 398"],
                ["name" => "Mercado Municipal de Aracaju", "address" => "Praça Hilton Lopes, Centro"],
                ["name" => "Catedral Metropolitana", "address" => "Praça Olímpio Campos, Centro"],
                ["name" => "Parque da Sementeira", "address" => "Av. Beira Mar, Jardins"],
                ["name" => "Praia do Saco", "address" => "Litoral Sul"],
                ["name" => "Oceanário de Aracaju", "address" => "Av. Santos Dumont, Atalaia"],
                ["name" => "Praça Fausto Cardoso", "address" => "Centro"],
                ["name" => "Colina de Santo Antônio", "address" => "Bairro Santo Antônio"],
                ["name" => "Ilha dos Namorados", "address" => "Litoral"]
            ],

            'TO' => [
                ["name" => "Praça dos Girassóis", "address" => "Centro"],
                ["name" => "Parque Cesamar", "address" => "Avenida NS 2, Plano Diretor Sul"],
                ["name" => "Praia da Graciosa", "address" => "Avenida NS-15, Graciosa"],
                ["name" => "Ilha Canela", "address" => "Próxima a Palmas"],
                ["name" => "Cachoeira do Roncador", "address" => "Zona Rural de Palmas"],
                ["name" => "Parque Estadual do Lajeado", "address" => "Região do Lajeado"],
                ["name" => "Feira do Bosque", "address" => "Praça Bosque dos Pioneiros"],
                ["name" => "Cachoeira da Fumaça", "address" => "Zona Rural"],
                ["name" => "Museu Histórico do Tocantins", "address" => "Praça dos Girassóis"],
                ["name" => "Palácio Araguaia", "address" => "Praça dos Girassóis"]
            ]
        ];

        $start = 1;

        $end = 10;

        foreach ($states as $uf => $state) {

            foreach ($state as $attraction) {
                DB::table('attractions')->insert([
                    'name' => $attraction['name'],
                    'address' => $attraction['address'],
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
            
            $buildings = Building::whereHas('location', function ($query) use ($uf) {
                return $query->where('uf', $uf);
            })->get();
    
            foreach ($buildings as $building) {
                $building->attractions()->attach(Attraction::whereBetween('id', [$start, $end])->get()->pluck('id'));
            }

            $start += 10;

            $end += 10;
        }        
    }   
}
