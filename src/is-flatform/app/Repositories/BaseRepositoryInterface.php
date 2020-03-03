<?php

namespace App\Repositories;

interface BaseRepositoryInterface 
{
 
  public function all($columns = array('*'));

  public function paginate($perPage = 15, $columns = array('*'));

  public function with($relations);

  public function create(array $data);

  public function update(array $data, $id);

  public function delete($id);

  public function find($id, $columns = array('*'));

  public function findBy($field, $value, $columns = array('*'));
  
}