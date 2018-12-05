<?php

namespace App\Http\Controllers\Web;


use App\Response\GalleryResponse;
use App\Service\ImageService;

class GalleryController
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
        $data = GalleryResponse::getData($this->imageService->getList());
        return view('web.gallery.index', ['data' => $data]);
    }
}
