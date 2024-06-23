<?php

namespace Modules\Dummy\Models;

use App\Models\BaseModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Dummy extends BaseModel
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'dummies';

    /**
     * Create a new factory instance for the model.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    protected static function newFactory()
    {
        return \Modules\Dummy\database\factories\DummyFactory::new();
    }
}
