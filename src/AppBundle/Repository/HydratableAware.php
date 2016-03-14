<?php
/**
 * Created by PhpStorm.
 * User: Neofox
 * Date: 14/03/2016
 * Time: 14:22
 */

namespace AppBundle\Repository;


interface HydratableAware
{
    public function hydrate($class, array $data);
}