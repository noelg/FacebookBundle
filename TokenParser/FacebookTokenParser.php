<?php


namespace Bundle\FacebookBundle\TokenParser;

use Bundle\FacebookBundle\Node\FacebookConnectNode;

/*
 * This file is part of Twig.
 *
 * (c) 2009 Fabien Potencier
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
class FacebookTokenParser extends \Twig_TokenParser
{
    /**
     * Parses a token and returns a node.
     *
     * @param Twig_Token $token A Twig_Token instance
     *
     * @return Twig_NodeInterface A Twig_NodeInterface instance
     */
    public function parse(\Twig_Token $token)
    {
        //$tag = $this->parser->getExpressionParser()->parseExpression();
        $this->parser->getStream()->expect(\Twig_Token::BLOCK_END_TYPE);

        return new FaceBookConnectNode(array(), array(), $token->getLine());
    }

    /**
     * Gets the tag name associated with this token parser.
     *
     * @param string The tag name
     */
    public function getTag()
    {
        return 'facebook_connect_button';
    }
}
