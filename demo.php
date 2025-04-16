<?php
//yllka 
$base_url = "http://localhost/UEB2/UEB24_Gr25/";
 function getAssetPath($assetName) {
     global $base_url;
     return rtrim($base_url, "/") . "/assets/" . $assetName;
 }
 
 $assets = [
     "blog3.png", "blog4.jpg", "blog5.webp", "blog6.webp", "blog7.jpg", "blog8.webp",
     "blog31.png", "blog41.webp", "blog51.avif", "blog52.avif", "blog53.avif",
     "blog54.avif", "blog55.avif", "blog61.jpg", "blog71.webp", "blog72.jpg",
     "blog73.jpg", "blog74.jpg", "blog75.webp", "blog76.jpg", "blog81.jpg", "blog82.webp"
 ];
 
 foreach ($assets as $asset) {
     echo getAssetPath($asset) . "<br>";
 }
 
 
 class Prona{
     private $title;
     private $price;
     private $location;
     private $image;
     private $beds;
     private $baths;
     private $size;
 
     public function __construct($title, $price, $location, $image, $beds, $baths, $size) {
         $this->title = $title;
         $this->price = $price;
         $this->location = $location;
         $this->image = $image;
         $this->beds = $beds;
         $this->baths = $baths;
         $this->size = $size;
     }
 
     public function getTitle() {
         return $this->title;
     }
 
     public function getPrice() {
         return $this->price;
     }
 
     public function getLocation() {
         return $this->location;
     }
 
     public function getImage() {
         return $this->image;
     }
 
     public function getBeds() {
         return $this->beds;
     }
 
     public function getBaths() {
         return $this->baths;
     }
 
     public function getSize() {
         return $this->size;
     }
 
     protected function getFullDescription() {
         return "{$this->beds} Bed | {$this->baths} Bath | {$this->size}m²";
     }
 
     public function getDetailsSummary() {
         return $this->getFullDescription();
     }
 }
 
 $properties = [
     new Prona("Modern House in Prizren", "€450,000", "Prizren", "https://images.pexels.com/photos/259588/pexels-photo-259588.jpeg", 5, 3, 240),
     new Prona("Luxury Apartment in Prishtina", "€750,000", "Prishtina", "https://images.pexels.com/photos/1438832/pexels-photo-1438832.jpeg", 6, 4, 300),
     new Prona("Charming House in Gjilan", "€600,000", "Gjilan", "https://images.pexels.com/photos/1396132/pexels-photo-1396132.jpeg", 3, 2, 120),
     new Prona("House in Prishtina", "€600/mo", "Prishtina", "https://images.pexels.com/photos/208736/pexels-photo-208736.jpeg", 4, 2, 200),
     new Prona("Apartment in Prishtina", "€350/mo", "Prishtina", "https://images.pexels.com/photos/129494/pexels-photo-129494.jpeg", 2, 1, 70),
     new Prona("Charming House in Peja", "€450,000", "Peja", "https://images.pexels.com/photos/277667/pexels-photo-277667.jpeg", 5, 4, 300),
     new Prona("Cozy Apartment in Peja", "€500/mo", "Peja", "https://images.pexels.com/photos/1918291/pexels-photo-1918291.jpeg", 3, 2, 110),
     new Prona("Beautiful House in Mitrovica", "€350,000", "Mitrovica", "https://images.pexels.com/photos/323775/pexels-photo-323775.jpeg", 4, 2, 150),
     new Prona("Charming Apartment in Mitrovica", "€300", "Mitrovica", "https://images.pexels.com/photos/681331/pexels-photo-681331.jpeg", 2, 1, 80),
     new Prona("House in the Heart of Prishtina", "€550,000", "Prishtina", "https://images.pexels.com/photos/209315/pexels-photo-209315.jpeg", 5, 4, 300),
     new Prona("Apartment in Prishtina", "€250/mo", "Prishtina", "https://images.pexels.com/photos/1571468/pexels-photo-1571468.jpeg", 1, 1, 50),
     new Prona("House in Ferizaj", "€700,000", "Ferizaj", "https://images.pexels.com/photos/1571468/pexels-photo-1571468.jpeg", 6, 5, 350),
     new Prona("Apartment in Ferizaj", "€250,000", "Ferizaj", "https://images.pexels.com/photos/1571468/pexels-photo-1571468.jpeg", 3, 2, 120),
     new Prona("Pretty House in Gjakova", "€650/mo", "Gjakova", "https://images.pexels.com/photos/1571468/pexels-photo-1571468.jpeg", 2, 1, 80),
     new Prona("Cozy Apartment in Gjakova", "€700/mo", "Gjakova", "https://images.pexels.com/photos/1571468/pexels-photo-1571468.jpeg", 3, 2, 100),
     new Prona("Pretty House in Vushtrri", "€350,000", "Vushtrri", "https://images.pexels.com/photos/1571468/pexels-photo-1571468.jpeg", 4, 3, 220),
     new Prona("Apartment in Vushtrri", "€250/mo", "Vushtrri", "https://images.pexels.com/photos/1571468/pexels-photo-1571468.jpeg", 2, 1, 90),
     new Prona("Big House in Peja", "€400,000", "Peja", "https://images.pexels.com/photos/1571468/pexels-photo-1571468.jpeg", 4, 2, 180),
     new Prona("Pretty Apartment in Peja", "€800/mo", "Peja", "https://images.pexels.com/photos/1571468/pexels-photo-1571468.jpeg", 3, 2, 250),
     new Prona("House in Prishtina", "€900/mo", "Prishtina", "https://images.pexels.com/photos/1571468/pexels-photo-1571468.jpeg", 4, 3, 250),
     new Prona("Apartment in Prishtina", "€100,000", "Prishtina", "https://images.pexels.com/photos/209292/pexels-photo-209292.jpeg", 2, 1, 85),
 ];
 echo '
 <style>
     .listings {
         display: flex;
         flex-wrap: wrap;
         gap: 20px;
         justify-content: center;
         padding: 20px;
     }
 
     .property-card {
         width: 300px;
         border: 1px solid #ddd;
         border-radius: 10px;
         overflow: hidden;
         box-shadow: 0 0 10px rgba(0,0,0,0.1);
         transition: transform 0.2s;
         background-color: #fff;
     }
 
     .property-card img {
         width: 100%;
         height: 200px;
         object-fit: cover;
         display: block;
     }
 
     .property-details {
         padding: 15px;
     }
 
     .property-details h3 {
         margin: 0 0 10px;
         font-size: 18px;
     }
 
     .price {
         color: #27ae60;
         font-weight: bold;
         margin-bottom: 10px;
     }
 
     .view-details {
         background-color: #3498db;
         color: white;
         border: none;
         padding: 10px 15px;
         border-radius: 5px;
         cursor: pointer;
     }
 
     .view-details:hover {
         background-color: #2980b9;
     }
 </style>
 ';
 
 echo '<div class="listings">';
 foreach ($properties as $property) {
     echo '
     <div class="property-card">
         <img src="' . $property->getImage() . '" alt="Property Image">
         <div class="property-details">
             <h3>' . htmlspecialchars($property->getTitle()) . '</h3>
             <p class="price">' . $property->getPrice() . '</p>
             <p>' . $property->getDetailsSummary() . '</p>
             <button class="view-details">View Details</button>
         </div>
     </div>';
 }
 echo '</div>';


//---------------------------------------------------------------------------------------------------
//rudina


//---------------------------------------------------------------------------------------------------
//riga

class Property
{
    public string $location;
    public string $type;
    public string $use;
    public float $price;
    public int $beds;
    public int $baths;
    public string $size;
    public array $images;
    public string $moreInfo;

    public function __construct(string $location, string $type, string $use, float $price, int $beds, int $baths, string $size, array $images, string $moreInfo)
    {
        $this->location = $location;
        $this->type = $type;
        $this->use = $use;
        $this->price = $price;
        $this->beds = $beds;
        $this->baths = $baths;
        $this->size = $size;
        $this->images = $images;
        $this->moreInfo = $moreInfo;

        echo "Property created: $location <br>";
    }


    public function __destruct()
    {
        echo "Property destroyed: $this->location <br>";
    }

    public function getLocation(): string
    {
        return $this->location;
    }

    public function setLocation(string $location): void
    {
        $this->location = $location;
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function setType(string $type): void
    {
        $this->type = $type;
    }

    public function getUse(): string
    {
        return $this->use;
    }

    public function setUse(string $use): void
    {
        $this->use = $use;
    }

    public function getPrice(): float
    {
        return $this->price;
    }

    public function setPrice(float $price): void
    {
        $this->price = $price;
    }

    public function getBeds(): int
    {
        return $this->beds;
    }

    public function setBeds(int $beds): void
    {
        $this->beds = $beds;
    }

    public function getBaths(): int
    {
        return $this->baths;
    }

    public function setBaths(int $baths): void
    {
        $this->baths = $baths;
    }

    public function getSize(): string
    {
        return $this->size;
    }

    public function setSize(string $size): void
    {
        $this->size = $size;
    }

    public function getImages(): array
    {
        return $this->images;
    }

    public function setImages(array $images): void
    {
        $this->images = $images;
    }

    public function getMoreInfo(): string
    {
        return $this->moreInfo;
    }

    public function setMoreInfo(string $moreInfo): void
    {
        $this->moreInfo = $moreInfo;
    }

    public function displayProperty()
    {
        echo "<h2>Property Details</h2>";
        echo "<p>Location: $this->location</p>";
        echo "<p>Type: $this->type</p>";
        echo "<p>Use: $this->use</p>";
        echo "<p>Price: $this->price</p>";
        echo "<p>Beds: $this->beds</p>";
        echo "<p>Baths: $this->baths</p>";
        echo "<p>Size: $this->size</p>";
        echo "<p>Images: " . implode(", ", $this->images) . "</p>";
        echo "<p>More Info: $this->moreInfo</p>";
    }
}

$properties = [
    new Property(
        'Prizren', 'House', 'Buy', 450000, 5, 3, '240m²',
        [
            "https://images.pexels.com/photos/1438832/pexels-photo-1438832.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1",
        ],
        "This house is perfect for large families, with a spacious garden, modern amenities, and located in a prime area of Prizren."
    ),
    new Property(
        'Prishtina', 'Apartment', 'Buy', 750000, 6, 4, '300m²',
        [
            "https://images.pexels.com/photos/1643383/pexels-photo-1643383.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1",
        ],
        "This home offers an elegant design, a large terrace with stunning city views, and is situated in the heart of Prishtina, perfect for families and professionals."
    ),
    new Property(
        'Gjilan', 'House', 'Buy', 600000, 3, 2, '120m²',
        [
            'https://images.pexels.com/photos/1396132/pexels-photo-1396132.jpeg',
        ],
        "Located in a serene neighborhood of Gjilan, this property boasts a spacious living area, a private backyard, and easy access to local landmarks."
    )
];

$properties[2]->setPrice(500000);
$properties[2]->setBeds(4);
$properties[2]->setBaths(3);
$properties[2]->setSize('150m²');

echo $properties[2]->getLocation() . "<br>";
echo $properties[2]->getPrice() . "<br>";
echo $properties[2]->getBeds() . "<br>";

foreach ($properties as $property) {
    $property->displayProperty();
}

//----------------------------------------------------------------------------------------------------
//uranit


//----------------------------------------------------------------------------------------------------
//viola


//----------------------------------------------------------------------------------------------------


?>