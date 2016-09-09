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
            'ativo'  => 'N'
        ]);
        // Exibe uma informação no console durante o processo de seed
        $this->command->info('Unidade 01 => Casa 01 criada com sucesso!');

        Unidade::create([
            'numero' => '02',
            'ativo'  => 'N'
        ]);
        // Exibe uma informação no console durante o processo de seed
        $this->command->info('Unidade 02 => Casa 02 criada com sucesso!');

        Unidade::create([
            'numero' => '03',
            'ativo'  => 'N'
        ]);
        // Exibe uma informação no console durante o processo de seed
        $this->command->info('Unidade 03 => Casa 03 criada com sucesso!');

        Unidade::create([
            'numero' => '04',
            'ativo'  => 'N'
        ]);
        // Exibe uma informação no console durante o processo de seed
        $this->command->info('Unidade 04 => Casa 04 criada com sucesso!');

        Unidade::create([
            'numero' => '05',
            'ativo'  => 'N'
        ]);
        // Exibe uma informação no console durante o processo de seed
        $this->command->info('Unidade 05 => Casa 05 criada com sucesso!');

        Unidade::create([
            'numero' => '06',
            'ativo'  => 'N'
        ]);
        // Exibe uma informação no console durante o processo de seed
        $this->command->info('Unidade 06 => Casa 06 criada com sucesso!');

        Unidade::create([
            'numero' => '07',
            'ativo'  => 'N'
        ]);
        // Exibe uma informação no console durante o processo de seed
        $this->command->info('Unidade 07 => Casa 07 criada com sucesso!');

        Unidade::create([
            'numero' => '08',
            'ativo'  => 'N'
        ]);
        // Exibe uma informação no console durante o processo de seed
        $this->command->info('Unidade 08 => Casa 08 criada com sucesso!');

        Unidade::create([
            'numero' => '09',
            'ativo'  => 'N'
        ]);
        // Exibe uma informação no console durante o processo de seed
        $this->command->info('Unidade 09 => Casa 09 criada com sucesso!');

        Unidade::create([
            'numero' => '10',
            'ativo'  => 'N'
        ]);
        // Exibe uma informação no console durante o processo de seed
        $this->command->info('Unidade 10 => Casa 10 criada com sucesso!');

        Unidade::create([
            'numero' => '11',
            'ativo'  => 'N'
        ]);
        // Exibe uma informação no console durante o processo de seed
        $this->command->info('Unidade 11 => Casa 11 criada com sucesso!');

        Unidade::create([
            'numero' => '12',
            'ativo'  => 'N'
        ]);
        // Exibe uma informação no console durante o processo de seed
        $this->command->info('Unidade 12 => Casa 12 criada com sucesso!');

        Unidade::create([
            'numero' => '13',
            'ativo'  => 'N'
        ]);
        // Exibe uma informação no console durante o processo de seed
        $this->command->info('Unidade 13 => Casa 13 criada com sucesso!');

        Unidade::create([
            'numero' => '14',
            'ativo'  => 'N'
        ]);
        // Exibe uma informação no console durante o processo de seed
        $this->command->info('Unidade 14 => Casa 14 criada com sucesso!');

        Unidade::create([
            'numero' => '15',
            'ativo'  => 'N'
        ]);
        // Exibe uma informação no console durante o processo de seed
        $this->command->info('Unidade 15 => Casa 15 criada com sucesso!');
        
        Unidade::create([
            'numero' => '16',
            'ativo'  => 'N'
        ]);
        // Exibe uma informação no console durante o processo de seed
        $this->command->info('Unidade 16 => Casa 16 criada com sucesso!'); 

        Unidade::create([
            'numero' => '17',
            'ativo'  => 'N'
        ]);
        // Exibe uma informação no console durante o processo de seed
        $this->command->info('Unidade 17 => Casa 17 criada com sucesso!');

        Unidade::create([
            'numero' => '18',
            'ativo'  => 'N'
        ]);
        // Exibe uma informação no console durante o processo de seed
        $this->command->info('Unidade 18 => Casa 18 criada com sucesso!');

        Unidade::create([
            'numero' => '19',
            'ativo'  => 'N'
        ]);
        // Exibe uma informação no console durante o processo de seed
        $this->command->info('Unidade 19 => Casa 19 criada com sucesso!');

        Unidade::create([
            'numero' => '20',
            'ativo'  => 'N'
        ]);
        // Exibe uma informação no console durante o processo de seed
        $this->command->info('Unidade 20 => Casa 20 criada com sucesso!');


    }
}
