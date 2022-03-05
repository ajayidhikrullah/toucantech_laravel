<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SchoolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('schools')->insertOrIgnore(
            [
                [
                    'name' => 'University Of Greenwich',
                ],
                [
                    'name' => 'University Of Kent',
                ],
                [
                    'name' => 'Oxford University',
                ],
                [
                    'name' => 'Havard University',
                ],
                [
                    'name' => 'University of Lagos',
                ],
            ]
        );
    }
}
