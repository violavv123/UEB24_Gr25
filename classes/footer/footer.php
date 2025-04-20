<?php
require_once './classes/footer/Section.php';
require_once './classes/footer/LogoContactSection.php';
require_once './classes/footer/LinksSection.php';
require_once './classes/footer/NewsletterSection.php';
require_once './classes/footer/LinksGroupSection.php';
require_once './classes/footer/FooterRenderer.php';

$footer = new FooterRenderer();

// Section 1: Logo & Contact
$logoSection = new LogoContactSection(
    'logo.png',
    'Rruga Gazmend Zajmi Nr.47',
    'Prishtina 10000, Kosovo',
    '+383 49 790 117',
    'info@luxuryhomes.com'
);
$footer->addSection($logoSection);

// Sections 2–4: AGENT, CITY LISTS, QUICK LINKS (inside footer-links-container)
$linksGroup = new LinksGroupSection();

$agentLinks = new LinksSection('AGENT');
$agentLinks->addLink('Login', '#');
$agentLinks->addLink('Register', '#');
$linksGroup->addLinksSection($agentLinks);

$cityLinks = new LinksSection('CITY LISTS');
$cityLinks->addLink('Peja', '#');
$cityLinks->addLink('Prishtina', '#');
$cityLinks->addLink('Prizren', '#');
$cityLinks->addLink('Others', '#');
$linksGroup->addLinksSection($cityLinks);

$quickLinks = new LinksSection('QUICK LINKS');
$quickLinks->addLink('Legal', '#');
$quickLinks->addLink('Privacy Policy', '#');
$quickLinks->addLink('Blog', 'indexRudina.php'); // updated from .html
$quickLinks->addLink('Find an Agent', '#');
$linksGroup->addLinksSection($quickLinks);

// Add grouped links as one section
$footer->addSection($linksGroup);

// Section 5: NEWSLETTER
$newsletter = new NewsletterSection(
    'SIGN UP FOR OUR NEWSLETTER',
    'Join our community of savvy real estate enthusiasts.'
);
$newsletter->addSocialLink('facebook-f', 'https://www.facebook.com/');
$newsletter->addSocialLink('instagram', 'https://www.instagram.com/');
$newsletter->addSocialLink('youtube', 'https://www.youtube.com/');
$newsletter->addSocialLink('linkedin-in', 'https://www.linkedin.com/feed/');
$footer->addSection($newsletter);

// Render
echo $footer->render();
?>