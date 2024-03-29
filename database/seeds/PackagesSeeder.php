<?php

use Illuminate\Database\Seeder;

class PackagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $package = \Illuminate\Support\Facades\DB::table("package")->where('code','paquete1Coche')->where('vehicleType','coche')->first();

        if(is_null($package)){
            DB::table('package')->insert([
                'id'                => 1,
                'name'              => 'Paquete 1',
                'code'              => 'paquete1Coche',
                'price'             => 240,
                'description'       => '1 Lavada Semanal',
                'vehicleType'       => "coche"
            ]);
        }

        $package = \Illuminate\Support\Facades\DB::table("package")->where('code','paquete1Camioneta')->where('vehicleType','camioneta')->first();

        if(is_null($package)){
            DB::table('package')->insert([
                'id'                => 2,
                'name'              => 'Paquete 1',
                'code'              => 'paquete1Camioneta',
                'price'             => 300,
                'description'       => '1 Lavada Semanal',
                'vehicleType'       => "camioneta"
            ]);
        }

        $package = \Illuminate\Support\Facades\DB::table("package")->where('code','paquete2Coche')->where('vehicleType','coche')->first();

        if(is_null($package)){
            DB::table('package')->insert([
                'id'                => 3,
                'name'              => 'Paquete 2',
                'code'              => 'paquete2Coche',
                'price'             => 480,
                'description'       => '2 Lavadas Semanales',
                'vehicleType'       => "coche"
            ]);
        }

        $package = \Illuminate\Support\Facades\DB::table("package")->where('code','paquete2Camioneta')->where('vehicleType','camioneta')->first();

        if(is_null($package)){
            DB::table('package')->insert([
                'id'                => 4,
                'name'              => 'Paquete 2',
                'code'              => 'paquete2Camioneta',
                'price'             => 600,
                'description'       => '2 Lavadas Semanales',
                'vehicleType'       => "camioneta"
            ]);
        }

        $package = \Illuminate\Support\Facades\DB::table("package")->where('code','paquete3Coche')->where('vehicleType','coche')->first();

        if(is_null($package)){
            DB::table('package')->insert([
                'id'                => 5,
                'name'              => 'Paquete 3',
                'code'              => 'paquete3Coche',
                'price'             => 720,
                'description'       => '3 Lavadas Semanales',
                'vehicleType'       => "coche"
            ]);
        }

        $package = \Illuminate\Support\Facades\DB::table("package")->where('code','paquete3Camioneta')->where('vehicleType','camioneta')->first();

        if(is_null($package)){
            DB::table('package')->insert([
                'id'                => 6,
                'name'              => 'Paquete 3',
                'code'              => 'paquete3Camioneta',
                'price'             => 900,
                'description'       => '3 Lavadas Semanales',
                'vehicleType'       => "camioneta"
            ]);
        }

        $package = \Illuminate\Support\Facades\DB::table("package")->where('code','paquete4Coche')->where('vehicleType','coche')->first();

        if(is_null($package)){
            DB::table('package')->insert([
                'id'                => 7,
                'name'              => 'Paquete 4',
                'code'              => 'paquete4Coche',
                'price'             => 390,
                'description'       => '1 Lavada Semanal|Baño de cera 1 vez al mes',
                'vehicleType'       => "coche"
            ]);
        }

        $package = \Illuminate\Support\Facades\DB::table("package")->where('code','paquete4Camioneta')->where('vehicleType','camioneta')->first();

        if(is_null($package)){
            DB::table('package')->insert([
                'id'                => 8,
                'name'              => 'Paquete 4',
                'code'              => 'paquete4Camioneta',
                'price'             => 450,
                'description'       => '1 Lavada Semanal|Baño de cera 1 vez al mes',
                'vehicleType'       => "camioneta"
            ]);
        }

        $package = \Illuminate\Support\Facades\DB::table("package")->where('code','paquete5Coche')->where('vehicleType','coche')->first();

        if(is_null($package)){
            DB::table('package')->insert([
                'id'                => 9,
                'name'              => 'Paquete 5',
                'code'              => 'paquete5Coche',
                'price'             => 630,
                'description'       => '3 Lavadas Semanales|Baño de cera 1 vez al mes',
                'vehicleType'       => "coche"
            ]);
        }

        $package = \Illuminate\Support\Facades\DB::table("package")->where('code','paquete5Camioneta')->where('vehicleType','camioneta')->first();

        if(is_null($package)){
            DB::table('package')->insert([
                'id'                => 10,
                'name'              => 'Paquete 5',
                'code'              => 'paquete5Camioneta',
                'price'             => 750,
                'description'       => '3 Lavadas Semanales|Baño de cera 1 vez al mes',
                'vehicleType'       => "camioneta"
            ]);
        }

        $package = \Illuminate\Support\Facades\DB::table("package")->where('code','paquete6Coche')->where('vehicleType','coche')->first();

        if(is_null($package)){
            DB::table('package')->insert([
                'id'                => 11,
                'name'              => 'Paquete 6',
                'code'              => 'paquete6Coche',
                'price'             => 780,
                'description'       => '2 Lavadas Semanales|Baño de cera 1 vez a la quincena',
                'vehicleType'       => "coche"
            ]);
        }

        $package = \Illuminate\Support\Facades\DB::table("package")->where('code','paquete6Camioneta')->where('vehicleType','camioneta')->first();

        if(is_null($package)){
            DB::table('package')->insert([
                'id'                => 12,
                'name'              => 'Paquete 6',
                'code'              => 'paquete6Camioneta',
                'price'             => 900,
                'description'       => '2 Lavadas Semanales|Baño de cera 1 vez a la quincena',
                'vehicleType'       => "camioneta"
            ]);
        }

        $package = \Illuminate\Support\Facades\DB::table("package")->where('code','paquete7Coche')->where('vehicleType','coche')->first();

        if(is_null($package)){
            DB::table('package')->insert([
                'id'                => 13,
                'name'              => 'Paquete 7',
                'code'              => 'paquete7Coche',
                'price'             => 780,
                'description'       => '2 Lavadas Semanales|Encerado 1 vez al mes',
                'vehicleType'       => "coche"
            ]);
        }

        $package = \Illuminate\Support\Facades\DB::table("package")->where('code','paquete7Camioneta')->where('vehicleType','camioneta')->first();

        if(is_null($package)){
            DB::table('package')->insert([
                'id'                => 14,
                'name'              => 'Paquete 7',
                'code'              => 'paquete7Camioneta',
                'price'             => 900,
                'description'       => '2 Lavadas Semanales|Encerado 1 vez al mes',
                'vehicleType'       => "camioneta"
            ]);
        }

        $package = \Illuminate\Support\Facades\DB::table("package")->where('code','paquete8Coche')->where('vehicleType','coche')->first();

        if(is_null($package)){
            DB::table('package')->insert([
                'id'                => 15,
                'name'              => 'Paquete 8',
                'code'              => 'paquete8Coche',
                'price'             => 1080,
                'description'       => '2 Lavadas Semanales|Encerado 1 vez a la quincena',
                'vehicleType'       => "coche"
            ]);
        }

        $package = \Illuminate\Support\Facades\DB::table("package")->where('code','paquete8Camioneta')->where('vehicleType','camioneta')->first();

        if(is_null($package)){
            DB::table('package')->insert([
                'id'                => 16,
                'name'              => 'Paquete 8',
                'code'              => 'paquete8Camioneta',
                'price'             => 1200,
                'description'       => '2 Lavadas Semanales|Encerado 1 vez a la quincena',
                'vehicleType'       => "camioneta"
            ]);
        }
    }
}
