<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Type;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $_types = [
            'HTML',
            'CSS',
            'Javascript',
            'VueJs',
            'Php',
            'Laravel',
        ] ;
        foreach ($_types as $_type) {

        }
    }
}
