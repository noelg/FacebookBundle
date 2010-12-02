<?php

namespace Bundle\FacebookBundle\Extension;

use Bundle\FacebookBundle\TokenParser\FacebookTokenParser;


/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien.potencier@symfony-project.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 *
 * @author Fabien Potencier <fabien.potencier@symfony-project.com>
 */
class FacebookExtension extends \Twig_Extension
{
    protected $appId;

    public function __construct($appId)
    {
        $this->appId = $appId;
    }

    public function getAppId()
    {
        return $this->appId;
    }

    /**
     * Returns the token parser instance to add to the existing list.
     *
     * @return array An array of Twig_TokenParser instances
     */
    public function getTokenParsers()
    {
        return array(
            // {% login_button %}
            new FacebookTokenParser(),
        );
    }

    /**
     * Returns the name of the extension.
     *
     * @return string The extension name
     */
    public function getName()
    {
        return 'facebook';
    }
}
