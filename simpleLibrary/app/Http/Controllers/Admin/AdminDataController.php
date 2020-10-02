<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Author;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class AdminDataController extends Controller
{
    public function authors()
    {
        $author = Author::table('authors')->get();
        return $author->toJson();
        // return $dataTables->of(Author::query())->toJson
    }
}
