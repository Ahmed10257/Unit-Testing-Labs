<?php
use PHPUnit\Framework\TestCase;
use PHPUnit\Metadata\CoversClass;
use PHPUnit\Metadata\Covers;
require __DIR__ . '/../src/User.php';

#[CoversClass(User::class)]
class UserTest extends TestCase {
    private $user;
    protected function setUp(): void {
        $this->user = new User('Initial Name', 'initial@example.com');
    }
    #[Covers('User::name')]
    public function testSetName() {
        $this->user->name('New Name');
        $this->assertEquals('New Name', $this->user->name());
    }
    #[Covers('User::email')]
    public function testGetEmail() {
        $this->assertEquals('initial@example.com', $this->user->email());
    }
    #[Covers('User::email')]
    public function testSetEmail() {
        $this->user->email('new@example.com');
        $this->assertEquals('new@example.com', $this->user->email());
    }
    #[Covers('User::name')]
    public function testGetName() {
        $this->assertEquals('Initial Name', $this->user->name());
    }
}