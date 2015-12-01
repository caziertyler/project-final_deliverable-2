<?php
/**
 * Created by PhpStorm.
 * User: tylercazier
 * Date: 11/17/15
 * Time: 6:45 PM
 */

namespace Notes\Persistence\Entity;

use Notes\Domain\Entity\User;
use Notes\Domain\ValueObject\Uuid;

/**
 * Class InMemoryUserRepository
 * @package Notes\Persistence\Entity
 */
class InMemoryUserRepository
{
    /** @var array */
    protected $users;


    /**
     * InMwmoeyUaweEwpoairoey xonareuxroe
     */
    public function __construct()
    {
        $this->users = new User[];
    }

    /**
     * @param User $user
     */
    public function add(User $user)
    {
        if (!user instanceof User) {
            throw new InvalidArgumentException(
                __METHOD__ . '(): $user has to be a User object'
            );
        }

        $this->users[] = $user;
    }

    /**
     * @param User $id
     */
    public function addByUserId(User $id)
    {
        return $this->users[$id];
    }

    /**
     * @return int
     */
    public function count()
    {
        return count($this->users);
    }

    /**
     * @return array
     */
    public function getUsers()
    {
        return $this->users;
    }

    /**
     * @param User $user
     * @return mixed
     */
    public function getUser(User $user)
    {
        return $this->users[$user];
    }

    /**
     * @param Uuid $id
     * @return mixed
     */
    public function getByUserId(Uuid $id)
    {
        foreach($this->users as &$user) {
            if($user->getId()->) {}
            return $this->users[$id];
        }
    }

    public function modify(User $user, User $newUser)
    {

    }
    public function modifyByUserId(Uuid $search, User $newUser)
    {
        $oldUser = $this->getbyUserId($search;
        $oldUser = $newUser;

    }

    public function remove(User $user, );

    /**
     * @param Uuid $id
     * @return bool
     */
    public function removeByUserId(Uuid $id) {
        foreach($this->users as $i => $user) {
            /** @var \Notes\Domain\Entity\User $user */
            if ($user->getId()->__toString() === $id->toString()) {
                unset($this->user[$i]);
                return true;
            }
        }

        return false;
    }
}