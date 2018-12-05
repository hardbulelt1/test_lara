<?php
namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Service\NewsService;

class NewsController extends Controller
{
    private $newsService;

    /**
     * NewsController constructor.
     * @param NewsService $newsService
     */
    public function __construct(NewsService $newsService)
    {
        $this->newsService = $newsService;
    }

    public function index()
    {
        $data = $this->newsService->getList();

        return view('web.news.index',['data' => $data]);
    }

    /**
     * @param int $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show(int $id)
    {
        $data = $this->newsService->getById($id);

        return view('web.news.view',['data' => $data]);
    }
}
