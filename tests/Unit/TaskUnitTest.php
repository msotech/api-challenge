<?php

namespace Tests\Unit;

use App\Models\Task;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class TaskUnitTest extends TestCase
{
    use RefreshDatabase;

    public function test_task_model_has_correct_attributes()
    {
        $task = Task::factory()->make([
            'title' => 'Test Task',
            'description' => 'This is a test description',
            'status' => 'pending',
        ]);

        $this->assertEquals('Test Task', $task->title);
        $this->assertEquals('This is a test description', $task->description);
        $this->assertEquals('pending', $task->status);
    }
}

