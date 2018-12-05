<?php

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Service\ImageService;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    private $imageService;

    /**
     * GalleryController constructor.
     * @param ImageService $imageService
     */
    public function __construct(ImageService $imageService)
    {
        $this->imageService = $imageService;
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $data = $this->imageService->getList();

        return view('admin.gallery.index', ['data' => $data]);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $this->imageService->saveFile($request);

        return redirect('admin/gallery');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('admin.gallery.create');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy(int $id)
    {
        $image = $this->imageService->getById($id);
        app(Filesystem::class)->delete(public_path('images/' . $image->path));
        $image->delete();

        return redirect('admin/gallery');
    }
}
