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
        'https://images.pexels.com/photos/280232/pexels-photo-280232.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
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
        'https://images.pexels.com/photos/1599790/pexels-photo-1599790.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
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
        'https://images.pexels.com/photos/1034584/pexels-photo-1034584.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1'
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
        "https://images.pexels.com/photos/1457842/pexels-photo-1457842.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1",
         "https://images.pexels.com/photos/1080721/pexels-photo-1080721.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1",
         "https://images.pexels.com/photos/1454804/pexels-photo-1454804.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1",
         "https://images.pexels.com/photos/1454806/pexels-photo-1454806.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
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
        'https://images.pexels.com/photos/259962/pexels-photo-259962.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
      'https://images.pexels.com/photos/2089696/pexels-photo-2089696.jpeg',
      'https://images.pexels.com/photos/6186825/pexels-photo-6186825.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
      'https://images.pexels.com/photos/237371/pexels-photo-237371.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1'
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
        'https://images.pexels.com/photos/1571457/pexels-photo-1571457.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
        'https://images.pexels.com/photos/373548/pexels-photo-373548.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
        'https://images.pexels.com/photos/1599790/pexels-photo-1599790.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
        'https://images.pexels.com/photos/164595/pexels-photo-164595.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1'
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
         'https://images.pexels.com/photos/1571468/pexels-photo-1571468.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
         'https://images.pexels.com/photos/1571457/pexels-photo-1571457.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
        'https://images.pexels.com/photos/1571452/pexels-photo-1571452.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
      'https://images.pexels.com/photos/3016430/pexels-photo-3016430.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
      'https://images.pexels.com/photos/3935352/pexels-photo-3935352.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1'
      
      ] ,
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
      'https://images.pexels.com/photos/3797991/pexels-photo-3797991.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
        'https://images.pexels.com/photos/280232/pexels-photo-280232.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
        'https://images.pexels.com/photos/2988865/pexels-photo-2988865.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
        'https://images.pexels.com/photos/90319/pexels-photo-90319.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
        'https://images.pexels.com/photos/1743229/pexels-photo-1743229.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1'
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
        'https://images.pexels.com/photos/3797991/pexels-photo-3797991.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
        'https://images.pexels.com/photos/280232/pexels-photo-280232.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
        'https://images.pexels.com/photos/2988865/pexels-photo-2988865.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
        'https://images.pexels.com/photos/90319/pexels-photo-90319.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
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
        'https://images.pexels.com/photos/259962/pexels-photo-259962.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
      'https://images.pexels.com/photos/2089696/pexels-photo-2089696.jpeg',
      'https://images.pexels.com/photos/6186825/pexels-photo-6186825.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
      'https://images.pexels.com/photos/237371/pexels-photo-237371.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1'
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
        'https://images.pexels.com/photos/1571452/pexels-photo-1571452.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
      'https://images.pexels.com/photos/3016430/pexels-photo-3016430.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
      'https://images.pexels.com/photos/3935352/pexels-photo-3935352.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
      'https://images.pexels.com/photos/1374125/pexels-photo-1374125.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1'
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
        'https://images.pexels.com/photos/1571457/pexels-photo-1571457.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
        'https://images.pexels.com/photos/373548/pexels-photo-373548.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
        'https://images.pexels.com/photos/1599790/pexels-photo-1599790.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
        'https://images.pexels.com/photos/164595/pexels-photo-164595.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1'
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
        "https://images.pexels.com/photos/1457842/pexels-photo-1457842.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1",
        "https://images.pexels.com/photos/1080721/pexels-photo-1080721.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1",
        "https://images.pexels.com/photos/1454804/pexels-photo-1454804.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1",
        "https://images.pexels.com/photos/1454806/pexels-photo-1454806.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
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
      images:[ 'https://images.pexels.com/photos/209292/pexels-photo-209292.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
        "https://images.pexels.com/photos/1457842/pexels-photo-1457842.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1",
        "https://images.pexels.com/photos/1080721/pexels-photo-1080721.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1",
        "https://images.pexels.com/photos/1454804/pexels-photo-1454804.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1",
        "https://images.pexels.com/photos/1454806/pexels-photo-1454806.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
     ],
     moreInfo:"This centrally located house in Prishtina is ideal for urban living, with stylish interiors, a rooftop terrace, and a short walk to popular shops and restaurants."
    }
  ]; 

const input = document.getElementById('location');
const suggestions = document.getElementById('suggestions');
const listingsContainer = document.querySelector('.listings');
const filterForm = document.querySelector('.filter-form');
const priceRangeInput = document.getElementById('price-range');
const priceValue = document.getElementById('price-value');
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

filterForm.addEventListener('submit', (e) => {
  e.preventDefault();
  const location = input.value.trim().toLowerCase();
  const propertyType = document.getElementById('property-type').value;
  const propertyUse = document.getElementById('property-use').value;
  const maxPrice = parseInt(priceRangeInput.value);

  const filteredProperties = properties.filter(property =>
    property.location.toLowerCase().includes(location) &&
    (propertyType === 'any' || property.type.toLowerCase() === propertyType.toLowerCase()) &&
    property.price <= maxPrice
  );

  renderProperties(filteredProperties);
});

priceRangeInput.addEventListener('input', () => {
  priceValue.textContent = `€${priceRangeInput.value.toLocaleString()}`;
});

input.addEventListener('input', () => {
  const query = input.value.trim().toLowerCase();
  suggestions.innerHTML = '';
  if (query) {
    const matchingCities = cities.filter(city => city.toLowerCase().includes(query));
    matchingCities.forEach(city => {
      const suggestionItem = document.createElement('div');
      suggestionItem.textContent = city;
      suggestionItem.classList.add('suggestion-item');
      suggestionItem.addEventListener('click', () => {
        input.value = city;
        suggestions.innerHTML = '';
      });
      suggestions.appendChild(suggestionItem);
    });
  }
});

document.addEventListener('click', (e) => {
  if (!input.contains(e.target) && !suggestions.contains(e.target)) {
    suggestions.innerHTML = '';
  }
});

renderProperties(properties);



 //-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
  //viola's javascript for home page
  let currentIndex = 0;
  
  function moveSlide(direction) {
      const slides = document.querySelectorAll('.slide');
      const totalSlides = slides.length;
      const slidesToShow = 3; // Number of slides visible at once
  
      // Update the index based on the direction
      currentIndex += direction;
  
      // If the index exceeds the total slides, reset to 0, otherwise, show the last set
      if (currentIndex >= totalSlides - slidesToShow + 1) {
          currentIndex = 0;
      } else if (currentIndex < 0) {
          currentIndex = totalSlides - slidesToShow; // Show the last set of slides
      }
  
      // Move the slides container
      const slidesContainer = document.querySelector('.slides-container');
      slidesContainer.style.transform = `translateX(-${currentIndex * (100 / slidesToShow)}%)`;
  }
  
  // Optional: Auto-rotate the slides every 5 seconds
  setInterval(() => moveSlide(1), 5000);
  
  const hamburger = document.querySelector('.hamburger');
  const navLinks = document.querySelector('.nav-links');

  hamburger.addEventListener('click', () => {
  navLinks.classList.toggle('active'); // Toggle the "active" class on the nav-links
});
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
  //Kimete's javascript per faqen e kontaktit
 <script>
     document.getElementById('contactForm').addEventListener('submit', function(e) {
    e.preventDefault(); // Ndalon dërgimin e formularit dhe rifreskimin e faqes

    // Merr vlerat e formularit
    let name = document.getElementById('name').value;
    let email = document.getElementById('email').value;
    let phone = document.getElementById('phone').value;
    let message = document.getElementById('message').value;

    // Kontrollon nëse të dhënat janë plotësuar
    if (name && email && phone && message) {
        // Trego një mesazh falënderimi për klientin
        alert(`Thank you, ${name}! We have received your message.`);

        // Pastron formularin pas dërgimit
        document.getElementById('contactForm').reset();
    } else {
        // Nëse fushat janë bosh, tregon një mesazh për plotësimin e fushave
        alert('Please fill out all fields!');
    }
});

    
 
    </script>

