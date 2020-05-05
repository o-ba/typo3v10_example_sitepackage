<?php

declare(strict_types=1);

namespace Bo\TYPO3v10ExampleSitepackage\UserFunctions\FormEngine;

use TYPO3\CMS\Backend\Form\FormDataProvider\TcaSlug;

class SlugPrefix
{
    public function modify(array $parameters, TcaSlug $reference): string
    {
        return 'my-custom-base-url/';
    }
}
