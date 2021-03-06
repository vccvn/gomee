<?php

namespace App\Http\ControllersSUB;

use Gomee\Controllers\PRECTRLController;

use Illuminate\Http\Request;
use Gomee\Helpers\Arr;

use App\Repositories\REPF\REPORepository;

class NAMEController extends MASTERController
{
    protected $module = 'MODULE';

    protected $moduleName = 'TITLE';

    protected $flashMode = true;

    /**
     * repository chinh
     *
     * @var REPORepository
     */
    public $repository;
    
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(REPORepository $repository)
    {
        $this->repository = $repository;
        $this->init();
    }

}
