<?php

class FooterRenderer
{
    private array $sections = [];

    public function addSection(Section $section): void
    {
        $this->sections[] = $section;
    }

    public function render(): string
    {
        $html = '<footer class="responsive-footer"><div class="footer-container">';
        foreach ($this->sections as $section) {
            $html .= $section->render();
        }
        $html .= '</div></footer>';
        return $html;
    }
}

