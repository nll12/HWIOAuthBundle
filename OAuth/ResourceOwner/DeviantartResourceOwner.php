<?php

/*
 * This file is part of the HWIOAuthBundle package.
 *
 * (c) Hardware.Info <opensource@hardware.info>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace HWI\Bundle\OAuthBundle\OAuth\ResourceOwner;

/**
 * DeviantartResourceOwner
 *
 * @author Joseph Bielawski <stloyd@gmail.com>
 */
class DeviantartResourceOwner extends GenericOAuth2ResourceOwner
{
    /**
     * {@inheritDoc}
     */
    protected $options = array(
        'authorization_url'   => 'https://www.deviantart.com/oauth2/draft15/authorize',
        'access_token_url'    => 'https://www.deviantart.com/oauth2/draft15/token',
        'infos_url'           => 'https://www.deviantart.com/api/draft15/user/whoami',
    );

    /**
     * {@inheritDoc}
     */
    protected $paths = array(
        'identifier'     => 'username',
        'nickname'       => 'username',
        'profilepicture' => 'usericonurl',
    );
}
