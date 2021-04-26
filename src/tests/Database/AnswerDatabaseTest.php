<?php

namespace Tests\Database;

use App\Models\Answer;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Jenssegers\Mongodb\Relations\BelongsTo;
use Tests\TestCase;

class AnswerDatabaseTest extends TestCase
{
    /**
     * @return void
     */
    public function testAnswerDatabaseConnection(): void
    {
        try {
            $result = Answer::all();
            self::assertNotNull($result);
        }catch (\Exception $e){
            self::fail();
        }
    }

    public function testAnswerStructure(): void
    {
        $subject = Answer::all()->random();

        self::assertNotNull($subject->id);
        self::assertNotNull($subject->answer_text);
        self::assertNotNull($subject->question_id);
        self::assertNotNull($subject->user_id);
        self::assertNotNull($subject->score);
        self::assertNotNull($subject->created_at);
    }

    public function testAnswerModelConnections(): void
    {
        $subject = Answer::all()->random();

        self::assertNotNull($subject->question);
        self::assertNotNull($subject->user);

        self::assertInstanceOf(BelongsTo::class, $subject->question());
        self::assertInstanceOf(BelongsTo::class, $subject->user());
    }
}
