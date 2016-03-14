<?php
/**
 * Created by PhpStorm.
 * User: Neofox
 * Date: 11/03/2016
 * Time: 01:08
 */

namespace AppBundle\Controller;


use AppBundle\Entity\User;
use FOS\RestBundle\View\View;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Component\HttpFoundation\Request;

class UserController extends Controller
{

    /**
     * @return array
     */
    public function getUsersAction() : array
    {
        $data = $this->get('service.user')->fetchUsers();

        return ['users' => $data];
    }

    public function postUserAction(Request $request)
    {
        $user = $this->get('service.user')->create($request->request->all());
        return ['user' => $user];
    }

    public function putUserAction(User $user, Request $request)
    {
        $this->get('service.user')->update($user, $request->request->all());
        return ['user' => $user];
    }

    public function deleteUserAction(User $user)
    {
        $this->get('service.user')->delete($user);
        return new View(['code' => 200, 'message' => 'User deleted.']);
    }


    /**
     * @param User $user
     *
     * @return array
     * @ParamConverter("user", class="AppBundle:User")
     */
    public function getUserAction(User $user) : array
    {
        return ['user' => $user];
    }

}