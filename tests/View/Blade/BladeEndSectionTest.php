<?php

namespace Illuminate\Tests\View\Blade;

class BladeEndSectionTest extends AbstractBladeTestCase
{
    public function testStopSectionsAreCompiled()
    {
        $this->assertEquals('<?php $__env->stopSection(); ?>', $this->compiler->compileString('@stop'));
    }
}
