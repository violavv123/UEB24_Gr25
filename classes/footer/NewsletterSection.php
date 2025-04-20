<?php

class NewsletterSection extends Section
{
    private string $description;
    private array $socialLinks = [];

    public function __construct(string $title, string $description)
    {
        parent::__construct($title);
        $this->description = $description;
    }

    public function addSocialLink(string $platform, string $url): void
    {
        $this->socialLinks[$platform] = $url;
    }

    public function render(): string
    {
        $html = "<div class=\"newsletter\">
                    <h3 style=\"margin-top: 5px\">{$this->title}</h3>
                    <p>{$this->description}</p>
                    <div class=\"newsletter-form\">
                      <input type=\"email\" placeholder=\"Your email address\" />
                      <button type=\"submit\"><i class=\"fas fa-paper-plane\"></i></button>
                    </div>
                    <div class=\"social-icons\">";
        foreach ($this->socialLinks as $platform => $url) {
            $html .= "<a href=\"{$url}\"><i class=\"fab fa-{$platform}\"></i></a>";
        }
        $html .= "</div></div>";
        return $html;
    }
}

