<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Pet;

class PetsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Pet Seeder
        Pet::create([
            'name' => 'Bengal 1',
            'description' => 'Domestic Cat',
            'imageUrl' => 'http://placekitten.com/200/200',
            'totalCount' => 5,
            'gender' => 'Female',
            'age' => '1 month',
            'size' => 'Small',
            'color' => 'Golden',
            'price' => 500,
        ]);

        Pet::create([
            'name' => 'Bengal 2',
            'description' => 'Domestic Cat',
            'imageUrl' => 'http://placekitten.com/200/200',
            'totalCount' => 5,
            'gender' => 'Female',
            'age' => '1 month',
            'size' => 'Small',
            'color' => 'Golden',
            'price' => 1000,
        ]);

        Pet::create([
            'name' => 'Bengal 3',
            'description' => 'Domestic Cat',
            'imageUrl' => 'http://placekitten.com/200/200',
            'totalCount' => 5,
            'gender' => 'Female',
            'age' => '1 month',
            'size' => 'Small',
            'color' => 'Golden',
            'price' => 1500,
        ]);

        Pet::create([
            'name' => 'Bengal 4',
            'description' => 'Domestic Cat',
            'imageUrl' => 'http://placekitten.com/200/200',
            'totalCount' => 5,
            'gender' => 'Female',
            'age' => '1 month',
            'size' => 'Small',
            'color' => 'Golden',
            'price' => 2000,
        ]);
    }
}
