<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Footer;
use App\Models\Kategori;
use App\Models\Like;
use App\Models\Logo;
use App\Models\Post;
use App\Models\Rekomendasi;
use App\Models\Tag;
use App\Models\Tentang;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Collection;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\DB;

class ArtikelController extends Controller
{
    public function __construct()
    {
        $this->footer = Footer::select('konten')->first();
    }

    public function index()
    {
        return view('home/index');
    }
}
