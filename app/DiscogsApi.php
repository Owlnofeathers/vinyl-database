<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DiscogsApi extends Model
{
    //

    public static function getDiscogsReleases()
    {
        $curl_handle=curl_init();
        curl_setopt($curl_handle, CURLOPT_URL,'https://api.discogs.com/users/owlsays/collection/folders/0/releases?sort=artist');
        curl_setopt($curl_handle, CURLOPT_CONNECTTIMEOUT, 2);
        curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($curl_handle, CURLOPT_USERAGENT, 'vinyl-database');
        $query = curl_exec($curl_handle);
        curl_close($curl_handle);

        return json_decode($query);
    }

    public static function getDiscogsPages($uri)
    {
        $curl_handle=curl_init();
        curl_setopt($curl_handle, CURLOPT_URL, $uri);
        curl_setopt($curl_handle, CURLOPT_CONNECTTIMEOUT, 2);
        curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($curl_handle, CURLOPT_USERAGENT, 'vinyl-database');
        $query = curl_exec($curl_handle);
        curl_close($curl_handle);

        return json_decode($query->pagination);
    }


    public static function getDiscogsRelease($id)
    {
        $curl_handle=curl_init();
        curl_setopt($curl_handle, CURLOPT_URL,'https://api.discogs.com/releases/' . $id);
        curl_setopt($curl_handle, CURLOPT_CONNECTTIMEOUT, 2);
        curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($curl_handle, CURLOPT_USERAGENT, 'vinyl-database');
        $query = curl_exec($curl_handle);
        curl_close($curl_handle);

        return json_decode($query);
    }
}
