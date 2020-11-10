<?php

namespace SitePoint\Converter;
use PHPUnit\Framework\TestCase;

class ConverterTest extends TestCase
/*
{

    public function testSimpleConversion()
    {
        $input = '{"key":"value","key2":"value2"}';
        $output = [
            'key' => 'value',
            'key2' => 'value2'
        ];
        $converter = new \SitePoint\Converter\Converter();
        $this->assertEquals($output, $converter->convertString($input));
    }
    public function testSimpleConversion1()
    {
        $input     = '{"key":"value","key2":"value2","some-array":[1,2,3,4,5]}';
        $output    = [
            'key'        => 'value',
            'key2'       => 'value2',
            'some-array' => [1, 2, 3, 4, 5],
        ];
        $converter = new \SitePoint\Converter\Converter();
        $this->assertEquals($output, $converter->convertString($input));
    }

    public function testMoreComplexConversion()
    {
        $input     = '{"key":"value","key2":"value2","some-array":[1,2,3,4,5],"new-object":{"key":"value","key2":"value2"}}';
        $output    = [
            'key'        => 'value',
            'key2'       => 'value2',
            'some-array' => [1, 2, 3, 4, 5],
            'new-object' => [
                'key'  => 'value',
                'key2' => 'value2',
            ],
        ];
        $converter = new \SitePoint\Converter\Converter();
        $this->assertEquals($output, $converter->convertString($input));
    }

    public function testMostComplexConversion()
    {
        $input     = '[{"key":"value","key2":"value2","some-array":[1,2,3,4,5],"new-object":{"key":"value","key2":"value2"}},{"key":"value","key2":"value2","some-array":[1,2,3,4,5],"new-object":{"key":"value","key2":"value2"}},{"key":"value","key2":"value2","some-array":[1,2,3,4,5],"new-object":{"key":"value","key2":"value2"}}]';
        $output    = [
            [
                'key'        => 'value',
                'key2'       => 'value2',
                'some-array' => [1, 2, 3, 4, 5],
                'new-object' => [
                    'key'  => 'value',
                    'key2' => 'value2',
                ],
            ],
            [
                'key'        => 'value',
                'key2'       => 'value2',
                'some-array' => [1, 2, 3, 4, 5],
                'new-object' => [
                    'key'  => 'value',
                    'key2' => 'value2',
                ],
            ],
            [
                'key'        => 'value',
                'key2'       => 'value2',
                'some-array' => [1, 2, 3, 4, 5],
                'new-object' => [
                    'key'  => 'value',
                    'key2' => 'value2',
                ],
            ],
        ];
        $converter = new \SitePoint\Converter\Converter();
        $this->assertEquals($output, $converter->convertString($input));
    }

}*/

//gore je zakomentirane metode jer dolje pokazujemo kako skratiti kod koristeći data providere (anotacije)

{

    public function conversionSuccessfulProvider()
    {
        return [
            [
                '{"key":"value","key2":"value2"}',
                [
                    'key'  => 'value',
                    'key2' => 'value2',
                ],
            ],

            [
                '{"key":"value","key2":"value2","some-array":[1,2,3,4,5]}',
                [
                    'key'        => 'value',
                    'key2'       => 'value2',
                    'some-array' => [1, 2, 3, 4, 5],
                ],
            ],

            [
                '{"key":"value","key2":"value2","some-array":[1,2,3,4,5],"new-object":{"key":"value","key2":"value2"}}',
                [
                    'key'        => 'value',
                    'key2'       => 'value2',
                    'some-array' => [1, 2, 3, 4, 5],
                    'new-object' => [
                        'key'  => 'value',
                        'key2' => 'value2',
                    ],
                ],
            ],

            [
                '[{"key":"value","key2":"value2","some-array":[1,2,3,4,5],"new-object":{"key":"value","key2":"value2"}},{"key":"value","key2":"value2","some-array":[1,2,3,4,5],"new-object":{"key":"value","key2":"value2"}},{"key":"value","key2":"value2","some-array":[1,2,3,4,5],"new-object":{"key":"value","key2":"value2"}}]',
                [
                    [
                        'key'        => 'value',
                        'key2'       => 'value2',
                        'some-array' => [1, 2, 3, 4, 5],
                        'new-object' => [
                            'key'  => 'value',
                            'key2' => 'value2',
                        ],
                    ],
                    [
                        'key'        => 'value',
                        'key2'       => 'value2',
                        'some-array' => [1, 2, 3, 4, 5],
                        'new-object' => [
                            'key'  => 'value',
                            'key2' => 'value2',
                        ],
                    ],
                    [
                        'key'        => 'value',
                        'key2'       => 'value2',
                        'some-array' => [1, 2, 3, 4, 5],
                        'new-object' => [
                            'key'  => 'value',
                            'key2' => 'value2',
                        ],
                    ],
                ],
            ],

        ];
    }

    /**
     * @param $input
     * @param $output
     * @dataProvider conversionSuccessfulProvider
     */
    public function testStringConversionSuccess($input, $output)
    {
        $converter = new \SitePoint\Converter\Converter();
        $this->assertEquals($output, $converter->convertString($input));
    }
//ovo iznad zakoemtirano je u biti trigger da bi ovo sve radilo na ovaj način, nije običan komentar
}

