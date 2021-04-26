<?php

namespace Tests\Database;

use App\Models\Topic;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Jenssegers\Mongodb\Relations\BelongsTo;
use Jenssegers\Mongodb\Relations\HasMany;
use Tests\TestCase;

class TopicDatabaseTest extends TestCase
{
    /**
     * @return void
     */
    public function testTopicDatabaseConnection(): void
    {
        try {
            $result = Topic::all();
            self::assertNotNull($result);
        }catch (\Exception $e){
            self::fail();
        }
    }

    public function testTopicStructure(): void
    {
        $subject = Topic::all()->random();

        self::assertNotNull($subject->id);
        self::assertNotNull($subject->name);
        self::assertNotNull($subject->updated_at);
        self::assertNotNull($subject->created_at);
    }

    public function testTopicModelConnections(){
        $subject = Topic::all()->random();

        self::assertNotNull($subject->questions);

        self::assertInstanceOf(HasMany::class, $subject->questions());
    }
}
