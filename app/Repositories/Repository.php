<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;

abstract class Repository
{
    /**
     * @var Model
     */
	protected $model;

    /**
     * Repository constructor.
     * @param $model
     */
	public function __construct($model)
	{
		$this->model = $model;
	}

	/**
	 * Create a new instance of the given model.
	 *
	 * @param array $attributes
	 * @return static
	 */
	public function newInstance(array $attributes = [])
	{
		if (!isset($attributes['rank'])) {
			$attributes['rank'] = 0;
		}

		return $this->model->newInstance($attributes);
	}

    /**
     * @param array $columns
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
	public function all($columns = ['*'])
	{
		return $this->model->all($columns);
	}

	/**
	 * Get all of the models from the database per page.
	 *
	 * @param int $perpage
	 * @return Collection
	 */
	public function paginate($perpage = 20)
	{
		return $this->model->paginate($perpage);
	}

	/**
	 * Create a new record in the database.
	 *
	 * @param array $attributes
	 * @return void
	 */
	public function create(array $attributes)
	{
		return $this->model->create($attributes);
	}

	/**
	 * Search by id.
	 *
	 * @param int $id
	 * @param array $columns
	 * @return Model
	 */
	public function find($id, $columns = ['*'])
	{
		return $this->model->findOrFail($id, $columns);
	}

	/**
	 * Update the model in the database.
	 *
	 * @param int $id
	 * @param array $input
	 * @return bool
	 */
	public function updateWithIdAndInput($id, array $input)
	{
		$entity = $this->model->find($id);
		return $entity->update($input);
	}

    /**
     * @param $id
     */
	public function destroy($id)
	{
		 $this->model->destroy($id);
	}
}
