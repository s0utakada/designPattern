<?php
    /**
     * Created by PhpStorm.
     * User: s_takada
     * Date: 14/05/14
     * Time: 10:40
     */

    require_once 'Employee.php';
    require_once 'Employees.php';
    require_once 'SalesmanIterator.php';

    /**
     * @param $iterator
     */
    function dumpWithForeach($iterator) {

        echo '<ul>';
        foreach($iterator as $employee) {
            printf('<li>%s (%d, %s)</li>', $employee->getName(), $employee->getAge(), $employee->getJob());
        }
        echo '</ul>';
        echo '<hr>';
    }

    $employees = new \Iterator\Employees();

    $employees->add(new \Iterator\Employee('SMITH', 32, 'CLERK'));
    $employees->add(new \Iterator\Employee('ALLEN', 26, 'SALESMAN'));
    $employees->add(new \Iterator\Employee('MARTIN', 50, 'SALESMAN'));
    $employees->add(new \Iterator\Employee('CLARK', 45, 'MANAGER'));
    $employees->add(new \Iterator\Employee('KING', 58, 'PRESIDENT'));

    $iterator = $employees->getIterator();

    echo '<ul>';
    while($iterator->valid()) {
        $employee = $iterator->current();
        printf('<li>%s (%d, %s)</li>', $employee->getName(), $employee->getAge(), $employee->getJob());

        $iterator->next();
    }
    echo '<ul>';
    echo '<hr>';

    dumpWithForeach($iterator);

    dumpWithForeach(new \Iterator\SalesmanIterator($iterator));
