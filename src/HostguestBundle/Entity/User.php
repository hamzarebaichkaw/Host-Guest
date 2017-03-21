<?php
/**
 * Created by PhpStorm.
 * User: chkaw
 * Date: 19/03/2017
 * Time: 01:10
 */

namespace HostguestBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */

    protected $id;

    public function __construct()
    {
        parent::__construct();
        // your own logic
    }
}