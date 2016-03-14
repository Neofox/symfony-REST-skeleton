<?php
/**
 * Created by PhpStorm.
 * User: Neofox
 * Date: 11/03/2016
 * Time: 09:38
 */

namespace AppBundle\Services;


use AppBundle\Entity\User;

class UserService
{

    /**
     * @var UserGateway
     */
    private $userGateway;

    /**
     * UserService constructor.
     *
     * @param UserGateway $userGateway
     */
    public function __construct(UserGateway $userGateway)
    {
        $this->userGateway = $userGateway;
    }

    /**
     * Get All Users
     *
     * @return array
     */
    public function fetchUsers()
    {
        $users = $this->userGateway->fetchUsers();

        return $users;

    }

    /**
     * Delete a User
     *
     * @param $user
     */
    public function delete($user)
    {
        $this->userGateway->delete($user);
    }

    /**
     * Create a new User
     *
     * @param $data
     *
     * @return \AppBundle\Entity\User
     * @throws \Exception
     */
    public function create($data)
    {
        if(!empty($data)){

            return $this->userGateway->create($data);
        }else{
            throw new \Exception(sprintf('Arguments are needed to create a User.'));
        }
    }

    /**
     * Update a new User
     *
     * @param $data
     *
     * @return \AppBundle\Entity\User
     * @throws \Exception
     */
    public function update(User $user, $data)
    {
        if(!empty($data)){

            return $this->userGateway->update($user, $data);
        }else{
            throw new \Exception(sprintf('Arguments are needed to create a User.'));
        }
    }
}