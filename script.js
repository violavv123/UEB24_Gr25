//yllka's java script per listings

    const cities = ["Prishtina", "Prizren", "Peja", "Podujeva", "Gjakova", "Mitrovica", "Ferizaj", "Gjilan", "Vushtrri"];
    const properties = [
      {
      location: 'Prizren',
      type: 'House',
      use: 'Buy',
      price: 450000,
      beds: 5,
      baths: 3,
      size: '240m²',
      images: [
        "https://images.pexels.com/photos/1438832/pexels-photo-1438832.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1",
        "https://images.pexels.com/photos/1457842/pexels-photo-1457842.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1",
         "https://images.pexels.com/photos/1080721/pexels-photo-1080721.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1",
         "https://images.pexels.com/photos/1454804/pexels-photo-1454804.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1",
         "https://images.pexels.com/photos/1454806/pexels-photo-1454806.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
      ],
      moreInfo: "This house is perfect for large families, with a spacious garden, modern amenities, and located in a prime area of Prizren."

      },
    {
      location: 'Prishtina',
      type: 'Apartment',
      use: 'Buy',
      price: 750000,
      beds: 6,
      baths: 4,
      size: '300m²',
      images: [
         "https://images.pexels.com/photos/1643383/pexels-photo-1643383.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1",
         "https://images.pexels.com/photos/279648/pexels-photo-279648.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1",
         "https://images.pexels.com/photos/3288104/pexels-photo-3288104.png?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1",
        "https://images.pexels.com/photos/90317/pexels-photo-90317.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
      ],
      moreInfo: "This home offers an elegant design, a large terrace with stunning city views, and is situated in the heart of Prishtina, perfect for families and professionals."
    },
    {
      location: 'Gjilan',
      type: 'House',
      use: 'Buy',
      price: 600000,
      beds: 3,
      baths: 2,
      size: '120m²',
      images: [
        'https://images.pexels.com/photos/1396132/pexels-photo-1396132.jpeg',
        'https://images.pexels.com/photos/1571460/pexels-photo-1571460.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
        'https://images.pexels.com/photos/2724749/pexels-photo-2724749.jpeg',
        'https://images.pexels.com/photos/105934/pexels-photo-105934.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
        'https://images.pexels.com/photos/262048/pexels-photo-262048.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1'
      ],
      moreInfo: "Located in a serene neighborhood of Gjilan, this property boasts a spacious living area, a private backyard, and easy access to local landmarks."
    },
    {
      location: 'Prishtina',
      type: 'House',
      use: 'Rent',
      price: 600,
      beds: 4,
      baths: 2,
      size: '200m²',
      images:[
        'https://images.pexels.com/photos/208736/pexels-photo-208736.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
        'https://images.pexels.com/photos/3797991/pexels-photo-3797991.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
        'https://images.pexels.com/photos/4030908/pexels-photo-4030908.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
        'https://images.pexels.com/photos/2988865/pexels-photo-2988865.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
        'https://images.pexels.com/photos/90319/pexels-photo-90319.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1'
      ] ,
      moreInfo: "This house in Prishtina is ideal for nature lovers, featuring a lush garden, modern interiors, and proximity to beautiful parks."
    },
    {
      location: 'Prishtina', 
      type: 'Apartment',
      use: 'Rent',
      price: 350,
      beds: 2,
      baths: 1,
      size: '70m²',
      images:[
        'https://images.pexels.com/photos/129494/pexels-photo-129494.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
        'https://images.pexels.com/photos/1571457/pexels-photo-1571457.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
        'https://images.pexels.com/photos/373548/pexels-photo-373548.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
        'https://images.pexels.com/photos/1910472/pexels-photo-1910472.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
        'https://images.pexels.com/photos/164595/pexels-photo-164595.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1'
      ] ,
      moreInfo:"A perfect choice in Prishtina, this property combines a central location, luxurious finishes, and ample space for both family living and entertaining."
    },
    {
      location: 'Peja',
      type: 'House',
      use: 'Buy',
      price: 450000,
      beds: 5,
      baths: 4,
      size: '300m²',
      images:[
        'https://images.pexels.com/photos/277667/pexels-photo-277667.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
        'https://images.pexels.com/photos/271795/pexels-photo-271795.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
        'https://images.pexels.com/photos/2343467/pexels-photo-2343467.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
        'https://images.pexels.com/photos/3965521/pexels-photo-3965521.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
        'https://images.pexels.com/photos/279746/pexels-photo-279746.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1'
        ],
        moreInfo: "Nestled in the charming streets of Prizren, this home blends traditional architecture with contemporary comfort, offering a unique living experience."
      },
    {
      location: 'Peja',
      type: 'Apartment',
      use: 'Rent',
      price: 500,
      beds: 3,
      baths: 2,
      size: '100m²',
      images:[
      'https://images.pexels.com/photos/1918291/pexels-photo-1918291.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
      'https://images.pexels.com/photos/259962/pexels-photo-259962.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
      'https://images.pexels.com/photos/2089696/pexels-photo-2089696.jpeg',
      'https://images.pexels.com/photos/6186825/pexels-photo-6186825.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
      'https://images.pexels.com/photos/237371/pexels-photo-237371.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1'
      ],
      moreInfo:"Situated in a quiet yet central area of Peja, this apartment features sleek modern design, a sunlit balcony, and access to vibrant cultural spots."
    },
    {
      location: 'Mitrovica',
      type: 'House',
      use: 'Buy',
      price: 350000,
      beds: 4,
      baths: 2,
      size: '150m²',
      images:[ 
        'https://images.pexels.com/photos/323775/pexels-photo-323775.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
        'https://images.pexels.com/photos/1648776/pexels-photo-1648776.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
        'https://images.pexels.com/photos/30002784/pexels-photo-30002784/free-photo-of-modern-kitchen-and-living-space-with-marble-decor.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
        'https://images.pexels.com/photos/1571450/pexels-photo-1571450.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
        'https://images.pexels.com/photos/3935352/pexels-photo-3935352.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
        
      ],
      moreInfo:"This elegant house in Mitrovica is surrounded by greenery, with spacious interiors, eco-friendly features, and close proximity to top schools."


    },
    {
      location: 'Mitrovica', 
      type: 'Apartment',
      use: 'Rent',
      price: 300,
      beds: 2,
      baths: 1,
      size: '80m²',
      images:[ 
        'https://images.pexels.com/photos/681331/pexels-photo-681331.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
        'https://images.pexels.com/photos/3209045/pexels-photo-3209045.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
        'https://images.pexels.com/photos/2398375/pexels-photo-2398375.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
        'https://images.pexels.com/photos/1743229/pexels-photo-1743229.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
        'https://images.pexels.com/photos/5677270/pexels-photo-5677270.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
        
      ],
      moreInfo:"Located near the river, this Mitrovica home features traditional charm, modern updates, and a peaceful garden oasis."
    },
    {
      location: 'Prishtina',
      type: 'House',
      use: 'Buy',
      price: 550000,
      beds: 5,
      baths: 4,
      size: '280m²',
      images:[
        'https://images.pexels.com/photos/209315/pexels-photo-209315.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
        'https://images.pexels.com/photos/1669799/pexels-photo-1669799.jpeg',
        'https://images.pexels.com/photos/2089698/pexels-photo-2089698.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
        'https://images.pexels.com/photos/271624/pexels-photo-271624.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
        'https://images.pexels.com/photos/6265831/pexels-photo-6265831.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
        
      ] ,
      moreInfo:"In the heart of Prishtina, this home offers contemporary finishes, a cozy courtyard, and a prime location near the city hall."


        },
    {
      location: 'Prishtina', 
      type: 'Apartment',
      use: 'Rent',
      price: 250,
      beds: 1,
      baths: 1,
      size: '50m²',
      images: [
         'https://images.pexels.com/photos/1571468/pexels-photo-1571468.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
         'https://images.pexels.com/photos/1571471/pexels-photo-1571471.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
         'https://images.pexels.com/photos/210687/pexels-photo-210687.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
         'https://images.pexels.com/photos/271618/pexels-photo-271618.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
         'https://images.pexels.com/photos/6238609/pexels-photo-6238609.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1'
         
      ],
      moreInfo:"This property in Prishtina is perfect for relaxation, with a rooftop terrace, sleek modern decor, and a short walk to the coastline."
    },
    {
      location: 'Ferizaj',
      type: 'House',
      use: 'Buy',
      price: 700000,
      beds: 6,
      baths: 5,
      size: '350m²',
      images:[
         'https://images.pexels.com/photos/259593/pexels-photo-259593.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
         'https://images.pexels.com/photos/276724/pexels-photo-276724.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
         'https://images.pexels.com/photos/1668860/pexels-photo-1668860.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
         'https://images.pexels.com/photos/271619/pexels-photo-271619.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
         'https://images.pexels.com/photos/6301176/pexels-photo-6301176.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1'

      ] ,
      moreInfo: "This elegant house in Ferizaj combines timeless architecture, a large private yard, and a central location perfect for city living."
    },
    {
      location: 'Ferizaj', 
      type: 'Apartment',
      use: 'Buy',
      price: 250000,
      beds: 3,
      baths: 2,
      size: '120m²',
      images:[ 'https://images.pexels.com/photos/1743227/pexels-photo-1743227.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
      'https://images.pexels.com/photos/1571452/pexels-photo-1571452.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
      'https://images.pexels.com/photos/3016430/pexels-photo-3016430.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
      'https://images.pexels.com/photos/3935352/pexels-photo-3935352.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
      'https://images.pexels.com/photos/1374125/pexels-photo-1374125.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1'
      ],
      moreInfo:"This stylish Ferizaj property is ideal for urban living, with chic modern features, a sunny balcony, and quick access to the city's bustling port area."
    },
    {
      location: 'Gjakova',
      type: 'House',
      use: 'Rent',
      price: 650,
      beds: 2,
      baths: 1,
      size: '80m²',
      images:[ 'https://images.pexels.com/photos/164522/pexels-photo-164522.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
        'https://images.pexels.com/photos/3705529/pexels-photo-3705529.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
        'https://images.pexels.com/photos/3623785/pexels-photo-3623785.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
        'https://images.pexels.com/photos/6315803/pexels-photo-6315803.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
        'https://images.pexels.com/photos/271624/pexels-photo-271624.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1'
      ],
      moreInfo:"This charming home in Gjakova offers a blend of traditional design and modern amenities, located in a peaceful neighborhood perfect for families."
    },
    {
      location: 'Gjakova',
      type: 'Apartment',
      use: 'Rent',
      price: 700,
      beds: 3,
      baths: 2,
      size: '100m²',
      images:[ 'https://images.pexels.com/photos/205078/pexels-photo-205078.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
        'https://images.pexels.com/photos/1571467/pexels-photo-1571467.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
        'https://images.pexels.com/photos/30002775/pexels-photo-30002775/free-photo-of-modern-minimalist-kitchen-interior-design.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
        'https://images.pexels.com/photos/210604/pexels-photo-210604.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
        'https://images.pexels.com/photos/7166936/pexels-photo-7166936.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1'

       
      ] ,
      moreInfo: "A cozy retreat in the heart of Gjakova, this apartment boasts elegant interiors  and a welcoming community atmosphere."
    },
    {
      location: 'Vushtrri',
      type: 'House',
      use: 'Buy',
      price: 350000,
      beds: 4,
      baths: 3,
      size: '220m²',
      images:[ 'https://images.pexels.com/photos/2893177/pexels-photo-2893177.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
'https://images.pexels.com/photos/1571452/pexels-photo-1571452.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
      'https://images.pexels.com/photos/3016430/pexels-photo-3016430.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
      'https://images.pexels.com/photos/3935352/pexels-photo-3935352.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
      'https://images.pexels.com/photos/1374125/pexels-photo-1374125.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1'
      ],
      moreInfo:"This lovely home in Vushtrri combines comfort and style, featuring a large garden, modern kitchen, and proximity to local schools and parks."
    },
    {
      location: 'Vushtrri', 
      type: 'Apartment',
      use: 'Rent',
      price: 250,
      beds: 2,
      baths: 1,
      size: '90m²',
      images:[ 'https://images.pexels.com/photos/144632/pexels-photo-144632.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
        'https://images.pexels.com/photos/4112601/pexels-photo-4112601.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
        'https://images.pexels.com/photos/8031970/pexels-photo-8031970.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
        'https://images.pexels.com/photos/10973940/pexels-photo-10973940.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
        'https://images.pexels.com/photos/6489086/pexels-photo-6489086.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1'
        
      ],
      moreInfo:"Located in a quiet area of Vushtrri, this property is ideal for families, offering a spacious living area, contemporary design, and great neighborhood vibes."
    },
    {
      location: 'Peja',
      type: 'House',
      use: 'Buy',
      price: 400000,
      beds: 4,
      baths: 2,
      size: '180m²',
      images:[ 'https://images.pexels.com/photos/2183521/pexels-photo-2183521.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
        'https://images.pexels.com/photos/2121120/pexels-photo-2121120.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
        'https://images.pexels.com/photos/9111869/pexels-photo-9111869.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
        'https://images.pexels.com/photos/2082087/pexels-photo-2082087.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
        'https://images.pexels.com/photos/7195721/pexels-photo-7195721.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1'

      ],
      moreInfo:"This modern home in Prizren is designed for comfort, featuring an open-concept layout, a large terrace, and scenic views of the castle."
    },
    {
      location: 'Peja', 
      type: 'Apartment',
      use: 'Rent',
      price: 800,
      beds: 3,
      baths: 2,
      size: '110m²',
      images:[ 'https://images.pexels.com/photos/1571453/pexels-photo-1571453.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
        'https://images.pexels.com/photos/6527063/pexels-photo-6527063.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
        'https://images.pexels.com/photos/10486222/pexels-photo-10486222.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
        'https://images.pexels.com/photos/1743231/pexels-photo-1743231.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
        'https://images.pexels.com/photos/8135111/pexels-photo-8135111.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1'
        
      ] ,
      moreInfo:"This picturesque apartment in Peja offers breathtaking views of the Rugova Mountains, modern amenities, and a tranquil setting for nature lovers."
    },
    {
      location: 'Prishtina',
      type: 'House',
      use: 'Rent',
      price: 900,
      beds: 4,
      baths: 3,
      size: '250m²',
      images:[ 'https://images.pexels.com/photos/1170686/pexels-photo-1170686.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
        'https://images.pexels.com/photos/3705529/pexels-photo-3705529.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
        'https://images.pexels.com/photos/6835079/pexels-photo-6835079.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
        'https://images.pexels.com/photos/6035361/pexels-photo-6035361.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
        'https://images.pexels.com/photos/17069809/pexels-photo-17069809/free-photo-of-modern-design-of-bathroom.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1'
        
     ],
     moreInfo: "This luxurious home in Prishtina offers contemporary design, a large yard, and easy access to the city’s vibrant downtown."
    },
    {
      location: 'Prishtina', 
      type: 'Apartment',
      use: 'Buy',
      price: 100000,
      beds: 2,
      baths: 1,
      size: '85m²',
      images:[ 
        'https://images.pexels.com/photos/209292/pexels-photo-209292.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
     'https://images.pexels.com/photos/4857772/pexels-photo-4857772.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
     'https://images.pexels.com/photos/10847182/pexels-photo-10847182.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
     'https://images.pexels.com/photos/20653863/pexels-photo-20653863/free-photo-of-illuminated-modern-bedroom.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
     'https://images.pexels.com/photos/6969997/pexels-photo-6969997.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1'
     ],
     moreInfo:"This centrally located house in Prishtina is ideal for urban living, with stylish interiors, a rooftop terrace, and a short walk to popular shops and restaurants."
    }
  ]; 
const input = document.getElementById('location');
const suggestions = document.getElementById('suggestions');
const listingsContainer = document.querySelector('.listings');
const filterForm = document.querySelector('.filter-form');
const minPriceInput = document.getElementById('min-price');
const maxPriceInput = document.getElementById('max-price');
const detailsModal = document.getElementById('details-modal'); 
const modalOverlay = document.getElementById('modal-overlay');

const showPropertyDetails = (property) => {
const mainImage = detailsModal.querySelector(".main-image");
const carousel = detailsModal.querySelector(".carousel");

const moreInfo = property.moreInfo || "This property is located in a prime area with excellent amenities nearby. It features a spacious garden, modern interiors, and convenient access to schools and shops.";

detailsModal.querySelector(".modal-title").textContent = `${property.type} in ${property.location}`;
detailsModal.querySelector(".modal-price").textContent = `€${property.price.toLocaleString()}`;
detailsModal.querySelector(".modal-details").textContent = `${property.beds} Beds | ${property.baths} Baths | ${property.size}`;
detailsModal.querySelector(".additional-info").textContent = moreInfo;

if (property.images && Array.isArray(property.images) && property.images.length > 0) {
mainImage.src = property.images[0]; 
carousel.innerHTML = property.images.map((src) => `<img src="${src}" alt="Additional Image">`).join(""); 
} else if (property.image) {
mainImage.src = property.image; 
carousel.innerHTML = `<img src="${property.image}" alt="Additional Image">`; 
} else {
mainImage.src = ''; 
carousel.innerHTML = ''; 
}

/**perdorimi i unazes forEach */
carousel.querySelectorAll("img").forEach((img) => {
img.addEventListener("click", () => {
  mainImage.src = img.src;
});
});

detailsModal.classList.add("active");
modalOverlay.classList.add("active");
};

const renderProperties = (filteredProperties) => {
listingsContainer.innerHTML = '';
if (filteredProperties.length === 0) {
const noPropertiesMessage = document.createElement('p');
noPropertiesMessage.textContent = 'No properties found for your search criteria.';
noPropertiesMessage.classList.add('no-properties-message');
listingsContainer.appendChild(noPropertiesMessage);
return;
}

filteredProperties.forEach(property => {
const propertyCard = document.createElement('div');
propertyCard.classList.add('property-card');

const propertyImage = property.images && Array.isArray(property.images) && property.images.length > 0 ? property.images[0] : property.image;

propertyCard.innerHTML = `
  <img src="${propertyImage}" alt="${property.type} in ${property.location}">
  <div class="property-details">
    <h3>${property.type} in ${property.location}</h3>
    <p class="price">€${property.price.toLocaleString()}</p>
    <p>${property.beds} Beds | ${property.baths} Baths | ${property.size}</p>
    <button class="view-details">View Details</button>
  </div>
`;

listingsContainer.appendChild(propertyCard);

const viewDetailsButton = propertyCard.querySelector('.view-details');
viewDetailsButton.addEventListener('click', () => showPropertyDetails(property));
});
};
const closeButton = detailsModal.querySelector('.close-btn'); 

closeButton.addEventListener('click', () => {
detailsModal.classList.remove('active'); 
modalOverlay.classList.remove('active'); 
});


