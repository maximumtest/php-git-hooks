<?php

namespace PhpGitHooks\Module\Git\Contract\Response;

final class BadJobLogoResponse
{
    /**
     * @param string $message
     *
     * @return string
     */
    public static function paint($message)
    {
        return sprintf("\e[1;31m
                @@@@@@@@@@@@@@@
             @@@@@@@@@@@@@@@@@@@@
           @@@@@@@@  @@@@@  @@@@@@@
          @@@@@@@@@@  @@@  @@@@@@@@@@
         @@@@@@@@@@@@  @  @@@@@@@@@@@@
        @@@@@@@@@@@  @@@@@  @@@@@@@@@@@
       @@@@@@@@@@@@  @@@@@  @@@@@@@@@@@@
       @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
       @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
        @@@@@@@@@@@@       @@@@@@@@@@@@
         @@@@@@@@@@  @@@@@  @@@@@@@@@@
          @@@@@@@@  @@@@@@@  @@@@@@@@
           @@@@@@@@@@@@@@@@@@@@@@@@@
             @@@@@@@@@@@@@@@@@@@@@
                @@@@@@@@@@@@@@@
        \n
           %s    [0;0m\n", $message);
    }
}
