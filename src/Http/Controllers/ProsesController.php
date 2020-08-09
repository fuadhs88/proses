<?php

namespace Dcat\Admin\Extension\Proses\Http\Controllers;

use Dcat\Admin\Layout\Content;
use Illuminate\Routing\Controller;

class ProsesController extends Controller
{
    public function index(Content $content)
    {
        return $content
            ->title('CCTV Proses')
            ->description('Display CCTV Proses')
            ->body(view('proses::index'));
    }
}
