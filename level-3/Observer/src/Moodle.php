<?php

declare(strict_types=1);

class Moodle
{
    private $teachers = [];

    public function addTeacher(Teacher $mentor)
    {
        $this->teachers[] = $mentor;
    }

    private function notifyTeachers(string $taskName): void
    {
        foreach ($this->teachers as $mentor) {
            $mentor->update($taskName);
        }
    }

    public function uploadTask(string $taskName): void
    {
        echo "Uploaded new exercise: {$taskName} . \n";
        $this->notifyTeachers($taskName);
    }
}
