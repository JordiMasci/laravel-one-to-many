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
            ['name' => 'HTML', 'description' => ' Linguaggio di markup strutturale.', 'date_of_birth' => '1993-01-01'],
            ['name' => 'CSS', 'description' => ' Foglio di stile per presentazione.', 'date_of_birth' => '1996-12-17'],
            ['name' => 'Javascript', 'description' => 'Linguaggio di scripting client-side.', 'date_of_birth' => '1995-12-04'],
            ['name' => 'VueJs', 'description' => 'Framework JavaScript per interfacce utente.', 'date_of_birth' => '2014-02-01'],
            ['name' => 'Php', 'description' => ' Linguaggio di scripting server-side.', 'date_of_birth' => '1994-06-08'],
            ['name' => 'Laravel', 'description' => 'Framework PHP per lo sviluppo web.', 'date_of_birth' => '2011-06-09'],
        ];
        foreach ($_types as $_type) {
            $type = new Type();
            $type->name = $_type['name'];
            $type->description = $_type['description'];
            $type->date_of_birth = $_type['date_of_birth'];
            $type->save();
        }
    }
}
