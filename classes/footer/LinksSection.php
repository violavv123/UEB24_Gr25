<?php

class LinksSection extends Section
{
    public function addLink(string $text, string $href): void
    {
        $this->content[] = ['text' => $text, 'href' => $href];
    }

    public function render(): string
    {
        $html = "<div class=\"footer-links\"><h3>{$this->title}</h3>";
        foreach ($this->content as $link) {
            $html .= "<a href=\"{$link['href']}\">{$link['text']}</a>";
        }
        $html .= "</div>";
        return $html;
    }
}

