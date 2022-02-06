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
        $package = \Illuminate\Support\Facades\DB::table("package")->where('code','paquete1CochePalmasHills')->where('vehicleType','coche')->first();

        if(is_null($package)){
            DB::table('package')->insert([
                'id'                => 1,
                'name'              => 'Paquete 1',
                'code'              => 'paquete1CochePalmasHills',
                'price'             => 280,
                'description'       => '1 Lavada Semanal por dentro y por fuera',
                'vehicleType'       => "coche"
            ]);
        }

        $package = \Illuminate\Support\Facades\DB::table("package")->where('code','paquete1CamionetaPalmasHills')->where('vehicleType','camioneta')->first();

        if(is_null($package)){
            DB::table('package')->insert([
                'id'                => 2,
                'name'              => 'Paquete 1',
                'code'              => 'paquete1CamionetaPalmasHills',
                'price'             => 340,
                'description'       => '1 Lavada Semanal por dentro y por fuera',
                'vehicleType'       => "camioneta"
            ]);
        }

        $package = \Illuminate\Support\Facades\DB::table("package")->where('code','paquete2CochePalmasHills')->where('vehicleType','coche')->first();

        if(is_null($package)){
            DB::table('package')->insert([
                'id'                => 3,
                'name'              => 'Paquete 2',
                'code'              => 'paquete2CochePalmasHills',
                'price'             => 549,
                'description'       => '2 lavadas semanales por dentro y fuera',
                'vehicleType'       => "coche"
            ]);
        }

        $package = \Illuminate\Support\Facades\DB::table("package")->where('code','paquete2CamionetaPalmasHills')->where('vehicleType','camioneta')->first();

        if(is_null($package)){
            DB::table('package')->insert([
                'id'                => 4,
                'name'              => 'Paquete 2',
                'code'              => 'paquete2CamionetaPalmasHills',
                'price'             => 649,
                'description'       => '2 lavadas semanales por dentro y fuera',
                'vehicleType'       => "camioneta"
            ]);
        }

        $package = \Illuminate\Support\Facades\DB::table("package")->where('code','paquete3CochePalmasHills')->where('vehicleType','coche')->first();

        if(is_null($package)){
            DB::table('package')->insert([
                'id'                => 5,
                'name'              => 'Paquete 3',
                'code'              => 'paquete3CochePalmasHills',
                'price'             => 240,
                'description'       => '1 Lavada semanal por fuera',
                'vehicleType'       => "coche"
            ]);
        }

        $package = \Illuminate\Support\Facades\DB::table("package")->where('code','paquete3CamionetaPalmasHills')->where('vehicleType','camioneta')->first();

        if(is_null($package)){
            DB::table('package')->insert([
                'id'                => 6,
                'name'              => 'Paquete 3',
                'code'              => 'paquete3CamionetaPalmasHills',
                'price'             => 280,
                'description'       => '1 Lavada semanal por fuera',
                'vehicleType'       => "camioneta"
            ]);
        }

        $package = \Illuminate\Support\Facades\DB::table("package")->where('code','paquete4CochePalmasHills')->where('vehicleType','coche')->first();

        if(is_null($package)){
            DB::table('package')->insert([
                'id'                => 7,
                'name'              => 'Paquete 4',
                'code'              => 'paquete4CochePalmasHills',
                'price'             => 480,
                'description'       => '2 lavadas semanales por fuera',
                'vehicleType'       => "coche"
            ]);
        }

        $package = \Illuminate\Support\Facades\DB::table("package")->where('code','paquete4CamionetaPalmasHills')->where('vehicleType','camioneta')->first();

        if(is_null($package)){
            DB::table('package')->insert([
                'id'                => 8,
                'name'              => 'Paquete 4',
                'code'              => 'paquete4CamionetaPalmasHills',
                'price'             => 560,
                'description'       => '2 lavadas semanales por fuera',
                'vehicleType'       => "camioneta"
            ]);
        }

        $package = \Illuminate\Support\Facades\DB::table("package")->where('code','paquete5CochePalmasHills')->where('vehicleType','coche')->first();

        if(is_null($package)){
            DB::table('package')->insert([
                'id'                => 9,
                'name'              => 'Paquete 5',
                'code'              => 'paquete5CochePalmasHills',
                'price'             => 799,
                'description'       => '3 lavadas semanales por dentro y fuera',
                'vehicleType'       => "coche"
            ]);
        }

        $package = \Illuminate\Support\Facades\DB::table("package")->where('code','paquete5CamionetaPalmasHills')->where('vehicleType','camioneta')->first();

        if(is_null($package)){
            DB::table('package')->insert([
                'id'                => 10,
                'name'              => 'Paquete 5',
                'code'              => 'paquete5CamionetaPalmasHills',
                'price'             => 949,
                'description'       => '3 Lavadas semanales por dentro y fuera',
                'vehicleType'       => "camioneta"
            ]);
        }

        $package = \Illuminate\Support\Facades\DB::table("package")->where('code','paquete6CochePalmasHills')->where('vehicleType','coche')->first();

        if(is_null($package)){
            DB::table('package')->insert([
                'id'                => 11,
                'name'              => 'Paquete 6',
                'code'              => 'paquete6CochePalmasHills',
                'price'             => 430,
                'description'       => '1 lavada semanal por dentro y fuera, y baño de cera 1 vez al mes',
                'vehicleType'       => "coche"
            ]);
        }

        $package = \Illuminate\Support\Facades\DB::table("package")->where('code','paquete6CamionetaPalmasHills')->where('vehicleType','camioneta')->first();

        if(is_null($package)){
            DB::table('package')->insert([
                'id'                => 12,
                'name'              => 'Paquete 6',
                'code'              => 'paquete6CamionetaPalmasHills',
                'price'             => 490,
                'description'       => '1 lavada semanal por dentro y fuera, y baño de cera 1 vez al mes',
                'vehicleType'       => "camioneta"
            ]);
        }

        $package = \Illuminate\Support\Facades\DB::table("package")->where('code','paquete7CochePalmasHills')->where('vehicleType','coche')->first();

        if(is_null($package)){
            DB::table('package')->insert([
                'id'                => 13,
                'name'              => 'Paquete 7',
                'code'              => 'paquete7CochePalmasHills',
                'price'             => 710,
                'description'       => '2 lavadas semanales por dentro y fuera y baño de cera 1 vez al mes',
                'vehicleType'       => "coche"
            ]);
        }

        $package = \Illuminate\Support\Facades\DB::table("package")->where('code','paquete7CamionetaPalmasHills')->where('vehicleType','camioneta')->first();

        if(is_null($package)){
            DB::table('package')->insert([
                'id'                => 14,
                'name'              => 'Paquete 7',
                'code'              => 'paquete7CamionetaPalmasHills',
                'price'             => 830,
                'description'       => '2 lavadas semanales por dentro y fuera y baño de cera 1 vez al mes',
                'vehicleType'       => "camioneta"
            ]);
        }

        $package = \Illuminate\Support\Facades\DB::table("package")->where('code','paquete8CochePalmasHills')->where('vehicleType','coche')->first();

        if(is_null($package)){
            DB::table('package')->insert([
                'id'                => 15,
                'name'              => 'Paquete 8',
                'code'              => 'paquete8CochePalmasHills',
                'price'             => 860,
                'description'       => '2 lavadas semanales por dentro y fuera, baño de cera 1 vez a la quincena',
                'vehicleType'       => "coche"
            ]);
        }

        $package = \Illuminate\Support\Facades\DB::table("package")->where('code','paquete8CamionetaPalmasHills')->where('vehicleType','camioneta')->first();

        if(is_null($package)){
            DB::table('package')->insert([
                'id'                => 16,
                'name'              => 'Paquete 8',
                'code'              => 'paquete8CamionetaPalmasHills',
                'price'             => 980,
                'description'       => '2 lavadas semanales por dentro y fuera, baño de cera 1 vez a la quincena',
                'vehicleType'       => "camioneta"
            ]);
        }

        $package = \Illuminate\Support\Facades\DB::table("package")->where('code','paquete9CochePalmasHills')->where('vehicleType','coche')->first();

        if(is_null($package)){
            DB::table('package')->insert([
                'id'                => 17,
                'name'              => 'Paquete 9',
                'code'              => 'paquete9CochePalmasHills',
                'price'             => 980,
                'description'       => '2 lavadas semanales por dentro y fuera, encerado 1 vez al mes',
                'vehicleType'       => "coche"
            ]);
        }

        $package = \Illuminate\Support\Facades\DB::table("package")->where('code','paquete9CamionetaPalmasHills')->where('vehicleType','camioneta')->first();

        if(is_null($package)){
            DB::table('package')->insert([
                'id'                => 18,
                'name'              => 'Paquete 9',
                'code'              => 'paquete9CamionetaPalmasHills',
                'price'             => 860,
                'description'       => '2 lavadas semanales por dentro y fuera, encerado 1 vez al mes',
                'vehicleType'       => "camioneta"
            ]);
        }
    }
}
