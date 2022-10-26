<?php

namespace Database\Seeders;

use App\Models\TypeDocument;
use Illuminate\Database\Seeder;

class TypeDocumentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $types = [
            'Довереность',
            'Наследство',
            'Справка'
        ];

        foreach($types as $key => $type){
            TypeDocument::create([
                'id' => $key + 1,
                'type_document' => $type
            ]);
        }
    }
}
