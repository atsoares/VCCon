<?php

use Illuminate\Database\Seeder;
use VCCon\Domains\Unidades\Models\Unidade;

class UnidadeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Cria unidades (dados controlados)
        $this->createUnidades();
    }

    private function createUnidades()
    {
        Unidade::create([
            'numero' => '01',
            'ocupada'=> 'N',
            'ativo'  => 'S'
        ]);
        // Exibe uma informação no console durante o processo de seed
        $this->command->info('Unidade 01 => Casa 01 criada com sucesso!');

        Unidade::create([
            'numero' => '02',
            'ocupada'=> 'N',
            'ativo'  => 'S'
        ]);
        // Exibe uma informação no console durante o processo de seed
        $this->command->info('Unidade 02 => Casa 02 criada com sucesso!');

        Unidade::create([
            'numero' => '03',
            'ocupada'=> 'N',
            'ativo'  => 'S'
        ]);
        // Exibe uma informação no console durante o processo de seed
        $this->command->info('Unidade 03 => Casa 03 criada com sucesso!');

        Unidade::create([
            'numero' => '04',
            'ocupada'=> 'N',
            'ativo'  => 'S'
        ]);
        // Exibe uma informação no console durante o processo de seed
        $this->command->info('Unidade 04 => Casa 04 criada com sucesso!');

        Unidade::create([
            'numero' => '05',
            'ocupada'=> 'N',
            'ativo'  => 'S'
        ]);
        // Exibe uma informação no console durante o processo de seed
        $this->command->info('Unidade 05 => Casa 05 criada com sucesso!');

        Unidade::create([
            'numero' => '06',
            'ocupada'=> 'N',
            'ativo'  => 'S'
        ]);
        // Exibe uma informação no console durante o processo de seed
        $this->command->info('Unidade 06 => Casa 06 criada com sucesso!');

        Unidade::create([
            'numero' => '07',
            'ocupada'=> 'N',
            'ativo'  => 'S'
        ]);
        // Exibe uma informação no console durante o processo de seed
        $this->command->info('Unidade 07 => Casa 07 criada com sucesso!');

        Unidade::create([
            'numero' => '08',
            'ocupada'=> 'N',
            'ativo'  => 'S'
        ]);
        // Exibe uma informação no console durante o processo de seed
        $this->command->info('Unidade 08 => Casa 08 criada com sucesso!');

        Unidade::create([
            'numero' => '09',
            'ocupada'=> 'N',
            'ativo'  => 'S'
        ]);
        // Exibe uma informação no console durante o processo de seed
        $this->command->info('Unidade 09 => Casa 09 criada com sucesso!');

        Unidade::create([
            'numero' => '10',
            'ocupada'=> 'N',
            'ativo'  => 'S'
        ]);
        // Exibe uma informação no console durante o processo de seed
        $this->command->info('Unidade 10 => Casa 10 criada com sucesso!');

        Unidade::create([
            'numero' => '11',
            'ocupada'=> 'N',
            'ativo'  => 'S'
        ]);
        // Exibe uma informação no console durante o processo de seed
        $this->command->info('Unidade 11 => Casa 11 criada com sucesso!');

        Unidade::create([
            'numero' => '12',
            'ocupada'=> 'N',
            'ativo'  => 'S'
        ]);
        // Exibe uma informação no console durante o processo de seed
        $this->command->info('Unidade 12 => Casa 12 criada com sucesso!');

        Unidade::create([
            'numero' => '13',
            'ocupada'=> 'N',
            'ativo'  => 'S'
        ]);
        // Exibe uma informação no console durante o processo de seed
        $this->command->info('Unidade 13 => Casa 13 criada com sucesso!');

        Unidade::create([
            'numero' => '14',
            'ocupada'=> 'N',
            'ativo'  => 'S'
        ]);
        // Exibe uma informação no console durante o processo de seed
        $this->command->info('Unidade 14 => Casa 14 criada com sucesso!');

        Unidade::create([
            'numero' => '15',
            'ocupada'=> 'N',
            'ativo'  => 'S'
        ]);
        // Exibe uma informação no console durante o processo de seed
        $this->command->info('Unidade 15 => Casa 15 criada com sucesso!');
        
        Unidade::create([
            'numero' => '16',
            'ocupada'=> 'N',
            'ativo'  => 'S'
        ]);
        // Exibe uma informação no console durante o processo de seed
        $this->command->info('Unidade 16 => Casa 16 criada com sucesso!'); 

        Unidade::create([
            'numero' => '17',
            'ocupada'=> 'N',
            'ativo'  => 'S'
        ]);
        // Exibe uma informação no console durante o processo de seed
        $this->command->info('Unidade 17 => Casa 17 criada com sucesso!');

        Unidade::create([
            'numero' => '18',
            'ocupada'=> 'N',
            'ativo'  => 'S'
        ]);
        // Exibe uma informação no console durante o processo de seed
        $this->command->info('Unidade 18 => Casa 18 criada com sucesso!');

        Unidade::create([
            'numero' => '19',
            'ocupada'=> 'N',
            'ativo'  => 'S'
        ]);
        // Exibe uma informação no console durante o processo de seed
        $this->command->info('Unidade 19 => Casa 19 criada com sucesso!');

        Unidade::create([
            'numero' => '20',
            'ocupada'=> 'N',
            'ativo'  => 'S'
        ]);
        // Exibe uma informação no console durante o processo de seed
        $this->command->info('Unidade 20 => Casa 20 criada com sucesso!');


    }
}
