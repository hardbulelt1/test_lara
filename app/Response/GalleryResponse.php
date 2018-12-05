<?php
namespace App\Response;


class GalleryResponse
{
    /**
     * @param $galleryList
     * @return array
     */
    public static function getData($galleryList)
    {
        $data = [];
        foreach ($galleryList as &$item) {
            $data[] = [
                'path' => '/images/' . $item->path
            ];
        }

        return $data;
    }
}
