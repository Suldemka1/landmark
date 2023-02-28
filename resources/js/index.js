let map;

const fetchAPI = async () => {
  const data = await fetch('https://api.rmc.rtyva.ru/api/warehouses?populate=*')
    .then((res) => res.json())
    .then((res) => res.data)

  return await data
}

DG.then(async function () {
  map = DG.map('map', {
    center: [51.58, 93.89],
    zoom: 13
  });

  const data = await fetchAPI()

  data.forEach(element => {
    DG.marker([element.address.longitude, element.address.latitude])
      .addTo(map)
      .bindPopup(element.title);
  });

});
