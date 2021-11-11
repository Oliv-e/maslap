<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class data_awal extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $storeadmin             = new User();
        $storeadmin->name       = 'Admin';
        $storeadmin->email      = 'admin@app.com';
        $storeadmin->password   = bcrypt('12345678');
        $storeadmin->level      = 'admin';
        $storeadmin->nik        = '6171123443211234';
        $storeadmin->hp         = '081234123412';
        $storeadmin->save();
    }
}
