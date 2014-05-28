<?php
    /**
     * Created by PhpStorm.
     * User: s_takada
     * Date: 14/05/09
     * Time: 14:48
     */

    namespace Adapter;

    require_once 'DisplaySourceFileImpl.php';

    $show_file = new DisplaySourceFileImpl('./ShowFile.php');

    $show_file->display();
