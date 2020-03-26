<?php 
namespace OfflineAgency\FattureInCloud;

use Illuminate\Support\Facades\Facade;

class FattureInCloudFacade extends Facade {

    protected static function getFacadeAccessor() { return 'fatture-in-cloud'; }

}