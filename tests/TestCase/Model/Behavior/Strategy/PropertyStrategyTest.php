<?php

namespace PropertyEnum\Test\TestCase\Model\Behavior\Strategy;

use Cake\ORM\Table;
use Cake\TestSuite\TestCase;
use PropertyEnum\Model\Behavior\Strategy\PropertyStrategy;

class PropertyStrategyTest extends TestCase
{
    public $Table;
    public $Strategy;

    /**
     * setUp
     *
     */
    public function setUp(): void
    {
        parent::setUp();
        $this->Table = new Table();
        $this->Table->enums = [
            'status' => [
                'publish' => 'Published',
                'draft' => 'Drafted',
                'archive' => 'Archived',
            ],
        ];
        $this->Strategy = new PropertyStrategy('status', $this->Table);
        $this->Strategy->initialize([
            'errorMessage' => 'The provided value is invalid',
        ]);
    }

    public function tearDown(): void
    {
        parent::tearDown();
        unset($this->Strategy);
    }

    public function testEnum()
    {
        $result = $this->Strategy->enum();
        $expected = [
            'publish' => 'Published',
            'draft' => 'Drafted',
            'archive' => 'Archived',
        ];
        $this->assertEquals($expected, $result);
    }
}
