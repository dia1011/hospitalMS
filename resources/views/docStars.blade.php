@extends('layouts.app')
@section('content')
<head>

</head>

    <div class="container mx-auto py-10">
    <h1 class="text-3xl font-semibold text-center text-gray-800 mb-10" style="padding-top:2rem;">Famous Indian Doctors</h1>

<section>
    @php
        $doctors = [
            [
                'name' => 'Dr. Padmavati Sivaramakrishna',
                'description' => "Dr. S.I. Padmavati, India's first female cardiologist, pioneered cardiology in India by establishing the first cardiac clinic and cath lab and founding the National Heart Institute.",
                'image' => 'images/Drpadmavati.jpg',
                'link' => 'https://en.wikipedia.org/wiki/S._I._Padmavati',
            ],
            [
                'name' => 'Dr. M.S. Swaminathan',
                'description'=> 'Dr. M.S. Swaminathan is a renowned agricultural scientist, often referred to as the father of the Green Revolution in India, which revolutionized farming in the country.',  
                'image' => 'images/DrSwaminaathan.jpeg',
                'link' => 'https://en.wikipedia.org/wiki/M._S._Swaminathan',
            ],
            [
                'name' => 'Dr. Vikram Patel',
                'description'=> 'Dr. Vikram Patel is a global leader in mental health research and a professor of global health. He is known for his work on improving mental healthcare in low-income countries.',
                'image' => 'images/DrVikramPatel.jpg',
                'link' => 'https://en.wikipedia.org/wiki/Vikram_Patel',
            ],
            [
                'name' => 'Dr. Nandini Mundkur',
                'description'=> "Nandini Mundkur is a highly regarded figure in child development. She is a fellow of the UK's Royal College and an alumna of the Ashoka Fellowship.",
                'image' => 'images/DrNandini.jpg',
                'link' => 'https://en.wikipedia.org/wiki/Nandini_Mundkur',
            ],
            [
                'name' => 'Dr. Naresh Trehan',
                'description'=> 'Trehan was the founder, director and chief cardiovascular surgeon of Escorts Heart Institute and Research Center (EHIRC), which opened on Okhla Road, Delhi in 1988.',
                'image' => 'images/drNareshtehan.jpg',
                'link' => 'https://en.wikipedia.org/wiki/Naresh_Trehan',
            ],
            [
                'name' => 'Dr. Devi Prasad Shetty',
                'description'=> 'Dr. Devi Prasad Shetty, a renowned Indian cardiac surgeon, is known for making quality healthcare accessible and affordable. He founded Narayana Health, a leading hospital chain in India.',
                'image' => 'images/Devi_Shetty.jpg',
                'link' => 'https://en.wikipedia.org/wiki/Devi_Shetty',
            ],
        ];
    @endphp

        <div class="main_class">
        <!-- <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8"> -->
         @foreach($doctors as $doctor)
        <div class="doctor-card">
            <img src="{{ $doctor['image'] }}" alt="{{ $doctor['name'] }}">
            <h3>{{ $doctor['name'] }}</h3>
            <p>{{ $doctor['description'] }}</p>
            <a href="{{ $doctor['link'] }}" target="_blank">Learn More</a>
        </div>
    @endforeach
        </div>
    <!-- </div> -->
    </div>
</section>
@endsection
