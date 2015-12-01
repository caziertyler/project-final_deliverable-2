<?php
/**
 * Created by PhpStorm.
 * User: tylercazier
 * Date: 11/17/15
 * Time: 5:50 PM
 */

namespace Notes\Domain\Entity;


interface UserRepositoryInterface
{
    /**
     * @param \Notes\Domain\Entity\User $user
     * @return mixed
     */
    public function add(User $user);

    /**
     * @param \Notes\Domain\ValueObject $id
     * @return mixed
     */
    public function addByUserId(User $id);

    /**
     * @return int
     */
    public function count();

    /**
     * @return mixed
     */
    public function getAll();

    /**
     * @param \Notes\Domain\Entity\User $ user
     * @return mixed
     */
    public function get(User $user);

    /**
     * @param \Notes\Domain\ValueObject $id
     * @return mixed
     */
    public function getByUserId(User $id);

    /**
     * @param \Notes\Domain\Entity\User $ user
     * @return mixed
     */
    public function modify(User $user);

    /**
     * @param \Notes\Domain\ValueObject $id
     * @return mixed
     */
    public function modifyByUserId(User $id);

    /**
     * @param \Notes\Domain\Entity\User $ user
     * @return mixed
     */
    public function remove(User $user);

    /**
     * @param \Notes\Domain\ValueObject $id
     * @return mixed
     */
    public function removeByUserId(User $id);
}