<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bio
{
    public static $bio = [
        [
            'id' => 1,
            'name' => 'Fahmi Nuradi',
            'address' => 'Jalan Cendrawasih utama.',
        ],
        [
            'id' => 2,
            'title' => 'Asep',
            'content' => 'Jalan Cendrawasih Raya',
        ],
        [
            'id' => 3,
            'title' => 'Sutisna',
            'content' => 'Jalan Anggrek',
        ],
    ];

    public static function all()
    {
        return self::$bio;
    }

    // Static method untuk mencari post berdasarkan ID
    public static function find($id)
    {
        return collect(self::$bio)->firstWhere('id', $id);
    }

}
