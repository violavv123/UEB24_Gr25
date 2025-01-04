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
      moreInfo: "This house is perfect for large families, with a spacious garden, modern amenities, and located in a prime area of Prizren."
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
      moreInfo: "Prizren"
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
      moreInfo: "Prizren"
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
      moreInfo:"Prizren"
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
        moreInfo: "Prizren"
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
      moreInfo:"Prizren"
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
      moreInfo:"Prizren"
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
      moreInfo:"Prizren"
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
      moreInfo:"Prizren"
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
      'https://images.pexels.com/photos/1571457/pexels-photo-1571457.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
        'https://images.pexels.com/photos/373548/pexels-photo-373548.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
        'https://images.pexels.com/photos/1599790/pexels-photo-1599790.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
        'https://images.pexels.com/photos/164595/pexels-photo-164595.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1'
      ] ,
      moreInfo:"Prizren"
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
      moreInfo: "Prizren"
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
      moreInfo:"Prizren"
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
      moreInfo:"Prizren"
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
      moreInfo: "Prizren"
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
      moreInfo:"Prizren"
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
      moreInfo:"Prizren"
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
      moreInfo:"Prizren"
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
      moreInfo:"Prizren"
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
     moreInfo: "This house is perfect for large families, with a spacious garden, modern amenities, and located in a prime area of Prizren."

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
     moreInfo:"Prizren"
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
// perdorimi i jQuery selektoreve
  $(detailsModal).find(".modal-title").text(`${property.type} in ${property.location}`);
$(detailsModal).find(".modal-price").text(`€${property.price.toLocaleString()}`);
$(detailsModal).find(".modal-details").text(`${property.beds} Beds | ${property.baths} Baths | ${property.size}`);
$(detailsModal).find(".additional-info").text(moreInfo);

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
  const minPrice = parseInt(minPriceInput.value) || 100;
  const maxPrice = parseInt(maxPriceInput.value) || 1000000;

  if (minPrice > maxPrice) {
    alert('Minimum price cannot be greater than the maximum price.');
    return;
  }

  const filteredProperties = properties.filter(property =>
    property.location.toLowerCase().includes(location) &&
    (propertyType === 'any' || property.type.toLowerCase() === propertyType.toLowerCase()) &&
    property.price >= minPrice &&
    property.price <= maxPrice
  );

  renderProperties(filteredProperties);
});
// JS per datalist
const locationInput = document.getElementById('location');
const locationSuggestions = document.getElementById('location-suggestions');

const locations = ['Prishtina', 'Peja', 'Mitrovica', 'Prizren', 'Gjakova', 'Ferizaj', 'Vushtrri'];
locationInput.addEventListener('input', function() {
    const userInput = locationInput.value.toLowerCase();
    const filteredLocations = locations.filter(location => location.toLowerCase().includes(userInput));

    locationSuggestions.innerHTML = '';

    filteredLocations.forEach(location => {
        const option = document.createElement('option');
        option.value = location;
        locationSuggestions.appendChild(option);
    });
});



 //-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------


//-----------------------------------------
