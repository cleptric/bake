<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         1.2.1
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

namespace Bake\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * BakeAuthors Fixture
 */
class BakeTemplateAuthorsFixture extends TestFixture
{
    /**
     * Avoid overriding AuthorsFixture's table.
     *
     * @var string
     */
    public string $table = 'bake_authors';

    /**
     * records property
     *
     * @var array
     */
    public array $records = [
        ['name' => 'mariano', 'role_id' => 1],
        ['name' => 'nate', 'role_id' => 2],
        ['name' => 'larry', 'role_id' => 2],
        ['name' => 'garrett', 'role_id' => 1],
    ];
}
