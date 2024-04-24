<?php

namespace App\Repositories;

use App\Models\Photos_details;
use App\Repositories\BaseRepository;

class Photos_detailsRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'gps_location',
        'status',
        'description'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Photos_details::class;
    }
}
