<?php
$siteTitle = "Portfolio";
$nom = "SAID";
$email = "saidkeddar0@gmail.com";
$texts = "Je suis un apprenant curieux et motivé. Je découvre le développement web et je pratique en créant des pages simples. Mon objectif est de progresser projet après projet.";
$date = "2026-11-18";

$navigation = [
    "#a-propos" => "À propos",
    "#projet"   => "Mes projets",
    "#contact"  => "Contact"
];

$projets = [
    [
        "titre" => "Portfolio",
        "description" => "Mon site personnel pour présenter mes projets et mes compétences.",
        "image" => "https://images.unsplash.com/photo-1515879218367-8466d910aaa4?w=700&h=400&fit=crop",
        "tech" => "HTML · PHP",
    ],
    [
        "titre" => "Game",
        "description" => "Un petit jeu réalisé pour m'entraîner pendant ma formation.",
        "image" => "https://images.unsplash.com/photo-1498050108023-c5249f4df085?w=700&h=400&fit=crop",
        "tech" => "HTML · CSS",
    ],
    [
        "titre" => "Sanaa Market",
        "description" => "Une page de présentation pour une plateforme de coopératives artisanales.",
        "image" => "https://images.unsplash.com/photo-1518770660439-4636190af475?w=700&h=400&fit=crop",
        "tech" => "HTML · CSS",
    ]
];

require "index-template.php";