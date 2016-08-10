<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Kevin Zambrano',
            'email' => 'nuadhasnd@gmail.com',
            'password' => bcrypt('root'),
        ]);

        DB::table('users')->insert([
            'name' => 'Pedro Escobar',
            'email' => 'pedroescobar234567@gmail.com',
            'password' => bcrypt('escobar25'),
        ]);

        DB::table('users')->insert([
            'name' => 'Carlos Ernesto',
            'email' => 'carlosernesto4523@gmail.com',
            'password' => bcrypt('cernest23'),
        ]);
    }
}
