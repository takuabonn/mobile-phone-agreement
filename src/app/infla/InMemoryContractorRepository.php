<?php

namespace App\infla;

use App\domains\repositories\IFContractorRepository;
use Illuminate\Support\Facades\Log;

class InMemoryContractorRepository implements IFContractorRepository
{

    private $contractorLists = [
        [
            'id' => 1,
            'family_group_id' => 1,
            'name' => '太郎',
            'zip_code' => '0750094',
            'birth_day' => '1998/03/22',
            'prefectures' => '東京都',
            'city' => '港区',
            'street_bunch' => '5-5',
        ],
        [
            'id' => 2,
            'family_group_id' => 1,
            'name' => '泰子',
            'zip_code' => '0750094',
            'birth_day' => '1998/03/22',
            'prefectures' => '東京都',
            'city' => '港区',
            'street_bunch' => '5-5',
        ],
        [
            'id' => 3,
            'family_group_id' => 1,
            'name' => '理子',
            'zip_code' => '0750094',
            'birth_day' => '1998/03/22',
            'prefectures' => '東京都',
            'city' => '港区',
            'street_bunch' => '5-5',
        ],
        [
            'id' => 4,
            'family_group_id' => null,
            'name' => '拓実',
            'zip_code' => '0750094',
            'birth_day' => '1998/03/22',
            'prefectures' => '東京都',
            'city' => '北港区',
            'street_bunch' => '5-5',
        ],
        [
            'id' => 5,
            'family_group_id' => null,
            'name' => '拓',
            'zip_code' => '0750094',
            'birth_day' => '1998/03/22',
            'prefectures' => '東京都',
            'city' => '北港区',
            'street_bunch' => '5-5',
        ],

    ];

    public function findByContractorId($contractor_id)
    {
        $keyIndex = array_search($contractor_id, array_column($this->contractorLists, 'id'));
        return $this->contractorLists[$keyIndex];
    }

    public function getByColumn($column)
    {
    }

    public function all()
    {
    }

    public function update($contractor)
    {
    }

    public function create($contractor)
    {
    }

    public function getByFamilyGroupId($family_group_id)
    {
        $contractorLists = array_filter($this->contractorLists, function ($contractor) use ($family_group_id) {
            return $contractor['family_group_id'] === $family_group_id;
        });
        return array_values($contractorLists);
    }
}
