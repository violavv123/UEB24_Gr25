<?php
require_once 'LinksSection.php';

class LinksGroupSection extends Section
{
    private array $sections = [];

    public function __construct()
    {
        parent::__construct('');
    }

    public function addLinksSection(LinksSection $section): void
    {
        $this->sections[] = $section;
    }

    public function render(): string
    {
        $html = '<div class="footer-links-container">';
        foreach ($this->sections as $section) {
            $html .= $section->render();
        }
        $html .= '</div>';
        return $html;
    }
}
?>
