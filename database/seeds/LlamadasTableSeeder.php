<?php

use Illuminate\Database\Seeder;

class LlamadasTableSeeder extends Seeder
{
    
    public function run()
    {
        factory(App\Models\Llamadas::class,50000)->create();
    }
}
