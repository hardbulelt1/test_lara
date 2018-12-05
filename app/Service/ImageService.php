<?php
/**
 * Class ImageService
 * @author: Denis Medvedevskih d.medvedevskih@velosite.ru
 */

namespace App\Service;


use App\Repositories\ImagesRepository;
use Illuminate\Http\Request;

class ImageService
{
    private $imagesRepository;

    /**
     * ImageService constructor.
     * @param ImagesRepository $imagesRepository
     */
    public function __construct(ImagesRepository $imagesRepository)
    {
        $this->imagesRepository = $imagesRepository;
    }

    /**
     * @return \App\Repositories\Collection
     */
    public function getList()
    {
        return $this->imagesRepository->paginate();
    }

    /**
     * @param Request $request
     */
    public function saveFile(Request $request)
    {
        $file = $request->file('file');
        $path = 'images';
        $filename = base64_encode($file->getClientOriginalName()) . "." . explode('/', $file->getMimeType())[1];
        $file->move(public_path($path), $filename);
        $this->imagesRepository->create([
            'path' => $filename
        ]);
    }

    /**
     * @param int $id
     * @return \Illuminate\Database\Eloquent\Model
     */
    public function getById(int $id)
    {
        return $this->imagesRepository->find($id);
    }
}
