<?php

namespace PropertyEnum\Test\TestCase\Model\Behavior\Strategy;

use PropertyEnum\Model\Behavior\Strategy\PropertyStrategy;
use Cake\ORM\Table;
use Cake\TestSuite\TestCase;

class PropertyStrategyTest extends TestCase
{
    public $Table;
    public $Strategy;

    /**
     * setUp
     *
     */
    public function setUp(){
        parent::setUp();
        $this->Table = new Table();
        $this->Table->enum = [
            'status' => [
                'publish' => 'Published',
                'draft' => 'Drafted',
                'archive' => 'Archived'
            ],
        ];
        $this->Strategy = new PropertyStrategy('status', $this->Table);
        $this->Strategy->initialize();
    }

    public function tearDown()
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
            'archive' => 'Archived'
        ];
        $this->assertEquals($expected, $result);
    }
}
