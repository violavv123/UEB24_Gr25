<?php
abstract class Section
{
    protected string $title;
    protected array $content = [];

    public function __construct(string $title = '')
    {
        $this->title = $title;
    }

    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setContent(array $content): void
    {
        $this->content = $content;
    }

    public function getContent(): array
    {
        return $this->content;
    }

    abstract public function render(): string;
}
