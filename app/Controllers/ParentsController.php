<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class ParentsController extends BaseController
{
    private const VIEWS_DIRECTORY = 'parents/';

    public function index()
    {
        $this->dataToView['title'] = 'Gerenciar os responsáveis';

        return view(self::VIEWS_DIRECTORY . 'index', $this->dataToView);
    }
}
