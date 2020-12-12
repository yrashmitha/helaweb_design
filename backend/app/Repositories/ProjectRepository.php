<?php

namespace App\Repositories;

use App\Models\Project;
use App\Repositories\BaseRepository;
use Illuminate\Support\Facades\Storage;

/**
 * Class ProjectRepository
 * @package App\Repositories
 * @version September 21, 2020, 6:48 pm UTC
*/

class ProjectRepository extends BaseRepository
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
        return Project::class;
    }

    public function custom_delete($id)
    {
        $paper=Project::find($id);
        $path=$paper->image_path;
        $path2=$paper->cover_path;
        $deletePath=$path;
//        dd($deletePath);
        $deletePath2=$path2;
        Storage::delete($deletePath);
        Storage::delete($deletePath2);
        $pp=$paper->delete();
        return response()->json($pp);
    }
}
