<?php

namespace App\Domain\School\Entities;

use App\Infrastructure\AbstractModels\BaseModel as Model;
use App\Domain\School\Entities\Traits\Relations\ProductRelations;
use App\Domain\School\Entities\Traits\CustomAttributes\ProductAttributes;
use App\Domain\School\Repositories\Contracts\ProductRepository;

class Product extends Model
{
    use ProductRelations, ProductAttributes;

    /**
     * @var array
     */
    public static $logAttributes = ["*"];

    /**
     * The attributes that are going to be logged.
     *
     * @var array
     */
    protected static $logName = 'Product';

    /**
     * define belongsTo relations.
     *
     * @var array
     */
    private $belongsTo = [];

    /**
     * define hasMany relations.
     *
     * @var array
     */
    private $hasMany = [];

    /**
     * define belongsToMany relations.
     *
     * @var array
     */
    private $belongsToMany = [];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'room_id',
        'name',
        'description',
        'price'
    ];
    public function room()
    {
        return $this->belongsTo(Room::class);
    }

    /**
     * The table name.
     *
     * @var array
     */
    protected $table = "products";

    /**
     * Holds Repository Related to current Model.
     *
     * @var array
     */
    protected $routeRepoBinding = ProductRepository::class;
}
