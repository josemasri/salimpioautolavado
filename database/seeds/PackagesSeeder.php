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
        $package = \Illuminate\Support\Facades\DB::table("package")->where('code','paquete1CochePuertaDelSol')->where('vehicleType','coche')->first();

        if(is_null($package)){
            DB::table('package')->insert([
                'id'                => 1,
                'name'              => 'Paquete 1',
                'code'              => 'paquete1CochePuertaDelSol',
                'price'             => 280,
                'description'       => '1 Lavada Semanal por dentro y por fuera',
                'vehicleType'       => "coche"
            ]);
        }

        $package = \Illuminate\Support\Facades\DB::table("package")->where('code','paquete1CamionetaPuertaDelSol')->where('vehicleType','camioneta')->first();

        if(is_null($package)){
            DB::table('package')->insert([
                'id'                => 2,
                'name'              => 'Paquete 1',
                'code'              => 'paquete1CamionetaPuertaDelSol',
                'price'             => 340,
                'description'       => '1 Lavada Semanal por dentro y por fuera',
                'vehicleType'       => "camioneta"
            ]);
        }

        $package = \Illuminate\Support\Facades\DB::table("package")->where('code','paquete2CochePuertaDelSol')->where('vehicleType','coche')->first();

        if(is_null($package)){
            DB::table('package')->insert([
                'id'                => 3,
                'name'              => 'Paquete 2',
                'code'              => 'paquete2CochePuertaDelSol',
                'price'             => 549,
                'description'       => '2 lavadas semanales por dentro y fuera',
                'vehicleType'       => "coche"
            ]);
        }

        $package = \Illuminate\Support\Facades\DB::table("package")->where('code','paquete2CamionetaPuertaDelSol')->where('vehicleType','camioneta')->first();

        if(is_null($package)){
            DB::table('package')->insert([
                'id'                => 4,
                'name'              => 'Paquete 2',
                'code'              => 'paquete2CamionetaPuertaDelSol',
                'price'             => 649,
                'description'       => '2 lavadas semanales por dentro y fuera',
                'vehicleType'       => "camioneta"
            ]);
        }

        $package = \Illuminate\Support\Facades\DB::table("package")->where('code','paquete3CochePuertaDelSol')->where('vehicleType','coche')->first();

        if(is_null($package)){
            DB::table('package')->insert([
                'id'                => 5,
                'name'              => 'Paquete 3',
                'code'              => 'paquete3CochePuertaDelSol',
                'price'             => 240,
                'description'       => '1 Lavada semanal por fuera',
                'vehicleType'       => "coche"
            ]);
        }

        $package = \Illuminate\Support\Facades\DB::table("package")->where('code','paquete3CamionetaPuertaDelSol')->where('vehicleType','camioneta')->first();

        if(is_null($package)){
            DB::table('package')->insert([
                'id'                => 6,
                'name'              => 'Paquete 3',
                'code'              => 'paquete3CamionetaPuertaDelSol',
                'price'             => 280,
                'description'       => '1 Lavada semanal por fuera',
                'vehicleType'       => "camioneta"
            ]);
        }

        $package = \Illuminate\Support\Facades\DB::table("package")->where('code','paquete4CochePuertaDelSol')->where('vehicleType','coche')->first();

        if(is_null($package)){
            DB::table('package')->insert([
                'id'                => 7,
                'name'              => 'Paquete 4',
                'code'              => 'paquete4CochePuertaDelSol',
                'price'             => 480,
                'description'       => '2 lavadas semanales por fuera',
                'vehicleType'       => "coche"
            ]);
        }

        $package = \Illuminate\Support\Facades\DB::table("package")->where('code','paquete4CamionetaPuertaDelSol')->where('vehicleType','camioneta')->first();

        if(is_null($package)){
            DB::table('package')->insert([
                'id'                => 8,
                'name'              => 'Paquete 4',
                'code'              => 'paquete4CamionetaPuertaDelSol',
                'price'             => 560,
                'description'       => '2 lavadas semanales por fuera',
                'vehicleType'       => "camioneta"
            ]);
        }

        $package = \Illuminate\Support\Facades\DB::table("package")->where('code','paquete5CochePuertaDelSol')->where('vehicleType','coche')->first();

        if(is_null($package)){
            DB::table('package')->insert([
                'id'                => 9,
                'name'              => 'Paquete 5',
                'code'              => 'paquete5CochePuertaDelSol',
                'price'             => 799,
                'description'       => '3 lavadas semanales por dentro y fuera',
                'vehicleType'       => "coche"
            ]);
        }

        $package = \Illuminate\Support\Facades\DB::table("package")->where('code','paquete5CamionetaPuertaDelSol')->where('vehicleType','camioneta')->first();

        if(is_null($package)){
            DB::table('package')->insert([
                'id'                => 10,
                'name'              => 'Paquete 5',
                'code'              => 'paquete5CamionetaPuertaDelSol',
                'price'             => 949,
                'description'       => '3 Lavadas semanales por dentro y fuera',
                'vehicleType'       => "camioneta"
            ]);
        }

        $package = \Illuminate\Support\Facades\DB::table("package")->where('code','paquete6CochePuertaDelSol')->where('vehicleType','coche')->first();

        if(is_null($package)){
            DB::table('package')->insert([
                'id'                => 11,
                'name'              => 'Paquete 6',
                'code'              => 'paquete6CochePuertaDelSol',
                'price'             => 430,
                'description'       => '1 lavada semanal por dentro y fuera, y baño de cera 1 vez al mes',
                'vehicleType'       => "coche"
            ]);
        }

        $package = \Illuminate\Support\Facades\DB::table("package")->where('code','paquete6CamionetaPuertaDelSol')->where('vehicleType','camioneta')->first();

        if(is_null($package)){
            DB::table('package')->insert([
                'id'                => 12,
                'name'              => 'Paquete 6',
                'code'              => 'paquete6CamionetaPuertaDelSol',
                'price'             => 490,
                'description'       => '1 lavada semanal por dentro y fuera, y baño de cera 1 vez al mes',
                'vehicleType'       => "camioneta"
            ]);
        }

        $package = \Illuminate\Support\Facades\DB::table("package")->where('code','paquete7CochePuertaDelSol')->where('vehicleType','coche')->first();

        if(is_null($package)){
            DB::table('package')->insert([
                'id'                => 13,
                'name'              => 'Paquete 7',
                'code'              => 'paquete7CochePuertaDelSol',
                'price'             => 710,
                'description'       => '2 lavadas semanales por dentro y fuera y baño de cera 1 vez al mes',
                'vehicleType'       => "coche"
            ]);
        }

        $package = \Illuminate\Support\Facades\DB::table("package")->where('code','paquete7CamionetaPuertaDelSol')->where('vehicleType','camioneta')->first();

        if(is_null($package)){
            DB::table('package')->insert([
                'id'                => 14,
                'name'              => 'Paquete 7',
                'code'              => 'paquete7CamionetaPuertaDelSol',
                'price'             => 830,
                'description'       => '2 lavadas semanales por dentro y fuera y baño de cera 1 vez al mes',
                'vehicleType'       => "camioneta"
            ]);
        }

        $package = \Illuminate\Support\Facades\DB::table("package")->where('code','paquete8CochePuertaDelSol')->where('vehicleType','coche')->first();

        if(is_null($package)){
            DB::table('package')->insert([
                'id'                => 15,
                'name'              => 'Paquete 8',
                'code'              => 'paquete8CochePuertaDelSol',
                'price'             => 860,
                'description'       => '2 lavadas semanales por dentro y fuera, baño de cera 1 vez a la quincena',
                'vehicleType'       => "coche"
            ]);
        }

        $package = \Illuminate\Support\Facades\DB::table("package")->where('code','paquete8CamionetaPuertaDelSol')->where('vehicleType','camioneta')->first();

        if(is_null($package)){
            DB::table('package')->insert([
                'id'                => 16,
                'name'              => 'Paquete 8',
                'code'              => 'paquete8CamionetaPuertaDelSol',
                'price'             => 980,
                'description'       => '2 lavadas semanales por dentro y fuera, baño de cera 1 vez a la quincena',
                'vehicleType'       => "camioneta"
            ]);
        }

        $package = \Illuminate\Support\Facades\DB::table("package")->where('code','paquete9CochePuertaDelSol')->where('vehicleType','coche')->first();

        if(is_null($package)){
            DB::table('package')->insert([
                'id'                => 17,
                'name'              => 'Paquete 9',
                'code'              => 'paquete9CochePuertaDelSol',
                'price'             => 980,
                'description'       => '2 lavadas semanales por dentro y fuera, encerado 1 vez al mes',
                'vehicleType'       => "coche"
            ]);
        }

        $package = \Illuminate\Support\Facades\DB::table("package")->where('code','paquete9CamionetaPuertaDelSol')->where('vehicleType','camioneta')->first();

        if(is_null($package)){
            DB::table('package')->insert([
                'id'                => 18,
                'name'              => 'Paquete 9',
                'code'              => 'paquete9CamionetaPuertaDelSol',
                'price'             => 860,
                'description'       => '2 lavadas semanales por dentro y fuera, encerado 1 vez al mes',
                'vehicleType'       => "camioneta"
            ]);
        }
    }
}
