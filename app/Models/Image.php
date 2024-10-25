<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

use function Livewire\store;

class Image extends Model
{
    use HasFactory;

    protected $fillable = ['path'];
    // 1-N
    public function article()
    {
        return $this->belongsTo(Article::class);
    }

    public static function getUrlByFilePath($filePath, $w = null, $h = null)
    {
        if ($w && $h) {
            return Storage::url($filePath);
        }
        $path = dirname($filePath);
        $filename = basename($filePath);
        $file = "{$path}/crop_{$w}x{$h}_{$filename}";
        return Storage::url($file);
    }

    public function getUrl($width, $height)
    {
        // Aggiungi la logica per generare l'URL con le dimensioni specificate
        return Storage::url($this->path); // Assicurati che 'path' contenga il percorso corretto
    }
    

    protected function casts(): array
    {
        return [
            'labels' => 'array',
        ];
    }
}
