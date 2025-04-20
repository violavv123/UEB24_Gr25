<?php

class LogoContactSection extends Section
{
    private string $logoPath;
    private string $address;
    private string $city;
    private string $phone;
    private string $email;

    public function __construct(string $logoPath, string $address, string $city, string $phone, string $email)
    {
        parent::__construct();
        $this->logoPath = $logoPath;
        $this->address = $address;
        $this->city = $city;
        $this->phone = $phone;
        $this->email = $email;
    }

    public function render(): string
    {
        return <<<HTML
<div class="logo-contact">
  <img src="{$this->logoPath}" alt="Luxury Homes Logo" class="footer-logo" />
  <address>
    <p><i class="fas fa-map-marker-alt"></i> {$this->address}</p>
    <p style="padding-left: 15px">{$this->city}</p>
    <p><i class="fas fa-phone"></i> {$this->phone}</p>
    <p><i class="fas fa-envelope"></i> {$this->email}</p>
  </address>
</div>
HTML;
    }
}

