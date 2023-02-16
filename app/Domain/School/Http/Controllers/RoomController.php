<?php

namespace App\Domain\School\Http\Controllers;

use App\Infrastructure\Http\AbstractControllers\BaseController as Controller;
use App\Domain\School\Http\Requests\Room\RoomStoreFormRequest;
use App\Domain\School\Http\Requests\Room\RoomUpdateFormRequest;
use App\Domain\School\Repositories\Contracts\RoomRepository;
use Illuminate\Http\Request;
use MohamedReda\DDD\Traits\Responder;
use App\Domain\School\Entities\Room;
use App\Domain\School\Http\Resources\Room\RoomResourceCollection;
use App\Domain\School\Http\Resources\Room\RoomResource;
// use GuzzleHttp\Psr7\Response;
use Symfony\Component\HttpFoundation\Response;

class RoomController extends Controller
{
    use Responder;

    /**
     * @var RoomRepository
     */
    protected $roomRepository;

    /**
     * View Path
     *
     * @var string
     */
    protected $viewPath = 'room';

    /**
     * Resource Route.
     *
     * @var string
     */
    protected $resourceRoute = 'rooms';

    /**
     * Domain Alias.
     *
     * @var string
     */
    protected $domainAlias = 'schools';


    /**
     * @param RoomRepository $roomRepository
     */
    public function __construct(RoomRepository $roomRepository)
    {
        $this->roomRepository = $roomRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rooms = Room::paginate(5);
        return RoomResource::collection($rooms);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RoomStoreFormRequest $request)
    {
        $room = Room::create($request->all());
        return new RoomResource($room);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Room $room)
    {
        return new RoomResource($room);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Room $room)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(RoomUpdateFormRequest $request, Room $room)
    {
        $room -> update($request->all());

        return new RoomResource($room);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Room $room)
    {
        $room->delete();
        return response(null, Response::HTTP_NO_CONTENT);
    }

}
