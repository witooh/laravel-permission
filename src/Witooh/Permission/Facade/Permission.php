<?php
/**
 * Created by JetBrains PhpStorm.
 * User: witooh
 * Date: 4/25/13
 * Time: 10:42 AM
 * To change this template use File | Settings | File Templates.
 */

namespace Witooh\Permission\Facade;

use Illuminate\Support\Facades\Facade;

class Permission extends Facade {
    protected static function getFacadeAccessor() { return 'permission'; }
}
