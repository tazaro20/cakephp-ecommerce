<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * RequestsFixture
 */
class RequestsFixture extends TestFixture
{
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'user_id' => 1,
                'service_id' => 1,
                'status' => 'Lorem ipsum dolor sit amet',
                'created' => '2024-06-14 14:34:07',
                'modified' => '2024-06-14 14:34:07',
            ],
        ];
        parent::init();
    }
}
