<?php

namespace App\Livewire\Sections;

use Livewire\Component;

class AboutMe extends Component
{

    public $aboutMe;
    public $educations;
    public $experiences;

    public function mount()
    {
        $this->aboutMe = "My full name is Ridha Fahmi Junaidi, usually called Ridha. I am a final year student at Lambung
        Mangkurat
        University (ULM) majoring in Computer Science. I have good adaptability in new environment. I can
        also well
        analyze a problem and solve it as long as it's within my limits. I have a high interest in
        photography,
        programming and data analysis. However, it is possible for me to learn new things.
        ";
        $this->educations = [
            [
                'year' => '2018 - present',
                'eduTitle' => 'Lambung Mangkurat University',
                'eduDesc' => 'Computer Science, Faculty of Mathematics and Natural Sciences'
            ],
            [
                'year' => '2015 - 2018',
                'eduTitle' => 'MAN 2 Model Banjarmasin',
                'eduDesc' => 'Mathematics and Natural Sciences'
            ]
        ];
        $this->experiences = [
            [
                'year' => 'January 2023 - present',
                'eduTitle' => 'Web Developer at Digitaliz YHC',
                'eduDesc' => 'Handled the development of the Hulu Talent website from PT.CDI'
            ],
            [
                'year' => 'Agust 2022 – December 2022',
                'eduTitle' => 'Intern at Digitaliz YHC (MSIB) position Web Developer ',
                'eduDesc' => 'Using Laravel, Tailwind, Bootstrap frameworks to create web applications '
            ],
            [
                'year' => '2 Months',
                'eduTitle' => 'Intern at DISPORABUDPAR Kota Banjarbaru',
                'eduDesc' => 'Create a Geographic Information System for Tourist Destinations in the city of Banjarbaru '
            ]
        ];
    }

    public function render()
    {
        return view('livewire.sections.about-me');
    }
}
