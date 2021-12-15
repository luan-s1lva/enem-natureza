<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Integer;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Models\Discipline;
use App\Models\Theme;

class ThemeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $biologia = new Discipline(['name' => 'Biologia']);
        $biologia->save();
        $fisica = new Discipline(['name' => 'Física']);
        $fisica->save();
        $quimica = new Discipline(['name' => 'Química']);
        $quimica->save();

        $biologia->temas()->saveMany([
            new Theme(['theme' => 'Ecologia']),
            new Theme(['theme' => 'Citologia']),
            new Theme(['theme' => 'Citoplasma']),
            new Theme(['theme' => 'Núcleo Celular']),
            new Theme(['theme' => 'Reprodução']),
            new Theme(['theme' => 'Genética']),
            new Theme(['theme' => 'Embriologia']),
            new Theme(['theme' => 'Evolução']),
            new Theme(['theme' => 'Bioquímica']),
            new Theme(['theme' => 'Parasitologia']),
            new Theme(['theme' => 'Botânica']),
            new Theme(['theme' => 'Fisiologia Animal'])
        ]);

        $fisica->temas()->saveMany([
            new Theme(['theme' => 'Bases da Cinemática Escalar']),
            new Theme(['theme' => 'Movimento Uniforme']),
            new Theme(['theme' => 'Movimento Uniformemente Variado']),
            new Theme(['theme' => 'Movimentos Circulares']),
            new Theme(['theme' => 'Cinemática Vetorial']),
            new Theme(['theme' => 'Princípios da Dinâmica']),
            new Theme(['theme' => 'Leis de Newton']),
            new Theme(['theme' => 'Atrito entre Sólidos']),
            new Theme(['theme' => 'Gravitação']),
            new Theme(['theme' => 'Resultantes Tangencial e Cetrípeta']),
            new Theme(['theme' => 'Trabalho e Potência']),
            new Theme(['theme' => 'Energia Mecânica']),
            new Theme(['theme' => 'Quantidade de Movimento']),
            new Theme(['theme' => 'Estática dos Sólidos']),
            new Theme(['theme' => 'Estática dos Fluídos']),
            new Theme(['theme' => 'Fundamentos da Óptica']),
            new Theme(['theme' => 'Reflexão da Luz']),
            new Theme(['theme' => 'Refração da Luz']),
            new Theme(['theme' => 'Instrumentos Ópticos']),
            new Theme(['theme' => 'MHS']),
            new Theme(['theme' => 'Acústica']),
            new Theme(['theme' => 'Ondas']),
            new Theme(['theme' => 'Termometria']),
            new Theme(['theme' => 'Calorimetria']),
            new Theme(['theme' => 'Termodinâmica']),
            new Theme(['theme' => 'Eletroestática']),
            new Theme(['theme' => 'Eletrodinâmica']),
            new Theme(['theme' => 'Campo Magnético']),
            new Theme(['theme' => 'Força Magnética']),
            new Theme(['theme' => 'Indução Magnética'])
        ]);

        $quimica->temas()->saveMany([
            new Theme(['theme' => 'Unidades de Medidas']),
            new Theme(['theme' => 'Constituição da Matéria']),
            new Theme(['theme' => 'Substâncias Químicas']),
            new Theme(['theme' => 'Misturas Heterogêneas e Homogêneas']),
            new Theme(['theme' => 'Separação de Misturas']),
            new Theme(['theme' => 'Propriedades Periódicas']),
            new Theme(['theme' => 'Tabela Periódica']),
            new Theme(['theme' => 'Dalton']),
            new Theme(['theme' => 'Thompson']),
            new Theme(['theme' => 'Rutherford']),
            new Theme(['theme' => 'Bohr']),
            new Theme(['theme' => 'Estabilidade dos Gases Nobres']),
            new Theme(['theme' => 'Ligação Iônica']),
            new Theme(['theme' => 'Ligação Covalente']),
            new Theme(['theme' => 'Ligação Metálica']),
            new Theme(['theme' => 'Regra do Octeto']),
            new Theme(['theme' => 'Ligações Intermoleculares']),
            new Theme(['theme' => 'Geometria Molecular']),
            new Theme(['theme' => 'Desintegração Radiativa']),
            new Theme(['theme' => 'Decaimento e Meia-vida']),
            new Theme(['theme' => 'Massa Atômica (u)']),
            new Theme(['theme' => 'Massa Molecular (MM)']),
            new Theme(['theme' => 'Calor']),
            new Theme(['theme' => 'Reações Endotermicas']),
            new Theme(['theme' => 'Reações Exotermicas']),
            new Theme(['theme' => 'Equilibrio Químico']),
            new Theme(['theme' => 'Indicadores Ácido-Base e pH']),
            new Theme(['theme' => 'Átomo de Carbono']),
            new Theme(['theme' => 'Cadeias Carbônicas']),
            new Theme(['theme' => 'Funções Orgânicas']),
            new Theme(['theme' => 'Isomeria Plana']),
            new Theme(['theme' => 'Isomeria Especial'])
        ]);
    }
}
