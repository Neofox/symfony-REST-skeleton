<?php

namespace AppBundle\Repository;
use AppBundle\Entity\User;
use Doctrine\ORM\Query;

/**
 * UserRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class UserRepository extends \Doctrine\ORM\EntityRepository implements HydratableAware
{
    use Hydratable;

    public function delete(User $user)
    {
        $this->_em->remove($user);
        $this->_em->flush();
    }

    /**
     * @param User $user
     * @param      $data
     *
     * @return User
     */
    public function hydrateUser(User $user, $data)
    {
        $user = $this->hydrate($user, $data);
        $this->_em->persist($user);

        return $user;
    }

}
