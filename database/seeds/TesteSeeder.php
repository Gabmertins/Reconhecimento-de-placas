<?php

use Illuminate\Database\Seeder;
 use App\Teste;
 use Carbon\Carbon;
class TesteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=1; $i < 30; $i++) { 
            $now = Carbon::now();
            $teste = new Teste;
            $teste->value = rand(85, 100);
            $teste->created_at = $now->subDays($i);
            $teste->save();
        } 

    }
}
