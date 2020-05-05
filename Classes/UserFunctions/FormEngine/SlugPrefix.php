<?php

declare(strict_types=1);

namespace Bo\TYPO3v10ExampleSitepackage\UserFunctions\FormEngine;

use TYPO3\CMS\Backend\Form\FormDataProvider\TcaSlug;

/**
 * Use custom base url (slug prefix) for slug fields
 *
 * @author Oliver Bartsch <bo@cedev.de>
 */
class SlugPrefix
{
    public function modify(array $parameters, TcaSlug $reference): string
    {
        return 'my-custom-base-url/';
    }
}
