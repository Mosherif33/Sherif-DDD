<?php

namespace App\Domain\User\Http\Controllers;

use App\Infrastructure\Http\AbstractControllers\BaseController as Controller;
use App\Domain\User\Http\Requests\User\UserStoreFormRequest;
use App\Domain\User\Http\Requests\User\UserUpdateFormRequest;
use App\Domain\User\Repositories\Contracts\UserRepository;
use Illuminate\Http\Request;
use MohamedReda\DDD\Traits\Responder;
use App\Domain\User\Entities\Logincontroller;
use App\Domain\User\Http\Resources\User\UserResourceCollection;
use App\Domain\User\Http\Resources\User\UserResource;
use Illuminate\Support\Facades\Auth;

class LogincontrollerController extends Controller
{
    use Responder;

    /**
     * @var UserRepository
     */
    protected $userRepository;

    /**
     * View Path
     *
     * @var string
     */
    protected $viewPath = 'logincontroller';

    /**
     * Resource Route.
     *
     * @var string
     */
    protected $resourceRoute = 'logincontrollers';

    /**
     * Domain Alias.
     *
     * @var string
     */
    protected $domainAlias = 'users';


    /**
     * @param UserRepository $userRepository
     */
    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request){
        $login = $request->validate([
            'email'=> 'required|string',
            'password'=> 'required|string'
        ]);
        if (!Auth::attempt( $login )){
            return response(['message'=> 'invalid Entry']);
        }
        $accessToken = Auth::user()->createToken('authToken')->accessToken;

        return response(['user'=> Auth::user(), 'access_token'=>$accessToken]);
    }
    // public function index(Request $request)
    // {

    // }

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
    public function store(UserStoreFormRequest $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function show(Logincontroller $logincontroller)
    // {

    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function edit(Logincontroller $logincontroller)
    // {

    // }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserUpdateFormRequest $request, $logincontroller)
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
