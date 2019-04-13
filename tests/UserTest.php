<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;
require "../src/User.php";
final class UserTest extends TestCase
{
    public function canBeMadeFromAString(): void
    {
        $this->assertInstanceOf(
            User::class,
            User::fromString('drew')
        );
    }

   

    public function testCanBeUsedAsString(): void
    {
        $this->assertEquals(
            'drew',
            User::fromString('drew')
        );
    }
}
