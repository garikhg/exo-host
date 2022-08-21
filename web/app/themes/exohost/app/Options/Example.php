<?php

namespace App\Options;

use Log1x\AcfComposer\Options as Field;
use StoutLogic\AcfBuilder\FieldsBuilder;

class Example extends Field
{
    /**
     * The option page menu name.
     *
     * @var string
     */
    public $name = 'Example';

    /**
     * The option page document title.
     *
     * @var string
     */
    public $title = 'Example | Options';

    /**
     * The option page field group.
     *
     * @return array
     */
    public function fields()
    {
        $example = new FieldsBuilder('example');
        $config = (object) [
            'ui' => 1,
            'wrapper' => ['width' => 30],
        ];

        $example
            ->addRepeater('items')
                ->addText('item')

                ->addUrl('url', ['label' => 'URL', 'wrapper' => $config->wrapper])
            ->endRepeater();

        return $example->build();
    }
}
