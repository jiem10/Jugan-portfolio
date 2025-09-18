<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller

{

    public function index()

    {

        // Your portfolio data - you can modify these details

        $portfolio = [

            'name' => 'John Mark B. Jugan',

            'title' => 'Portfolio',

            'email' => 'jugan.johnmark.bandico@gmail.com',

            'phone' => '+639301691327',

            'location' => 'quezon city',

            'bio' => 'As an experienced IT professional, I specialize in designing, implementing, and managing IT infrastructure for businesses of all sizes. With a strong background in system administration, cloud computing, and cybersecurity, I work to ensure that technology systems are secure, scalable, and optimized for performance.',

            'profile_image' => 'https://via.placeholder.com/300x300?text=Your+Photo',

            'skills' => ['Laravel', 'PHP', 'JavaScript', 'HTML5', 'CSS3'],

            'projects' => ['Laravel', 'PHP', 'JavaScript', 'HTML5', 'CSS3'], // Project data

            'experience' => ['Laravel', 'PHP', 'JavaScript', 'HTML5', 'CSS3'], // Experience data

            'education' =>['Laravel', 'PHP', 'JavaScript', 'HTML5', 'CSS3'],// Education data

            'social_links' => ['Laravel', 'PHP', 'JavaScript', 'HTML5', 'CSS3']// Social media links

        ];

        return view('portfolio.index', compact('portfolio'));

    }

}