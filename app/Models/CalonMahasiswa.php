<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class CalonMahasiswa extends Model
{
    use HasFactory;
    use Sortable;

    protected $guarded = ['id'];

    public $sortable = [
        'id',
        'nama',
        'asal_sekolah',
        'nilai_test',
        'jurusan_id',
    ];

    public function jurusan()
    {
        return $this->belongsTo(Jurusan::class);
    }
}
