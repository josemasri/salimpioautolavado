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
        $package = \Illuminate\Support\Facades\DB::table("package")->where('code','paquete1CocheToledo')->where('vehicleType','coche')->first();

        if(is_null($package)){
            DB::table('package')->insert([
                'id'                => 1,
                'name'              => 'Paquete 1',
                'code'              => 'paquete1CocheToledo',
                'price'             => 280,
                'description'       => '1 Lavada Semanal por dentro y por fuera',
                'vehicleType'       => "coche"
            ]);
        }

        $package = \Illuminate\Support\Facades\DB::table("package")->where('code','paquete1CamionetaToledo')->where('vehicleType','camioneta')->first();

        if(is_null($package)){
            DB::table('package')->insert([
                'id'                => 2,
                'name'              => 'Paquete 1',
                'code'              => 'paquete1CamionetaToledo',
                'price'             => 340,
                'description'       => '1 Lavada Semanal por dentro y por fuera',
                'vehicleType'       => "camioneta"
            ]);
        }

        $package = \Illuminate\Support\Facades\DB::table("package")->where('code','paquete2CocheToledo')->where('vehicleType','coche')->first();

        if(is_null($package)){
            DB::table('package')->insert([
                'id'                => 3,
                'name'              => 'Paquete 2',
                'code'              => 'paquete2CocheToledo',
                'price'             => 549,
                'description'       => '2 lavadas semanales por dentro y fuera',
                'vehicleType'       => "coche"
            ]);
        }

        $package = \Illuminate\Support\Facades\DB::table("package")->where('code','paquete2CamionetaToledo')->where('vehicleType','camioneta')->first();

        if(is_null($package)){
            DB::table('package')->insert([
                'id'                => 4,
                'name'              => 'Paquete 2',
                'code'              => 'paquete2CamionetaToledo',
                'price'             => 649,
                'description'       => '2 lavadas semanales por dentro y fuera',
                'vehicleType'       => "camioneta"
            ]);
        }

        $package = \Illuminate\Support\Facades\DB::table("package")->where('code','paquete3CocheToledo')->where('vehicleType','coche')->first();

        if(is_null($package)){
            DB::table('package')->insert([
                'id'                => 5,
                'name'              => 'Paquete 3',
                'code'              => 'paquete3CocheToledo',
                'price'             => 240,
                'description'       => '1 Lavada semanal por fuera',
                'vehicleType'       => "coche"
            ]);
        }

        $package = \Illuminate\Support\Facades\DB::table("package")->where('code','paquete3CamionetaToledo')->where('vehicleType','camioneta')->first();

        if(is_null($package)){
            DB::table('package')->insert([
                'id'                => 6,
                'name'              => 'Paquete 3',
                'code'              => 'paquete3CamionetaToledo',
                'price'             => 280,
                'description'       => '1 Lavada semanal por fuera',
                'vehicleType'       => "camioneta"
            ]);
        }

        $package = \Illuminate\Support\Facades\DB::table("package")->where('code','paquete4CocheToledo')->where('vehicleType','coche')->first();

        if(is_null($package)){
            DB::table('package')->insert([
                'id'                => 7,
                'name'              => 'Paquete 4',
                'code'              => 'paquete4CocheToledo',
                'price'             => 480,
                'description'       => '2 lavadas semanales por fuera',
                'vehicleType'       => "coche"
            ]);
        }

        $package = \Illuminate\Support\Facades\DB::table("package")->where('code','paquete4CamionetaToledo')->where('vehicleType','camioneta')->first();

        if(is_null($package)){
            DB::table('package')->insert([
                'id'                => 8,
                'name'              => 'Paquete 4',
                'code'              => 'paquete4CamionetaToledo',
                'price'             => 560,
                'description'       => '2 lavadas semanales por fuera',
                'vehicleType'       => "camioneta"
            ]);
        }

        $package = \Illuminate\Support\Facades\DB::table("package")->where('code','paquete5CocheToledo')->where('vehicleType','coche')->first();

        if(is_null($package)){
            DB::table('package')->insert([
                'id'                => 9,
                'name'              => 'Paquete 5',
                'code'              => 'paquete5CocheToledo',
                'price'             => 799,
                'description'       => '3 lavadas semanales por dentro y fuera',
                'vehicleType'       => "coche"
            ]);
        }

        $package = \Illuminate\Support\Facades\DB::table("package")->where('code','paquete5CamionetaToledo')->where('vehicleType','camioneta')->first();

        if(is_null($package)){
            DB::table('package')->insert([
                'id'                => 10,
                'name'              => 'Paquete 5',
                'code'              => 'paquete5CamionetaToledo',
                'price'             => 949,
                'description'       => '3 Lavadas semanales por dentro y fuera',
                'vehicleType'       => "camioneta"
            ]);
        }

        $package = \Illuminate\Support\Facades\DB::table("package")->where('code','paquete6CocheToledo')->where('vehicleType','coche')->first();

        if(is_null($package)){
            DB::table('package')->insert([
                'id'                => 11,
                'name'              => 'Paquete 6',
                'code'              => 'paquete6CocheToledo',
                'price'             => 430,
                'description'       => '1 lavada semanal por dentro y fuera, y baño de cera 1 vez al mes',
                'vehicleType'       => "coche"
            ]);
        }

        $package = \Illuminate\Support\Facades\DB::table("package")->where('code','paquete6CamionetaToledo')->where('vehicleType','camioneta')->first();

        if(is_null($package)){
            DB::table('package')->insert([
                'id'                => 12,
                'name'              => 'Paquete 6',
                'code'              => 'paquete6CamionetaToledo',
                'price'             => 490,
                'description'       => '1 lavada semanal por dentro y fuera, y baño de cera 1 vez al mes',
                'vehicleType'       => "camioneta"
            ]);
        }

        $package = \Illuminate\Support\Facades\DB::table("package")->where('code','paquete7CocheToledo')->where('vehicleType','coche')->first();

        if(is_null($package)){
            DB::table('package')->insert([
                'id'                => 13,
                'name'              => 'Paquete 7',
                'code'              => 'paquete7CocheToledo',
                'price'             => 710,
                'description'       => '2 lavadas semanales por dentro y fuera y baño de cera 1 vez al mes',
                'vehicleType'       => "coche"
            ]);
        }

        $package = \Illuminate\Support\Facades\DB::table("package")->where('code','paquete7CamionetaToledo')->where('vehicleType','camioneta')->first();

        if(is_null($package)){
            DB::table('package')->insert([
                'id'                => 14,
                'name'              => 'Paquete 7',
                'code'              => 'paquete7CamionetaToledo',
                'price'             => 830,
                'description'       => '2 lavadas semanales por dentro y fuera y baño de cera 1 vez al mes',
                'vehicleType'       => "camioneta"
            ]);
        }

        $package = \Illuminate\Support\Facades\DB::table("package")->where('code','paquete8CocheToledo')->where('vehicleType','coche')->first();

        if(is_null($package)){
            DB::table('package')->insert([
                'id'                => 15,
                'name'              => 'Paquete 8',
                'code'              => 'paquete8CocheToledo',
                'price'             => 860,
                'description'       => '2 lavadas semanales por dentro y fuera, baño de cera 1 vez a la quincena',
                'vehicleType'       => "coche"
            ]);
        }

        $package = \Illuminate\Support\Facades\DB::table("package")->where('code','paquete8CamionetaToledo')->where('vehicleType','camioneta')->first();

        if(is_null($package)){
            DB::table('package')->insert([
                'id'                => 16,
                'name'              => 'Paquete 8',
                'code'              => 'paquete8CamionetaToledo',
                'price'             => 980,
                'description'       => '2 lavadas semanales por dentro y fuera, baño de cera 1 vez a la quincena',
                'vehicleType'       => "camioneta"
            ]);
        }

        $package = \Illuminate\Support\Facades\DB::table("package")->where('code','paquete9CocheToledo')->where('vehicleType','coche')->first();

        if(is_null($package)){
            DB::table('package')->insert([
                'id'                => 17,
                'name'              => 'Paquete 9',
                'code'              => 'paquete9CocheToledo',
                'price'             => 980,
                'description'       => '2 lavadas semanales por dentro y fuera, encerado 1 vez al mes',
                'vehicleType'       => "coche"
            ]);
        }

        $package = \Illuminate\Support\Facades\DB::table("package")->where('code','paquete9CamionetaToledo')->where('vehicleType','camioneta')->first();

        if(is_null($package)){
            DB::table('package')->insert([
                'id'                => 18,
                'name'              => 'Paquete 9',
                'code'              => 'paquete9CamionetaToledo',
                'price'             => 860,
                'description'       => '2 lavadas semanales por dentro y fuera, encerado 1 vez al mes',
                'vehicleType'       => "camioneta"
            ]);
        }
    }
}
