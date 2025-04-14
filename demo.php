<?php
//yllka
//variablat globale: $_GET — për të marrë të dhëna nga URL query string, $_POST — për të marrë të dhëna nga forma, $_SESSION — për të ruajtur të dhëna midis faqeve (si përdoruesi që është loguar).,
// $_SERVER — për informata rreth serverit dhe kërkesës, $_COOKIE — për të lexuar cookie-t, $_FILES — për menaxhimin e file upload.
echo "HELLO FROM XAMPP!<br>";

$lokacioni = $_GET['lokacion'] ?? 'prishtina';
$lloji = $_GET['lloji'] ?? 'apartment';

function filtro()
{
    global $lokacioni, $lloji;
    echo "Filtrim për: $lloji në $lokacioni <br>";
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