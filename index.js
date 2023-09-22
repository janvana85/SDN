var map = L.map("map", {
  center: [50.05, 14.5],
  zoom: 11,
  layers: [
    L.tileLayer("http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png", {
      attribution: "Map data &copy; OpenStreetMap contributors",
    }),
  ],
  scrollWheelZoom: true,
});
