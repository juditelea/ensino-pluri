<?php

use App\Models\Aluno;
use Illuminate\Database\Seeder;

class AlunosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Aluno::class, 10)->create();
    }
}
