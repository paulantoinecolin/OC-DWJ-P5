// Mapbox
mapboxgl.accessToken =
    "pk.eyJ1IjoicGF1bGFudG9pbmVjb2xpbiIsImEiOiJjazBqYmdiYWIwOGFjM2huMTR0enVpejk1In0.DmB49AgRVNtdlx9L_HKZlQ";
var map = new mapboxgl.Map({
    container: "map",
    style: "mapbox://styles/mapbox/streets-v11", // stylesheet location
    center: [3.891701, 43.596278], // starting position [lng, lat]
    zoom: 16, // starting zoom
});

map.addControl(new mapboxgl.NavigationControl());

var marker = new mapboxgl.Marker().setLngLat([3.8918, 43.596204]).addTo(map);
