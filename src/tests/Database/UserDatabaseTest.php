<?php

namespace Tests\Database;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Jenssegers\Mongodb\Relations\BelongsTo;
use Jenssegers\Mongodb\Relations\HasMany;
use Tests\TestCase;

class UserDatabaseTest extends TestCase
{
    /**
     * @return void
     */
    public function testUserDatabaseConnection(): void
    {
        try {
            $result = User::all();
            self::assertNotNull($result);
        }catch (\Exception $e){
            self::fail();
        }
    }

    public function testUserStructure(): void
    {
        $subject = User::all()->random();

        self::assertNotNull($subject->id);
        self::assertNotNull($subject->username);
        self::assertNotNull($subject->email);
        self::assertNotNull($subject->password);
        self::assertNotNull($subject->score);
        self::assertNotNull($subject->updated_at);
        self::assertNotNull($subject->created_at);
    }

    public function testUserModelConnections(){
        $subject = User::all()->random();

        self::assertNotNull($subject->answers);
        self::assertNotNull($subject->questions);

        self::assertInstanceOf(HasMany::class, $subject->answers());
        self::assertInstanceOf(HasMany::class, $subject->questions());
    }
}
