<?php

namespace App\Domain\School\Http\Controllers;

use App\Infrastructure\Http\AbstractControllers\BaseController as Controller;
use App\Domain\School\Http\Requests\Room\RoomStoreFormRequest;
use App\Domain\School\Http\Requests\Room\RoomUpdateFormRequest;
use App\Domain\School\Repositories\Contracts\RoomRepository;
use Illuminate\Http\Request;
use MohamedReda\DDD\Traits\Responder;
use App\Domain\School\Entities\Product;
use App\Domain\School\Http\Resources\Product\ProductResource;
use App\Domain\School\Http\Resources\Room\RoomResourceCollection;
use App\Domain\School\Http\Resources\Room\RoomResource;

class ProductController extends Controller
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
    protected $viewPath = 'product';

    /**
     * Resource Route.
     *
     * @var string
     */
    protected $resourceRoute = 'products';

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
        $products = Product::with('room')->paginate(5);

        // return $products;
        return ProductResource::collection($products);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = Product::create($request->all());
        return new ProductResource($product);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return new ProductResource($product);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(RoomUpdateFormRequest $request, $product)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
    }

}
