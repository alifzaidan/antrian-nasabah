<?php

namespace Database\Seeders;

<<<<<<< HEAD
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
=======
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
>>>>>>> acf8bb9743c94414381424098dce632d4eca55f0

class UnitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
<<<<<<< HEAD
        //
=======
        $user = User::all();

        if ($user) {
            DB::table('units')->insert([
                [
                    'nama' => 'Blimbing, Malang',
                    'user_id' => $user[0]->id,
                    'jumlah_teller' => 2,
                    'jumlah_cs' => 2,
                ],
                [
                    'nama' => 'Lowokwaru, Malang',
                    'user_id' => $user[1]->id,
                    'jumlah_teller' => 2,
                    'jumlah_cs' => 2,
                ],
            ]);
        }
>>>>>>> acf8bb9743c94414381424098dce632d4eca55f0
    }
}
