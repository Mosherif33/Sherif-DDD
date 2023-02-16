<?php

namespace App\Domain\School\Entities;

use App\Infrastructure\AbstractModels\BaseModel as Model;
use App\Domain\School\Entities\Traits\Relations\RoomRelations;
use App\Domain\School\Entities\Traits\CustomAttributes\RoomAttributes;
use App\Domain\School\Repositories\Contracts\RoomRepository;

class Room extends Model
{
    use RoomRelations, RoomAttributes;

    /**
     * @var array
     */
    public static $logAttributes = ["*"];

    /**
     * The attributes that are going to be logged.
     *
     * @var array
     */
    protected static $logName = 'Room';

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
        'name'
    ];

    /**
     * The table name.
     *
     * @var array
     */
    protected $table = "rooms";

    /**
     * Holds Repository Related to current Model.
     *
     * @var array
     */
    protected $routeRepoBinding = RoomRepository::class;
}
