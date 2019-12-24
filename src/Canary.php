<?php
/**
 * CanaryPHPConservation (tm) Simple Conservation Managing for php (canaryphp@gmail.com)
 * Copyright (c) Canaryphp Software Foundation, Inc. (canaryphp@gmail.com)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Canaryphp Software Foundation, Inc. (canaryphp@gmail.com)
 * @link      https://github.com/canaryphp/ CanaryPHP(tm) Project
 * @since     1.0
 * @license   https://opensource.org/licenses/mit-license.php MIT License
 */
namespace CanaryPHPConservation;
require_once __DIR__.DIRECTORY_SEPARATOR.'requires.php';
class Canary{
    public function conservation($conservation_id = '',\CanaryPHPConservation\ConservationManager $conservationmanager){
        return new \CanaryPHPConservation\Conservation($conservation_id,$conservationmanager);
    }
}
