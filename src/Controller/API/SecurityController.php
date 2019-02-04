<?php

namespace App\Controller\API;

use HWI\Bundle\OAuthBundle\Security\Http\ResourceOwnerMap;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class SecurityController
{
    protected $resourceOwnerMap;

    public function __construct(ResourceOwnerMap $resourceOwnerMap)
    {
        $this->resourceOwnerMap = $resourceOwnerMap;
    }

    /**
     * @Route("/login/google", name="post_login_google")
     */
    public function postLoginGoogle(Request $request)
    {
        $userInfo = $this->resourceOwnerMap
            ->getResourceOwnerByName('google')
            ->getUserInformation([
                'access_token' => $request->get('token'),
                'token_type' => 'bearer',
            ]);
        var_dump($userInfo);
        var_dump($request->get('token')); exit;
    }

    /**
     * @Route("/login/facebook", name="post_login_facebook")
     */
    public function postLoginFacebook(Request $request)
    {
        $userInfo = $this->resourceOwnerMap
            ->getResourceOwnerByName('facebook')
            ->getUserInformation([
                'access_token' => $request->get('token'),
                'token_type' => 'bearer',
            ]);
        var_dump($userInfo);
        var_dump($request->get('token')); exit;
    }
}
