import folium
from folium.plugins import HeatMap

# Coordenadas de las ciudades
coordenadas = {
    'Pachuca': (20.1167, -98.7333),
    'Tulancingo': (20.0838, -98.3672),
    'Puebla': (19.0414, -98.2063),
    'Querétaro': (20.5881, -100.3899),
    'Puerto Vallarta': (20.6534, -105.2253)
}

# Punto central de México
punto_central = (23.6345, -102.5528)

# Crea el mapa de Folium
m = folium.Map(location=punto_central, zoom_start=5)

# Agrega marcadores con las coordenadas de las ciudades
for ciudad, coord in coordenadas.items():
    folium.Marker(location=coord, popup=ciudad).add_to(m)

# Guarda el mapa en un archivo HTML
m.save('mapa_ciudades.html')
