<?php
use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../../wp-content/plugins/marjahans-gateway/marjahans-gateway.php';

final class Marjahans_Gateway_Bkash_Test extends TestCase {
    public function test_class_exists() {
        $this->assertTrue(class_exists('Marjahans_Gateway_Bkash'));
    }
}
