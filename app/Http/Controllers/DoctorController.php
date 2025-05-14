<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DoctorController extends Controller
{
    //
    public function index() {
        $doctors = [
            [
                'name' => 'Aayushi Chokshi Parikh',
                'image' => 'Dr.-Aayushi-Choksi.jpg',
                'html_file' => 'DRAayushi.html',
                'designation' => 'Consultant Emergency Physician and ER In-Charge',
                'qualification' => 'Emergency MRCEM (UK), MBBS, ACLS Instructor (AHA)',
                'social' => [
                    'facebook' => 'https://www.facebook.com/',
                    'github' => 'https://github.com/',
                    'twitter' => 'https://x.com/',
                    'linkedin' => 'https://www.linkedin.com/'
                 ]
                ],

            [
                'name' => 'Abhilash C Chokshi',
                'image' => 'Dr.-Abhilash-Choksi.jpg',
                'html_file' => 'DRAbhilashC.html',
                'designation' => 'Consultant Laparoscopic General Surgeon',
                'qualification' => 'Head of Department of Surgery MORE THAN 33+ YEARS OF EXPERIENCE',
                'social' => [
                    'facebook' => 'https://www.facebook.com/',
                    'github' => 'https://github.com/',
                    'twitter' => 'https://x.com/',
                    'linkedin' => 'https://www.linkedin.com/'
                     ]
            ],
                [
                    'name' => 'Ajay Naik',
                    'image' => 'Dr.-Ajay-Naik-1.jpg',
                    'html_file' => 'DrAjayNaik.html',
                    'designation' => 'Interventional Cardiologist & Cardiac Electrophysiologis',
                    'qualification' => 'Cardiology MD, DM, DNB, FACC, FHRS Cardiac Electrophysiologist',
                    'social' => [
                        'facebook' => 'https://www.facebook.com/',
                        'github' => 'https://github.com/',
                        'twitter' => 'https://x.com/',
                        'linkedin' => 'https://www.linkedin.com/'
                        ]
                ],
                    [
                        'name' => 'Mansi Shah',
                        'image' => 'Dr-Mansi-Shah.jpg',
                        'html_file' => 'DRManshi.html',
                        'designation' => 'consultant dermatologist, specializing in Dermatology, Venereology',
                        'qualification' => 'Venereology, and Leprology from SBKS Medical Institute and Research Centre',
                        'social' => [
                            'facebook' => 'https://www.facebook.com/',
                            'github' => 'https://github.com/',
                            'twitter' => 'https://x.com/',
                            'linkedin' => 'https://www.linkedin.com/'
                             ]
                    ],
                        [
                            'name' => 'Ajit Kukreja',
                            'image' => 'Dr-Ajit-N-Kukreja.jpg.jpg',
                            'html_file' => 'DrAjitKukraja.html',
                            'designation' => 'MBBS, MS (General Surgery), FICS (Surgical Gastroenterology), FIAGES, LL.B',
                            'qualification' => 'Gastrointestinal & Anorectal Surgeon 36 Years of Experience',
                            'social' => [
                                'facebook' => 'https://www.facebook.com/',
                                'github' => 'https://github.com/',
                                'twitter' => 'https://x.com/',
                                'linkedin' => 'https://www.linkedin.com/'
                               ]
                        ],
                            [
                                'name' => 'Ajaysinh V. Devda',
                                'image' => 'Dr.-Ajaysinh-Devda.jpg',
                                'html_file' => 'DRAjayshingDevda.html',
                                'designation' => 'Consultant Orthopaedics, Joint Replacement and Robotic Surgery',
                                'qualification' => 'MBBS, MS Consultant Orthopaedics, Joint Replacement and Robotic Surgery',
                                'social' => [
                                    'facebook' => 'https://www.facebook.com/',
                                    'github' => 'https://github.com/',
                                    'twitter' => 'https://x.com/',
                                    'linkedin' => 'https://www.linkedin.com/'
                                   ]
                            ],
                                [
                                    'name' => 'Rashmi Chovatia',
                                    'image' => 'Dr-Rashmi-Chovatia-2.jpg',
                                    'html_file' => 'DrRashmiChovatia.html',
                                    'designation' => 'Physician',
                                    'qualification' => 'General Medicine MBBS, MD (INTERNAL MEDICINE) Physician Speciality: Diabetes, Hypertension, Fever related Illness',
                                    'social' => [
                                        'facebook' => 'https://www.facebook.com/',
                                        'github' => 'https://github.com/',
                                        'twitter' => 'https://x.com/',
                                        'linkedin' => 'https://www.linkedin.com/'
                                       ]
                                ],
                                    [
                                        'name' => 'Ajay Kumar Jain',
                                        'image' => 'Dr-Ajay-Jain.jpg',
                                        'html_file' => 'DRAjayjain.html',
                                        'designation' => 'Consultant Pulmonologist, Bronchoscopist, Sleep Disorders Specialist & Critical Care Specialist',
                                        'qualification' => 'Pulmonology MBBS, MD (Tuberculosis and Respiratory Diseases)',
                                        'social' => [
                                            'facebook' => 'https://www.facebook.com/',
                                            'github' => 'https://github.com/',
                                            'twitter' => 'https://x.com/',
                                            'linkedin' => 'https://www.linkedin.com/'
                                           ]
                                    ],
                                        [
                                            'name' => 'Amit Chandan',
                                            'image' => 'Dr-Amit-Chandan.jpg',
                                            'html_file' => 'DrAmitChande.html',
                                            'designation' => 'Consultant Cardiothoracic and Vascular Surgeon',
                                            'qualification' => 'Cardiac Surgery BBS, DNB (Cardiothoracic Surgery) Consultant Cardiothoracic and Vascular Surgeon',
                                            'social' => [
                                                'facebook' => 'https://www.facebook.com/',
                                                'github' => 'https://github.com/',
                                                'twitter' => 'https://x.com/',
                                                'linkedin' => 'https://www.linkedin.com/'
                                                ]
                                        ],

            ];
            return view('docter', compact('doctors'));
    }
}
