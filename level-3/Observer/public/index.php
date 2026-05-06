<?php

declare(strict_types=1);

require_once __DIR__ . '/../src/Teacher.php';
require_once __DIR__ . '/../src/Moodle.php';
require_once __DIR__ . '/../src/Mentor.php';

$moodleIt = new Moodle();

$ruben = new Mentor("Rubén");
$cristina = new Mentor("Cristina");
$sergi = new Mentor("Sergi");

$moodleIt->addTeacher($ruben);
$moodleIt->addTeacher($cristina);
$moodleIt->addTeacher($sergi);

$moodleIt->uploadTask("Sprint 3 - task - 02");
