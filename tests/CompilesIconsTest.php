<?php

declare(strict_types=1);

namespace AndreiIonita\BladeIconoir\Tests;

class CompilesIconsTest extends TestCase
{
    /** @test */
    public function it_compiles_a_single_anonymous_component()
    {
        $result = svg('iconoir-regular-activity')->toHtml();

        $expected = <<<'SVG'
        <svg width="24" height="24" stroke-width="1.5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M3 12H6L9 3L15 21L18 12H21" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
        SVG;

        $this->assertSame($expected, $result);
    }

    /** @test */
    public function it_can_add_classes_to_icons()
    {
        $result = svg('iconoir-regular-activity', 'w-6 h-6 text-gray-500')->toHtml();

        $expected = <<<'SVG'
        <svg class="w-6 h-6 text-gray-500" width="24" height="24" stroke-width="1.5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M3 12H6L9 3L15 21L18 12H21" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
        SVG;

        $this->assertSame($expected, $result);
    }

    /** @test */
    public function it_can_add_styles_to_icons()
    {
        $result = svg('iconoir-regular-activity', ['style' => 'fill: #F00'])->toHtml();

        $expected = <<<'SVG'
        <svg style="fill: #F00" width="24" height="24" stroke-width="1.5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M3 12H6L9 3L15 21L18 12H21" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
        SVG;

        $this->assertSame($expected, $result);
    }
}
