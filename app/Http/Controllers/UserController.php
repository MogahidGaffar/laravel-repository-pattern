<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserController\CreateOneRequest;
use App\Http\Requests\UserController\UpdateOneRequest;
use Illuminate\Http\Request;
use app\Repository\User\ElequentUserRepository;
use app\Repository\User\IUserRepository;
use Illuminate\Support\Facades\Redirect;

class UserController extends Controller
{ 
    public IUserRepository $userRepository;

  public function  __construct( IUserRepository $userRepository){
    $this->userRepository=$userRepository;
  }


  public function getAllpage (){
    $users=$this->userRepository->getall();
return view('users\allUsers',['users'=>$users]);
  }

  public function getCreatepage(){
    return view('users\createUser');
  }


  public function getEditPage(string $userId){
    $user=$this->userRepository->getOne($userId);
    return view('users.EditUser',['user'=>$user]);
  }

  public function createOne(CreateOneRequest $request){
    $this->userRepository->createOne($request->all());
return Redirect::route('users.getAllpage');
   }
  public function updateOne($userId,UpdateOneRequest $request){
    $this->userRepository->updateOne($userId,$request->all());
    return Redirect::route('users.getAllpage');
  }
  public function removeOne($userId){
    $this->userRepository->removeOne($userId);
  }


}
