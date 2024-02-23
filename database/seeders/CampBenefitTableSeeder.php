<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\CampBenefit;

class CampBenefitTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $CampBenefits = [

        [
            'camp_id' => 1,
            'name' => 'Crypto Trading',
        ],
        [
            'camp_id' => 1,
            'name' => 'Crypto Research',
        ],
        [
            'camp_id' => 1,
            'name' => '1-1 Mentoring Program',
        ],
        [
            'camp_id' => 1,
            'name' => 'Crypto Self Custody'
        ],
        [
            'camp_id' => 1,
            'name' => 'Offline Course Videos'
        ],
        [
            'camp_id' => 1,
            'name' => 'Future Job Opportinity'
        ],
        [
            'camp_id' => 1,
            'name' => 'Cryptocurrency Security'
        ],
        [
            'camp_id' => 1,
            'name' => 'Blockchain Interoperability'
        ],
        [
            'camp_id' => 2,
            'name' => '1-1 Mentoring Program'
        ],
        [
            'camp_id' => 2,
            'name' => 'Crypto Research'
        ],
        [
            'camp_id' => 2,
            'name' => 'Crypto Self Custody'
        ],
        [
            'camp_id' => 2,
            'name' => 'Offline Course Videos'
        ],
            
        ];

        CampBenefit::insert($CampBenefits);
        }
    }

