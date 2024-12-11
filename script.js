//yllka's js
const properties = [
    {
      location: 'Prishtina',
      type: 'House',
      use: 'Buy',
      price: 450000,
      beds: 5,
      baths: 3,
      size: '240m²',
      image: 'https://images.pexels.com/photos/259588/pexels-photo-259588.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1'
    },
    {
      location: 'Prishtina',
      type: 'Apartment',
      use: 'Buy',
      price: 750000,
      beds: 6,
      baths: 4,
      size: '300m²',
      image: 'https://images.pexels.com/photos/1438832/pexels-photo-1438832.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1'
    },
    {
      location: 'Gjilan',
      type: 'House',
      use: 'Buy',
      price: 600000,
      beds: 3,
      baths: 2,
      size: '120m²',
      image: 'https://images.pexels.com/photos/1396132/pexels-photo-1396132.jpeg'
    },
    {
      location: 'Prishtina',
      type: 'House',
      use: 'Rent',
      price: 600,
      beds: 4,
      baths: 2,
      size: '200m²',
      image: 'https://images.pexels.com/photos/208736/pexels-photo-208736.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1'
    },
    {
      location: 'Prishtina', 
      type: 'Apartment',
      use: 'Rent',
      price: 350,
      beds: 2,
      baths: 1,
      size: '70m²',
      image: 'https://images.pexels.com/photos/129494/pexels-photo-129494.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1'
    },
    {
      location: 'Peja',
      type: 'House',
      use: 'Buy',
      price: 450000,
      beds: 5,
      baths: 4,
      size: '300m²',
      image: 'https://images.pexels.com/photos/277667/pexels-photo-277667.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1'
    },
    {
      location: 'Peja',
      type: 'Apartment',
      use: 'Rent',
      price: 500,
      beds: 3,
      baths: 2,
      size: '100m²',
      image: 'https://images.pexels.com/photos/1918291/pexels-photo-1918291.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1'
    },
    {
      location: 'Mitrovica',
      type: 'House',
      use: 'Buy',
      price: 350000,
      beds: 4,
      baths: 2,
      size: '150m²',
      image: 'https://images.pexels.com/photos/323775/pexels-photo-323775.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1'
    },
    {
      location: 'Mitrovica', 
      type: 'Apartment',
      use: 'Rent',
      price: 300,
      beds: 2,
      baths: 1,
      size: '80m²',
      image: 'https://images.pexels.com/photos/681331/pexels-photo-681331.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1'
    },
    {
      location: 'Prishtina',
      type: 'House',
      use: 'Buy',
      price: 550000,
      beds: 5,
      baths: 4,
      size: '280m²',
      image: 'https://images.pexels.com/photos/209315/pexels-photo-209315.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1'
    },
    {
      location: 'Prishtina', 
      type: 'Apartment',
      use: 'Rent',
      price: 250,
      beds: 1,
      baths: 1,
      size: '50m²',
      image: 'https://images.pexels.com/photos/1571468/pexels-photo-1571468.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1'
    },
    {
      location: 'Ferizaj',
      type: 'House',
      use: 'Buy',
      price: 700000,
      beds: 6,
      baths: 5,
      size: '350m²',
      image: 'https://images.pexels.com/photos/259593/pexels-photo-259593.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1'
    },
    {
      location: 'Ferizaj', 
      type: 'Apartment',
      use: 'Buy',
      price: 250000,
      beds: 3,
      baths: 2,
      size: '120m²',
      image: 'https://images.pexels.com/photos/1743227/pexels-photo-1743227.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1'
    },
    {
      location: 'Gjakova',
      type: 'House',
      use: 'Rent',
      price: 650,
      beds: 2,
      baths: 1,
      size: '80m²',
      image: 'https://images.pexels.com/photos/164522/pexels-photo-164522.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1'
    },
    {
      location: 'Gjakova',
      type: 'Apartment',
      use: 'Rent',
      price: 700,
      beds: 3,
      baths: 2,
      size: '100m²',
      image: 'https://images.pexels.com/photos/205078/pexels-photo-205078.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1'
    },
    {
      location: 'Vushtrri',
      type: 'House',
      use: 'Buy',
      price: 350000,
      beds: 4,
      baths: 3,
      size: '220m²',
      image: 'https://images.pexels.com/photos/2893177/pexels-photo-2893177.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1'
    },
    {
      location: 'Vushtrri', 
      type: 'Apartment',
      use: 'Rent',
      price: 250,
      beds: 2,
      baths: 1,
      size: '90m²',
      image: 'https://images.pexels.com/photos/144632/pexels-photo-144632.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1'
    },
    {
      location: 'Peja',
      type: 'House',
      use: 'Buy',
      price: 400000,
      beds: 4,
      baths: 2,
      size: '180m²',
      image: 'https://images.pexels.com/photos/2183521/pexels-photo-2183521.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1'
    },
    {
      location: 'Peja', 
      type: 'Apartment',
      use: 'Rent',
      price: 800,
      beds: 3,
      baths: 2,
      size: '110m²',
      image: 'https://images.pexels.com/photos/1571453/pexels-photo-1571453.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1'
    },
    {
      location: 'Prishtina',
      type: 'House',
      use: 'Rent',
      price: 900,
      beds: 4,
      baths: 3,
      size: '250m²',
      image: 'https://images.pexels.com/photos/1170686/pexels-photo-1170686.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1'
    },
    {
      location: 'Prishtina', 
      type: 'Apartment',
      use: 'Buy',
      price: 100000,
      beds: 2,
      baths: 1,
      size: '85m²',
      image: 'https://images.pexels.com/photos/209292/pexels-photo-209292.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1'
    }
  ];
  
  
  document.addEventListener('DOMContentLoaded', () => {
    const locationInput = document.getElementById('location');
    const typeSelect = document.getElementById('property-type');
    const useSelect = document.getElementById('property-use');
    const priceRangeInput = document.getElementById('price-range');
    const priceValue = document.getElementById('price-value');
    const listingsContainer = document.querySelector('.listings');
    const filterForm = document.querySelector('.filter-form');
  
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
  
        propertyCard.innerHTML = `
          <img src="${property.image}" alt="${property.type} in ${property.location}">
          <div class="property-details">
            <h3>${property.type} in ${property.location}</h3>
            <p class="price">€${property.price.toLocaleString()}</p>
            <p>${property.beds} Beds | ${property.baths} Baths | ${property.size}</p>
            <button class="view-details">View Details</button>
          </div>
        `;
  
        listingsContainer.appendChild(propertyCard);
      });
    };
  

    filterForm.addEventListener('submit', (e) => {
      e.preventDefault();
  
      const location = locationInput.value.trim().toLowerCase();
      const propertyType = typeSelect.value;
      const propertyUse = useSelect.value;
      const maxPrice = parseInt(priceRangeInput.value);
  
      const filteredProperties = properties.filter(property =>
        property.location.toLowerCase().includes(location) &&
        (propertyType === 'any' || property.type.toLowerCase() === propertyType.toLowerCase()) &&
        (propertyUse === 'any' || property.use.toLowerCase() === propertyUse.toLowerCase()) &&
        property.price <= maxPrice
      );
  
      renderProperties(filteredProperties);
    });
  
    priceRangeInput.addEventListener('input', () => {
      priceValue.textContent = `€${priceRangeInput.value.toLocaleString()}`;
    });

    renderProperties(properties);
  });
