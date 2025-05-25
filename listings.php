<?php

class Property {
    public $id;
    public $title;
    public $price;
    public $priceDisplay;
    public $image;
    public $details;

    public function __construct($title, $price, $priceDisplay, $image, $details) {
        $this->title        = $title;
        $this->price        = $price;
        $this->priceDisplay = $priceDisplay;
        $this->image        = $image;
        $this->details      = $details;
    }

    public function renderExtras() {
        return '';
    }
    
    public function displayCard($isFavorite = false): string
    {
        $heart = $isFavorite ? '❤️' : '♡';
        return "
    <div class='property-card'>
        <img src='{$this->image}' alt='Property Image'>
        <div class='property-details'>
            <h3>{$this->title}</h3>
            <p class='price'>{$this->priceDisplay}</p>
            <p>{$this->details}</p>
            {$this->renderExtras()}
            <div class='card-actions'>
                <button class='view-details'>View Details</button>
              <button type='button' class='favorite-btn' data-id='{$this->id}'>
    {$heart}
</button>
            </div>
        </div>
    </div>
    ";
    }
}

class House extends Property {
    public $yardSize;

    public function __construct($title, $price, $priceDisplay, $image, $details, $yardSize = null) {
        parent::__construct($title, $price, $priceDisplay, $image, $details);
        $this->yardSize = $yardSize;
    }

    public function renderExtras() {
        if ($this->yardSize) {
            return "<p>Yard Size: {$this->yardSize} m²</p>";
        }
        return '';
    }
}

class Apartment extends Property {
    public $floor;

    public function __construct($title, $price, $priceDisplay, $image, $details, $floor = null) {
        parent::__construct($title, $price, $priceDisplay, $image, $details);
        $this->floor = $floor;
    }

    public function renderExtras() {
        if ($this->floor) {
            return "<p>Floor: {$this->floor}</p>";
        }
        return '';
    }
}

function updatePrice(&$property, $newPrice) {
    $property->price = $newPrice;
    $property->priceDisplay = "€" . number_format($newPrice, 0, '.', ',');
}

function emphasizeTitle(&$property) {
    $property->title = strtoupper($property->title);
}

function &getCheapestListing(&$listings) {
    $min = null;
    foreach ($listings as &$property) {
        if ($min === null || $property->price < $min->price) {
            $min = &$property;
        }
    }
    return $min;
}

function createProperty(&$data) { 
    if (stripos($data['title'], 'Apartment') !== false) {
        $floor = $data['floor'] ?? null;
        return new Apartment(
            $data['title'], 
            $data['price'], 
            $data['priceDisplay'], 
            $data['image'], 
            $data['details'], 
            $floor
        );
    }

    $yard = $data['yardSize'] ?? null;
    return new House(
        $data['title'],
        $data['price'], 
        $data['priceDisplay'], 
        $data['image'], 
        $data['details'], 
        $yard
    );
}

// listings se pari te ruajtura ne array
$rawListings = [
    [
      "title"        => "Modern House in Prizren",
      "price"        => 450000,
      "priceDisplay" => "€450,000",
      "image"        => "https://images.pexels.com/photos/259588/pexels-photo-259588.jpeg",
      "details"      => "5 Beds | 3 Baths | 240m²"
    ],
    [
      "title"        => "Luxury Apartment in Prishtina",
      "price"        => 750000,
      "priceDisplay" => "€750,000",
      "image"        => "https://images.pexels.com/photos/1438832/pexels-photo-1438832.jpeg",
      "details"      => "6 Beds | 4 Baths | 300m²"
    ],
    [
      "title"        => "Charming House in Gjilan",
      "price"        => 600000,
      "priceDisplay" => "€600,000",
      "image"        => "https://images.pexels.com/photos/1396132/pexels-photo-1396132.jpeg",
      "details"      => "3 Beds | 2 Baths | 120m²"
    ],
    [
      "title"        => "House in Prishtina",
      "price"        => 600,
      "priceDisplay" => "€600/mo",
      "image"        => "https://images.pexels.com/photos/208736/pexels-photo-208736.jpeg",
      "details"      => "4 Beds | 2 Baths | 200m²"
    ],
    [
      "title"        => "Apartment in Prishtina",
      "price"        => 350,
      "priceDisplay" => "€350/mo",
      "image"        => "https://images.pexels.com/photos/129494/pexels-photo-129494.jpeg",
      "details"      => "2 Beds | 1 Bath | 70m²"
    ],
    [
      "title"        => "Charming House in Peja",
      "price"        => 450000,
      "priceDisplay" => "€450,000",
      "image"        => "https://images.pexels.com/photos/277667/pexels-photo-277667.jpeg",
      "details"      => "5 Beds | 4 Baths | 300m²"
    ],
    [
      "title"        => "Cozy Apartment in Peja",
      "price"        => 500,
      "priceDisplay" => "€500/mo",
      "image"        => "https://images.pexels.com/photos/1918291/pexels-photo-1918291.jpeg",
      "details"      => "3 Beds | 2 Baths | 110m²"
    ],
    [
      "title"        => "Beautiful House in Mitrovica",
      "price"        => 350000,
      "priceDisplay" => "€350,000",
      "image"        => "https://images.pexels.com/photos/323775/pexels-photo-323775.jpeg",
      "details"      => "4 Beds | 2 Baths | 150m²"
    ],
    [
      "title"        => "Charming Apartment in Mitrovica",
      "price"        => 300,
      "priceDisplay" => "€300",
      "image"        => "https://images.pexels.com/photos/681331/pexels-photo-681331.jpeg",
      "details"      => "2 Beds | 1 Bath | 80m²"
    ],
    [
      "title"        => "House in the Heart of Prishtina",
      "price"        => 550000,
      "priceDisplay" => "€550,000",
      "image"        => "https://images.pexels.com/photos/209315/pexels-photo-209315.jpeg",
      "details"      => "5 Beds | 4 Baths | 300m²"
    ],
    [
      "title"        => "Apartment in Prishtina",
      "price"        => 250,
      "priceDisplay" => "€250/mo",
      "image"        => "https://images.pexels.com/photos/1571468/pexels-photo-1571468.jpeg",
      "details"      => "1 Bed | 1 Bath | 50m²"
    ],
    [
      "title"        => "House in Ferizaj",
      "price"        => 700000,
      "priceDisplay" => "€700,000",
      "image"        => "https://images.pexels.com/photos/1571468/pexels-photo-1571468.jpeg",
      "details"      => "6 Beds | 5 Bath | 350m²"
    ],
    [
      "title"        => "Apartment in Ferizaj",
      "price"        => 250000,
      "priceDisplay" => "€250,000",
      "image"        => "https://images.pexels.com/photos/1571468/pexels-photo-1571468.jpeg",
      "details"      => "3 Beds | 2 Bath | 120m²"
    ],
    [
      "title"        => "Pretty House in Gjakova",
      "price"        => 650,
      "priceDisplay" => "€650/mo",
      "image"        => "https://images.pexels.com/photos/1571468/pexels-photo-1571468.jpeg",
      "details"      => "2 Beds | 1 Bath | 80m²"
    ],
    [
      "title"        => "Cozy Apartament in Gjakova",
      "price"        => 700,
      "priceDisplay" => "€700/mo",
      "image"        => "https://images.pexels.com/photos/1571468/pexels-photo-1571468.jpeg",
      "details"      => "3 Beds | 2 Bath | 100m²"
    ],
    [
      "title"        => "Pretty House in Vushtrri",
      "price"        => 350000,
      "priceDisplay" => "€350,000",
      "image"        => "https://images.pexels.com/photos/1571468/pexels-photo-1571468.jpeg",
      "details"      => "4 Beds | 3 Bath | 220m²"
    ],
    [
      "title"        => "Apartment in Vushtrri",
      "price"        => 250,
      "priceDisplay" => "€250/mo",
      "image"        => "https://images.pexels.com/photos/1571468/pexels-photo-1571468.jpeg",
      "details"      => "2 Beds | 1 Bath | 90m²"
    ],
    [
      "title"        => "Big House in Peja",
      "price"        => 400000,
      "priceDisplay" => "€400,000",
      "image"        => "https://images.pexels.com/photos/1571468/pexels-photo-1571468.jpeg",
      "details"      => "4 Beds | 2 Bath |180m²"
    ],
    [
      "title"        => "Pretty Apartment in Peja",
      "price"        => 800,
      "priceDisplay" => "€800/mo",
      "image"        => "https://images.pexels.com/photos/1571468/pexels-photo-1571468.jpeg",
      "details"      => "3 Beds | 2 Bath | 250m²"
    ],
    [
      "title"        => "House in Prishtina",
      "price"        => 900,
      "priceDisplay" => "€900/mo",
      "image"        => "https://images.pexels.com/photos/1571468/pexels-photo-1571468.jpeg",
      "details"      => "4 Beds | 3 Bath | 250m²"
    ],
    [
      "title"        => "Apartment in Prishtina",
      "price"        => 100000,
      "priceDisplay" => "€100,000",
      "image"        => "https://images.pexels.com/photos/209292/pexels-photo-209292.jpeg",
      "details"      => "2 Beds | 1 Bath | 85m²"
    ]
];

$listings = [];
foreach ($rawListings as $index => $item) {
    $property = createProperty($item);
    $property->id = $index;
    $listings[$index] = $property;
}

$firstListing = &$listings[0];
$firstListing->title = "🔥 Featured: " . $firstListing->title;

updatePrice($listings[1], 999000);
emphasizeTitle($listings[2]);

$cheapest = &getCheapestListing($listings);
$cheapest->title .= " (Cheapest)";

foreach ($listings as &$property) {
    $property->details .= " | Promo";
}
unset($property);

return $listings;
?>
