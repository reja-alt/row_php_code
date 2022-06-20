<?php
//    class Programmer {
//       private $skills;

//       public function __construct($skills){
//          $this->skills = $skills;
//       }

//       public function totalSkills(){
//          return count($this->skills);
//       }
//    }

//    $createskills = array("PHP", "JQUERY", "AJAX");
//    $p = new Programmer($createskills);

//    echo $p->totalSkills();

class Profile {
    private $language;

    public function setLanguage($language){
       $this->language = $language;
       return $this;
    }
}

$profile = new Profile();
$language = array("Hindi","English","French");

echo "<pre>";
var_dump($profile->setLanguage($language));
echo "</pre>";
