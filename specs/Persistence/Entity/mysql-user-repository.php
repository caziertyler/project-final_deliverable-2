<?php
/**
 * Created by PhpStorm.
 * User: tylercazier
 * Date: 11/24/15
 * Time: 6:23 PM
 */

describe('Notes\Persistence\Entity\InMemoryUserRepository', function () {
    beforeEach(function () {
        $this->repo = new MysqlUserRepository(new PdoAdapter)$dsn, $username, $password));
        $this->userFactory = new UserFactory();
    });
    describe('->__construct()', function () {
        it('should construct an InmemoryUserRepository object', function () {
            expect($this->repo)->to->be->instanceof(
                'Notes\Persistence\Entity\InMemoryUserRepository'
            );
        });
    });
    describe('->add()', function () {
        it('should add one user to the repository', function () {
            $this->repo->add($this->userFactory->create());

            expect($this->repo->count())->to->equal(1);
        });
    });
    describe('->getByUserId()', function () {
        it('should return a single User object', function () {
            $user = $this->userFactory->create();
            $user->setUsername('Harry');
            $this->repo->getByUserId('Harry');

            $this->repo->add($user);
            $actual = $this->repo->getByUsername('Harry');

            expect($actual)->to->be->instanceof('Notes\Domain\Entity\User');
            expect($actual)->getUsername()->to->equal('Harry');
        });
    });
    public function add(User $user);
    public function addByUserId(User $id);
    public function getAll();
    public function get(User $user);
    public function getByUserId(User $id);
    public function modify(User $user);
    public function modifyByUserId(User $id);
    public function remove(User $user);
    public function removeByUserId(User $id);
});