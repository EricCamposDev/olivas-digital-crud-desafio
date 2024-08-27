<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class customerTypesSeeders extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $types = [
            [
                'name' => 'Pessoa Física',
                'description' => '',
            ],
            [
                'name' => 'Pessoa Jurídica',
                'description' =>  ''
            ]
        ];

        foreach($types as $type){
            DB::table('customer_types')->insert($type);
        }
    }
}
