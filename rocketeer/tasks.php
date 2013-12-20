<?php
/**
 * rocketeer/tasks.php
 *
 * @author    Mamoru Otsuka http://madroom-project.blogspot.jp/
 * @copyright 2013 Mamoru Otsuka
 * @license   WTFPL License http://www.wtfpl.net/txt/copying/
 */

// Migrateクラスをカスタムタスクとして登録します
// $ php rocketeer.phar migrate で個別に実行できます
require_once __DIR__.'/tasks/Migrate.php';
Rocketeer\Facades\Rocketeer::add('Migrate');

// deploy後に自動実行されます
// 自動実行したくない場合は書かないで下さい
Rocketeer\Facades\Rocketeer::after('deploy', 'Migrate');
