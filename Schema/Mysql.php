<?php

namespace Kanboard\Plugin\Subtaskdate\Schema;

use PDO;

const VERSION = 1;

function version_1(PDO $pdo)
{
    $pdo->exec("ALTER TABLE `subtasks` ADD COLUMN `begin_date` INT DEFAULT '0'");
    $pdo->exec("ALTER TABLE `subtasks` ADD COLUMN `due_date` INT DEFAULT '0'");
}
