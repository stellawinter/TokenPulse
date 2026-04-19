<?php
/**
 * Tests for TokenPulse
 */

use PHPUnit\Framework\TestCase;
use Tokenpulse\Tokenpulse;

class TokenpulseTest extends TestCase {
    private Tokenpulse $instance;

    protected function setUp(): void {
        $this->instance = new Tokenpulse(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Tokenpulse::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
