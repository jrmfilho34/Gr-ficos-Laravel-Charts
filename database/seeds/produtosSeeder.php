<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class produtosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       for( $i=0; $i<10; $i++){
          DB::table('Produtos')->insert([
            'titulo' => str_random(10),
            'categoria' => str_random(3).'blusa',
            'descricao' => str_random(10),
            'preco' => $i,
        ]);
      }
    }
}
