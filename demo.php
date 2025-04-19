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
 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $phone = trim($_POST['phone']);
    $message = trim($_POST['message']);

    // Server-side validation

    // Check if all fields are filled out
    if (empty($name) || empty($email) || empty($phone) || empty($message)) {
        echo "Please fill out all fields.";
        exit;
    }

    // Validate email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Please enter a valid email address.";
        exit;
    }

    // Validate phone number (only numbers allowed)
    if (!preg_match("/^\d+$/", $phone)) {
        echo "Please enter a valid phone number (only numbers).";
        exit;
    }

    // If all validations pass, process the data (e.g., save to database or send email)
    echo "Thank you, $name! We have received your message.";

    // You can process the form here, for example, save data to a database or send an email.
    // For demonstration, we just echo the success message.
} else {
    echo "Invalid request.";
}





//---------------------------------------------------------------------------------------------------
//rudina


//---------------------------------------------------------------------------------------------------
//riga

class Property
{
    private string $location;
    protected string $type;
    private string $use;
    private float $price;
    protected int $beds;
    private int $baths;
    private string $size;
    protected array $images;
    private string $moreInfo;

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

    protected function getType(): string
    {
        return $this->type;
    }

    protected function setType(string $type): void
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
            "https://images.pexels.com/photos/1457842/pexels-photo-1457842.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1",
            "https://images.pexels.com/photos/1080721/pexels-photo-1080721.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1",
            "https://images.pexels.com/photos/1454804/pexels-photo-1454804.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1",
            "https://images.pexels.com/photos/1454806/pexels-photo-1454806.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
        ],
        "This house is perfect for large families, with a spacious garden, modern amenities, and located in a prime area of Prizren."
    ),
    new Property(
        'Prishtina', 'Apartment', 'Buy', 750000, 6, 4, '300m²',
        [
            "https://images.pexels.com/photos/1643383/pexels-photo-1643383.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1",
            "https://images.pexels.com/photos/279648/pexels-photo-279648.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1",
            "https://images.pexels.com/photos/3288104/pexels-photo-3288104.png?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1",
            "https://images.pexels.com/photos/90317/pexels-photo-90317.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
        ],
        "This home offers an elegant design, a large terrace with stunning city views, and is situated in the heart of Prishtina, perfect for families and professionals."
    ),
    new Property(
        'Gjilan', 'House', 'Buy', 600000, 3, 2, '120m²',
        [
            'https://images.pexels.com/photos/1396132/pexels-photo-1396132.jpeg',
            'https://images.pexels.com/photos/1571460/pexels-photo-1571460.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
            'https://images.pexels.com/photos/2724749/pexels-photo-2724749.jpeg',
            'https://images.pexels.com/photos/105934/pexels-photo-105934.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
            'https://images.pexels.com/photos/262048/pexels-photo-262048.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1'
        ],
        "Located in a serene neighborhood of Gjilan, this property boasts a spacious living area, a private backyard, and easy access to local landmarks."
    ),
    new Property(
        'Prishtina', 'House', 'Rent', 600, 4, 2, '200m²',
        [
            'https://images.pexels.com/photos/208736/pexels-photo-208736.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
            'https://images.pexels.com/photos/3797991/pexels-photo-3797991.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
            'https://images.pexels.com/photos/4030908/pexels-photo-4030908.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
            'https://images.pexels.com/photos/2988865/pexels-photo-2988865.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
            'https://images.pexels.com/photos/90319/pexels-photo-90319.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1'
        ],
        "This house in Prishtina is ideal for nature lovers, featuring a lush garden, modern interiors, and proximity to beautiful parks."
    ),
    new Property(
        'Prishtina', 'Apartment', 'Rent', 350, 2, 1, '70m²',
        [
            'https://images.pexels.com/photos/129494/pexels-photo-129494.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
            'https://images.pexels.com/photos/1571457/pexels-photo-1571457.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
            'https://images.pexels.com/photos/373548/pexels-photo-373548.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
            'https://images.pexels.com/photos/1910472/pexels-photo-1910472.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
            'https://images.pexels.com/photos/164595/pexels-photo-164595.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1'
        ],
        "A perfect choice in Prishtina, this property combines a central location, luxurious finishes, and ample space for both family living and entertaining."
    ),
    new Property(
        'Peja', 'House', 'Buy', 450000, 5, 4, '300m²',
        [
            'https://images.pexels.com/photos/277667/pexels-photo-277667.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
            'https://images.pexels.com/photos/271795/pexels-photo-271795.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
            'https://images.pexels.com/photos/2343467/pexels-photo-2343467.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
            'https://images.pexels.com/photos/3965521/pexels-photo-3965521.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
            'https://images.pexels.com/photos/279746/pexels-photo-279746.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1'
        ],
        "Nestled in the charming streets of Peja, this home blends traditional architecture with contemporary comfort, offering a unique living experience."
    ),
    new Property(
        'Peja', 'Apartment', 'Rent', 500, 3, 2, '100m²',
        [
            'https://images.pexels.com/photos/1918291/pexels-photo-1918291.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
            'https://images.pexels.com/photos/259962/pexels-photo-259962.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
            'https://images.pexels.com/photos/2089696/pexels-photo-2089696.jpeg',
            'https://images.pexels.com/photos/6186825/pexels-photo-6186825.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
            'https://images.pexels.com/photos/237371/pexels-photo-237371.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1'
        ],
        "Situated in a quiet yet central area of Peja, this apartment features sleek modern design, a sunlit balcony, and access to vibrant cultural spots."
    ),
    new Property(
        'Mitrovica', 'House', 'Buy', 350000, 4, 2, '150m²',
        [
            'https://images.pexels.com/photos/323775/pexels-photo-323775.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
            'https://images.pexels.com/photos/1648776/pexels-photo-1648776.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
            'https://images.pexels.com/photos/30002784/pexels-photo-30002784/free-photo-of-modern-kitchen-and-living-space-with-marble-decor.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
            'https://images.pexels.com/photos/1571450/pexels-photo-1571450.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
            'https://images.pexels.com/photos/3935352/pexels-photo-3935352.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1'
        ],
        "This elegant house in Mitrovica is surrounded by greenery, with spacious interiors, eco-friendly features, and close proximity to top schools."
    ),
    new Property(
        'Mitrovica', 'Apartment', 'Rent', 300, 2, 1, '80m²',
        [
            'https://images.pexels.com/photos/681331/pexels-photo-681331.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
            'https://images.pexels.com/photos/3209045/pexels-photo-3209045.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
            'https://images.pexels.com/photos/2398375/pexels-photo-2398375.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
            'https://images.pexels.com/photos/1743229/pexels-photo-1743229.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
            'https://images.pexels.com/photos/5677270/pexels-photo-5677270.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1'
        ],
        "Located near the river, this Mitrovica home features traditional charm, modern updates, and a peaceful garden oasis."
    ),
    new Property(
        'Prishtina', 'Apartment', 'Rent', 250, 1, 1, '50m²',
        [
            'https://images.pexels.com/photos/1571468/pexels-photo-1571468.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
            'https://images.pexels.com/photos/1571471/pexels-photo-1571471.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
            'https://images.pexels.com/photos/210687/pexels-photo-210687.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
            'https://images.pexels.com/photos/271618/pexels-photo-271618.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
            'https://images.pexels.com/photos/6238609/pexels-photo-6238609.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1'
        ],
        "This property in Prishtina is perfect for relaxation, with a rooftop terrace, sleek modern decor, and a short walk to the coastline."
    ),
    new Property(
        'Prishtina', 'House', 'Buy', 550000, 5, 4, '280m²',
        [
            'https://images.pexels.com/photos/209315/pexels-photo-209315.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
            'https://images.pexels.com/photos/1669799/pexels-photo-1669799.jpeg',
            'https://images.pexels.com/photos/2089698/pexels-photo-2089698.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
            'https://images.pexels.com/photos/271624/pexels-photo-271624.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
            'https://images.pexels.com/photos/6265831/pexels-photo-6265831.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1'
        ],
        "In the heart of Prishtina, this home offers contemporary finishes, a cozy courtyard, and a prime location near the city hall."
    ),
    new Property(
        'Ferizaj', 'House', 'Buy', 700000, 6, 5, '350m²',
        [
            'https://images.pexels.com/photos/259593/pexels-photo-259593.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
            'https://images.pexels.com/photos/276724/pexels-photo-276724.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
            'https://images.pexels.com/photos/1668860/pexels-photo-1668860.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
            'https://images.pexels.com/photos/271619/pexels-photo-271619.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
            'https://images.pexels.com/photos/6301176/pexels-photo-6301176.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1'
        ],
        "This elegant house in Ferizaj combines timeless architecture, a large private yard, and a central location perfect for city living."
    ),
    new Property(
        'Ferizaj', 'Apartment', 'Buy', 250000, 3, 2, '120m²',
        [
            'https://images.pexels.com/photos/1743227/pexels-photo-1743227.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
            'https://images.pexels.com/photos/1571452/pexels-photo-1571452.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
            'https://images.pexels.com/photos/3016430/pexels-photo-3016430.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
            'https://images.pexels.com/photos/3935352/pexels-photo-3935352.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
            'https://images.pexels.com/photos/1374125/pexels-photo-1374125.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1'
        ],
        "This stylish Ferizaj property is ideal for urban living, with chic modern features, a sunny balcony, and quick access to the city's bustling port area."
    ),
    new Property(
        'Gjakova', 'House', 'Rent', 650, 2, 1, '80m²',
        [
            'https://images.pexels.com/photos/164522/pexels-photo-164522.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
            'https://images.pexels.com/photos/3705529/pexels-photo-3705529.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
            'https://images.pexels.com/photos/3623785/pexels-photo-3623785.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
            'https://images.pexels.com/photos/6315803/pexels-photo-6315803.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
            'https://images.pexels.com/photos/271624/pexels-photo-271624.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1'
        ],
        "This charming home in Gjakova offers a blend of traditional design and modern amenities, located in a peaceful neighborhood perfect for families."
    ),
    new Property(
        'Gjakova', 'Apartment', 'Rent', 700, 3, 2, '100m²',
        [
            'https://images.pexels.com/photos/205078/pexels-photo-205078.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
            'https://images.pexels.com/photos/1571467/pexels-photo-1571467.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
            'https://images.pexels.com/photos/30002775/pexels-photo-30002775/free-photo-of-modern-minimalist-kitchen-interior-design.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
            'https://images.pexels.com/photos/210604/pexels-photo-210604.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
            'https://images.pexels.com/photos/7166936/pexels-photo-7166936.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1'
        ],
        "A cozy retreat in the heart of Gjakova, this apartment boasts elegant interiors and a welcoming community atmosphere."
    ),
    new Property(
        'Vushtrri', 'House', 'Buy', 350000, 4, 3, '220m²',
        [
            'https://images.pexels.com/photos/2893177/pexels-photo-2893177.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
            'https://images.pexels.com/photos/1571452/pexels-photo-1571452.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
            'https://images.pexels.com/photos/3016430/pexels-photo-3016430.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
            'https://images.pexels.com/photos/3935352/pexels-photo-3935352.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
            'https://images.pexels.com/photos/1374125/pexels-photo-1374125.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1'
        ],
        "This lovely home in Vushtrri combines comfort and style, featuring a large garden, modern kitchen, and proximity to local schools and parks."
    ),
    new Property(
        'Vushtrri', 'Apartment', 'Rent', 250, 2, 1, '90m²',
        [
            'https://images.pexels.com/photos/144632/pexels-photo-144632.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
            'https://images.pexels.com/photos/4112601/pexels-photo-4112601.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
            'https://images.pexels.com/photos/8031970/pexels-photo-8031970.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
            'https://images.pexels.com/photos/10973940/pexels-photo-10973940.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
            'https://images.pexels.com/photos/6489086/pexels-photo-6489086.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1'
        ],
        "Located in a quiet area of Vushtrri, this property is ideal for families, offering a spacious living area, contemporary design, and great neighborhood vibes."
    ),
    new Property(
        'Peja', 'House', 'Buy', 400000, 4, 2, '180m²',
        [
            'https://images.pexels.com/photos/2183521/pexels-photo-2183521.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
            'https://images.pexels.com/photos/2121120/pexels-photo-2121120.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
            'https://images.pexels.com/photos/9111869/pexels-photo-9111869.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
            'https://images.pexels.com/photos/2082087/pexels-photo-2082087.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
            'https://images.pexels.com/photos/7195721/pexels-photo-7195721.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1'
        ],
        "This modern home in Prizren is designed for comfort, featuring an open-concept layout, a large terrace, and scenic views of the castle."
    ),

    new Property(
        'Peja', 'Apartment', 'Rent', 800, 3, 2, '110m²',
        [
            'https://images.pexels.com/photos/1571453/pexels-photo-1571453.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
            'https://images.pexels.com/photos/6527063/pexels-photo-6527063.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
            'https://images.pexels.com/photos/10486222/pexels-photo-10486222.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
            'https://images.pexels.com/photos/1743231/pexels-photo-1743231.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
            'https://images.pexels.com/photos/8135111/pexels-photo-8135111.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1'
        ],
        "This picturesque apartment in Peja offers breathtaking views of the Rugova Mountains, modern amenities, and a tranquil setting for nature lovers."
    ),
    new Property(
        'Prishtina', 'House', 'Rent', 900, 4, 3, '250m²',
        [
            'https://images.pexels.com/photos/1170686/pexels-photo-1170686.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
            'https://images.pexels.com/photos/3705529/pexels-photo-3705529.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
            'https://images.pexels.com/photos/6835079/pexels-photo-6835079.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
            'https://images.pexels.com/photos/6035361/pexels-photo-6035361.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
            'https://images.pexels.com/photos/17069809/pexels-photo-17069809/free-photo-of-modern-design-of-bathroom.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1'
        ],
        "This luxurious home in Prishtina offers contemporary design, a large yard, and easy access to the city’s vibrant downtown."
    ),
    new Property(
        'Prishtina', 'Apartment', 'Buy', 100000, 2, 1, '85m²',
        [
            'https://images.pexels.com/photos/209292/pexels-photo-209292.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
            'https://images.pexels.com/photos/4857772/pexels-photo-4857772.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
            'https://images.pexels.com/photos/10847182/pexels-photo-10847182.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
            'https://images.pexels.com/photos/20653863/pexels-photo-20653863/free-photo-of-illuminated-modern-bedroom.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
            'https://images.pexels.com/photos/6969997/pexels-photo-6969997.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1'
        ],
        "This centrally located house in Prishtina is ideal for urban living, with stylish interiors, a rooftop terrace, and a short walk to popular shops and restaurants."
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