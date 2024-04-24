<?php

namespace App\Repositories;

use App\Models\Photos;
use App\Repositories\BaseRepository;

class PhotosRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'user_id',
        'photo_details_id',
        'url'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Photos::class;
    }
}
