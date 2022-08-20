<?php
namespace app\Repository\User;
use app\Repository\User\IUserRepository;
use app\Models\User;

class ElequentUserRepository implements IUserRepository {

public User $user;
public function __construct(USer $user)
{
    $this->user=$user;
}

public function getAll(){
    return $this->user->all();
}
public function getOne(string $id): User{ 
    return $this->user->find($id);
}
public function removeOne(string $id){ 
    $user= $this->user->find($id);
    $user->delete($id);
}
public function updateOne(string $id , array $args){
    $user= $this->user->find($id);
return $user->update($args);
}


public function  createOne( array $args){
    return $this->user->create($args);
}



}