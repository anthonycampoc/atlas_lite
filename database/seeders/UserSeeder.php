<?php

namespace Database\Seeders;

use App\Models\Bunises;
use App\Models\Categoria;
use App\Models\Client;
use App\Models\Printer;
use App\Models\Product;
use App\Models\Provider;
use App\Models\Purchase;
use App\Models\Sale;
use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            User::create([
                'name'=>'admin',
                'email'=>'admin@atlast.com',
                'image' =>'user.png',
                'password'=>bcrypt('admin'),

            ])->assignRole('Admin');

            
            User::factory(1)->create();
            // Client::factory(50)->create();
            Categoria::factory(50)->create();
            Provider::factory(50)->create();
            // Sale::factory(50)->create();
            // Purchase::factory(50)->create();
            Product::factory(50)->create();

            // Provider::create([

            //     'name' =>'ALMACEN',
            //     'email' =>'almacen@atlastechnology.tech',
            //     'ruc' => '0800000000001',
            //     'ruc' => 'ESMERALDAS',
            //     'phone' => '0900000000',

            // ]);

            Client::create([
                'identification' => '0000000000',
                'name' => 'CONSUMIDOR FINAL',
                'last_name' => 'CONSUMIDOR FINAL',
                'phone' => 'CONSUMIDOR FINAL',
                'address' => 'CONSUMIDOR FINAL',
                'email' => 'CONSUMIDOR FINAL',

            ]);

            // Categoria::create([

            //     'name'=>'productos',
            //     'description'=>'productos',

            // ]);

            Bunises::create([
                'name'=>'ATLAS',
                'description'=>'ATLAS',
                'logo'=>'logo.svg',
                'mail'=>'ATLAS@atlastechnology.tech',
                'address'=>'Almedo y 10 de agosto',
                'ruc'=>'0800000000001',
                'telephone'=>'0900000000',
            ]);

            Printer::create([
                'name'=>'Prueba',
            ]);

            
    }
}
