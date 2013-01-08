<?php

/*
 * This file is part of the HWIOAuthBundle package.
 *
 * (c) Hardware.Info <opensource@hardware.info>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace HWI\Bundle\OAuthBundle\Tests\Fixtures;

use FOS\UserBundle\Model\User as BaseUser;

/**
 * User class.
 *
 * @author Alexander <iam.asm89@gmail.com>
 */
class User extends BaseUser
{
    private $githubId;

    public function getUsername()
    {
        return 'foo';
    }

    public function getRoles()
    {
        return array();
    }

    public function getPassword()
    {
        return 'secret';
    }

    public function getSalt()
    {
        return 'my_salt';
    }

    public function eraseCredentials()
    {
    }

    public function getGitHubId()
    {
        return $this->githubId;
    }

    public function setGitHubId($githubId)
    {
        $this->githubId = $githubId;
    }
}