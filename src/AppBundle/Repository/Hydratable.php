<?php
/**
 * Created by PhpStorm.
 * User: Neofox
 * Date: 14/03/2016
 * Time: 14:18
 */

namespace AppBundle\Repository;


trait Hydratable
{

    /**
     * Hydrate an object with data
     *
     * @param       $class
     * @param array $data
     *
     * @return mixed
     * @throws \Exception
     */
    public function hydrate($class, array $data)
    {

        foreach ($data as $property => $value) {

            $method = sprintf('set%s', ucwords($property));

            try{
                $class->$method($value);

            }catch(\Error $t){

                throw new \Exception(sprintf('The method "%s" does not exist. Is "%s" a valid property?', $method, $property));
            }
        }

        return $class;
    }

}