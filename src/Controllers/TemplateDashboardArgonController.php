<?php

namespace ConfrariaWeb\TemplateDashboardArgon\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TemplateDashboardArgonController extends Controller
{
    protected $data;

    public function __construct()
    {
        $this->data = [];
    }

    public function index()
    {
        return view('templateDashboardArgon::dashboard.index', $this->data);
    }
}
