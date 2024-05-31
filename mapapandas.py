import pandas as pd
import folium

# Function to calculate the price per square meter
def calculate_price_per_m2(row):
    try:
        return row['Precio'] / row['metros_total']
    except:
        return None

# Function to determine the color of the marker based on the average price
def price_category_color(avg_price):
    if avg_price <= 500000:
        return 'green'  # E1
    elif avg_price <= 750000:
        return 'green'  # E2
    elif avg_price <= 1000000:
        return 'green'  # E3
    elif avg_price <= 1250000:
        return 'yellow'  # D1
    elif avg_price <= 1500000:
        return 'yellow'  # D2
    elif avg_price <= 1750000:
        return 'yellow'  # D3
    elif avg_price <= 2000000:
        return 'blue'  # C1
    elif avg_price <= 2250000:
        return 'blue'  # C2
    elif avg_price <= 2500000:
        return 'blue'  # C3
    elif avg_price <= 2750000:
        return 'purple'  # B1
    elif avg_price <= 3000000:
        return 'purple'  # B2
    elif avg_price <= 3250000:
        return 'purple'  # B3
    elif avg_price <= 3500000:
        return 'orange'  # A1
    elif avg_price <= 3750000:
        return 'orange'  # A2
    elif avg_price <= 4000000:
        return 'orange'  # A3
    elif avg_price <= 6000000:
        return 'red'  # S1
    elif avg_price <= 8000000:
        return 'red'  # S2
    elif avg_price <= 12000000:
        return 'red'  # S3
    else:
        return 'red'  # S+

# Function to determine the price category based on the average price
def price_category(avg_price):
    categories = {
        'E1': (0, 500000), 'E2': (500001, 750000), 'E3': (750001, 1000000),
        'D1': (1000001, 1250000), 'D2': (1250001, 1500000), 'D3': (1500001, 1750000),
        'C1': (1750001, 2000000), 'C2': (2000001, 2250000), 'C3': (2250001, 2500000),
        'B1': (2500001, 2750000), 'B2': (2750001, 3000000), 'B3': (3000001, 3250000),
        'A1': (3250001, 3500000), 'A2': (3500001, 3750000), 'A3': (3750001, 4000000),
        'S1': (4000001, 6000000), 'S2': (6000001, 8000000), 'S3': (8000001, 12000000),
        'S+': (12000001, float('inf'))
    }
    for category, (lower, upper) in categories.items():
        if lower <= avg_price <= upper:
            return category
    return 'Unknown'

# Load the dataset
file_path = 'modified_datarealpachuca.xlsx'  # Update with the path to your Excel file
data_pachuca = pd.read_excel(file_path)

# Data cleaning and preprocessing
numeric_columns = ['Precio', 'metros_total', 'metros_construido', 'banos', 'recamaras', 'estacionamientos']
data_pachuca[numeric_columns] = data_pachuca[numeric_columns].apply(pd.to_numeric, errors='coerce')

# Calculate price per square meter for each property
data_pachuca['Precio por M2'] = data_pachuca.apply(calculate_price_per_m2, axis=1)

# Grouping by 'Colonia' and calculating required statistics
grouped_data = data_pachuca.groupby('Colonia').agg(
    avg_latitude=('latitud', 'mean'),
    avg_longitude=('longitud', 'mean'),
    avg_price=('Precio', 'mean'),
    median_price=('Precio', 'median'),
    avg_bathrooms=('banos', 'mean'),
    median_bathrooms=('banos', 'median'),
    avg_bedrooms=('recamaras', 'mean'),
    median_bedrooms=('recamaras', 'median'),
    avg_parking_spaces=('estacionamientos', 'mean'),
    median_parking_spaces=('estacionamientos', 'median'),
    avg_constructed_area=('metros_construido', 'mean'),
    median_constructed_area=('metros_construido', 'median'),
    avg_total_area=('metros_total', 'mean'),
    median_total_area=('metros_total', 'median'),
    avg_price_per_m2=('Precio por M2', 'mean'),
    median_price_per_m2=('Precio por M2', 'median')
).reset_index()

# Create a map centered around Pachuca
pachuca_map = folium.Map(location=[20.11697, -98.73329], zoom_start=13)

# Adding markers to the map with formatted information
for _, row in grouped_data.iterrows():
    # Format the information for the popup
    popup_info = folium.Html(
        f"<b>{row['Colonia']}</b><br>"
        f"Categoría de Precio: {price_category(row['avg_price'])}<br>"
        f"Precio Promedio: {row['avg_price']:,.0f} MXN<br>"
        f"Precio Mediano: {row['median_price']:,.0f} MXN<br>"
        f"Baños Medianos: {row['median_bathrooms']:.0f}<br>"
        f"Precio Mediano por m²: {row['median_price_per_m2']:,.0f} MXN<br>"
        f"Recámaras Medianas: {row['median_bedrooms']:.0f}<br>"
        f"Estacionamientos Medianos: {row['median_parking_spaces']:.0f}<br>"
        f"Área Construida Mediana: {row['median_constructed_area']:.0f} m²<br>"
        f"Área Total Mediana: {row['median_total_area']:.0f} m²", script=True)

    popup = folium.Popup(popup_info, max_width=300)
    folium.CircleMarker(
        location=[row['avg_latitude'], row['avg_longitude']],
        radius=10, # 10 pixels diameter
        color=price_category_color(row['avg_price']),
        fill=True,
        fill_opacity=0.7,
        popup=popup
    ).add_to(pachuca_map)

# Save the map as an HTML file
output_file_path = 'pachuca_property_map_formatted.html'
pachuca_map.save(output_file_path)
Contraer