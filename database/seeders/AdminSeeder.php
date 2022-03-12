<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Admin;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Admin::create([
            'email'       => "fabiana@example.com",
            'password'    => bcrypt("Cr#TAck5P"),
            'name'        => "Fabiana Orozco",
            'phone'       => "1234567891",
            'id_card'     => "12345678912",
            'birthday'    => "1993-08-26",
        ]);
    }
}