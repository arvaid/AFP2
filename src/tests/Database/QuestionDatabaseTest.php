<?php

namespace Tests\Database;

use App\Models\Question;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Jenssegers\Mongodb\Relations\BelongsTo;
use Jenssegers\Mongodb\Relations\HasMany;
use Tests\TestCase;

class QuestionDatabaseTest extends TestCase
{
    /**
     * @return void
     */
    public function testQuestionDatabaseConnection(): void
    {
        try {
            $result = Question::all();
            self::assertNotNull($result);
        }catch (\Exception $e){
            self::fail();
        }
    }

    public function testQuestionStructure(): void
    {
        $subject = Question::all()->random();

        self::assertNotNull($subject->id);
        self::assertNotNull($subject->question_title);
        self::assertNotNull($subject->question_text);
        self::assertNotNull($subject->user_id);
        self::assertNotNull($subject->topic_id);
        self::assertNotNull($subject->created_at);
    }

    public function testQuestionModelConnections(): void
    {
        $subject = Question::all()->random();

        self::assertNotNull($subject->topic);
        self::assertNotNull($subject->user);
        self::assertNotNull($subject->answers);

        self::assertInstanceOf(BelongsTo::class, $subject->topic());
        self::assertInstanceOf(BelongsTo::class, $subject->user());
        self::assertInstanceOf(HasMany::class, $subject->answers());
    }
}
