<?php
require_once 'vendor/autoload.php';

use App\Models\{Job, Project, Printable};
//use App\Models\Project;
//use App\Models\Printable;

$job1 = new Job('PHP Developer', 'This is an awesone job!!');
$job1->months = 16;

$job2 = new Job('Python Dev', 'This is an awesone job!!');
$job2->months = 24;

$job3 = new Job('', 'This is an awesone job!!');
$job3->months = 32;

$project1 = new Project('Project 1', 'Description 1');

$jobs = [
  $job1,
  $job2,
  $job3
];

$projects = [
  $project1
];

function printElement(Printable $job){
  // Si la visivilidad es falsa sale inmediatamente de la funcion
  if ($job->visible == false) {
    return;
  }

  // Si es true la visivilidad entonces muestra carga los datos
  echo '<li class="work-position">';
    echo '<h5>'. $job->getTitle() .'</h5>';
    echo '<p>'. $job->getDescription() .'</p>';    
    echo '<p>'. $job->getDurationAsString() .'</p>';    
    echo '<strong>Achievements:</strong>';
    echo '<ul>';
      echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
      echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
      echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
    echo '</ul>';
  echo '</li>';
}