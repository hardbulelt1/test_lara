<?php

namespace App\Service;

use App\Repositories\NewsRepository;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class NewsService
{
    private $newRepository;

    /**
     * NewsService constructor.
     * @param NewsRepository $newsRepository
     */
    public function __construct(NewsRepository $newsRepository)
    {
        $this->newRepository = $newsRepository;
    }

    /**
     * @return \App\Repositories\Collection
     */
    public function getList()
    {
        return $this->newRepository->paginate();
    }

    /**
     * @param Request $request
     */
    public function create(Request $request)
    {
        $this->newRepository->newInstance()->create([
            'title' => $request->get('title'),
            'body' => $request->get('body')
        ]);
    }

    /**
     * @param int $id
     * @return Model
     */
    public function getById(int $id)
    {
        return $this->newRepository->find($id);
    }

    /**
     * @param Request $request
     * @param int $id
     */
    public function update(Request $request, int $id)
    {
        $this->newRepository->updateWithIdAndInput($id,[
            'title' => $request->get('title'),
            'body' => $request->get('body')
        ]);
    }
}
