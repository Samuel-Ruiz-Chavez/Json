import json

# Objeto JSON-Python
jugador = {"nombres": "Lionel", "apellidos": "Messi", 
"fecha_nacimiento": "24-06-1987", "edad": 36,
"pais_nacimiento": "Argentina", "ciudad": "Rosario", 
"posición": "Delantero", "grupo_sanguíneo": "O+",
"nacionalidad": "Argentino"}

with open("Lionel-Messi.json", "w") as file:
    json.dump(jugador, file)


with open("Lionel-Messi.json", "r") as file:
    jugador = json.load(file)

print("Nombres:",
                jugador["nombres"])
print("Apellidos:", 
                jugador["apellidos"])
print("Fecha de nacimiento:", 
                jugador["fecha_nacimiento"])
print("Edad:",
                jugador["edad"])
print("País de nacimiento:",
                jugador["pais_nacimiento"])
print("Ciudad:", 
                jugador["ciudad"])
print("Posición:", 
                jugador["posición"])
print("Grupo sanguíneo:", 
                jugador["grupo_sanguíneo"])
print("Nacionalidad:", 
                jugador["nacionalidad"])