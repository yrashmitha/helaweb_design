<?php

namespace App\Repositories;

use App\Models\Project;
use App\Models\Projects;
use App\Repositories\BaseRepository;
use Illuminate\Support\Facades\Storage;

/**
 * Class ProjectsRepository
 * @package App\Repositories
 * @version September 21, 2020, 6:19 pm UTC
*/

class ProjectsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'description',
        'url',
        'image_path',
        'cover_path'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Projects::class;
    }


}
