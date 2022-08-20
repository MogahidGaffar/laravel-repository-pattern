<?php

namespace app\Repository\User;

interface IUserRepository{

    public function getAll();
    public function createOne( array $args );
    public function updateOne(string $id, array $args );
    public function getOne(string $id);
    public function removeOne(string $id);



}