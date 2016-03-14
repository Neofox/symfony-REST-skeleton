<?php
/**
 * Created by PhpStorm.
 * User: Neofox
 * Date: 11/03/2016
 * Time: 11:15
 */

namespace AppBundle\Services;


use AppBundle\Entity\User;
use AppBundle\Repository\UserRepository;
use Doctrine\ORM\EntityManager;

class UserGateway
{

    /**
     * @var UserRepository
     */
    private $userRepository;
    /**
     * @var EntityManager
     */
    private $entityManager;

    /**
     * UserGateway constructor.
     *
     * @param UserRepository $userRepository
     * @param EntityManager  $entityManager
     */
    public function __construct(UserRepository $userRepository, EntityManager $entityManager)
    {
        $this->userRepository = $userRepository;
        $this->entityManager = $entityManager;
    }

    /**
     * @return array
     */
    public function fetchUsers() : array
    {
        return $this->userRepository->findAll();
    }

    public function delete(User $user)
    {
        $this->userRepository->delete($user);
    }

    /**
     * @param $data
     *
     * @return User
     */
    public function create($data) : User
    {
        $user = new User();
        $this->userRepository->hydrateUser($user, $data);
        $this->entityManager->flush($user);

        return $user;
    }

    /**
     * @param User $user
     * @param      $data
     *
     * @return User
     */
    public function update(User $user, $data) : User
    {
        $this->userRepository->hydrateUser($user, $data);
        $this->entityManager->flush($user);

        return $user;
    }
}