<?php
namespace App\Response;

use Illuminate\Database\Eloquent\Model;

class NewsResponse
{
    public static function update(Model $data)
    {
        return [
            'data' => $data,
            'method' => 'PUT',
            'action' => '/admin/news/' . $data->getAttribute('id')
        ];
    }

    public static function create()
    {
        return [
            'method' => 'POST',
            'action' => '/admin/news/'
        ];
    }
}
