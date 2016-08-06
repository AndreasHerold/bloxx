<?php
/**
 * Created by PhpStorm.
 * User: Andi
 * Date: 06.08.2016
 * Time: 16:44
 */

namespace Bloxx\Controller;


class Index extends Abstractcontroller
{

    /**
     *
     */
    public function indexAction()
    {
        return array(
            'blubb' => 'B',
        );
    }
}