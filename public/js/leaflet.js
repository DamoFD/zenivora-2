var map = L.map('map').setView([39.5527725, -119.7954097], 15);

L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '© OpenStreetMap contributors'
}).addTo(map);

var marker = L.marker([39.5527725, -119.7954097]).addTo(map);

marker.bindPopup("<b>Zenivora</b><br>2390 Tripp Dr #2<br>Reno, NV 89512").openPopup();
