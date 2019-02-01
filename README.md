# escaptcha
EScaptcha es una solución en PHP gratis y opensource para generar CAPTCHAS seguros dependientes del idioma del usuario.

El objetivo de EScaptcha es generar desafíos en forma de imagen para distinguir usuarios reales de software automatizado, para ello implementa distintas técnicas para evitar software de Reconocimiento Óptico de Caracteres (OCR) y/o el envío del desafío a servicios de resolución de captcha online.

# Técnicas para evitar OCR
 - Uso de fuentes con ligaduras
 - Uso de letras minisculas en forma de palabras
 - Uso de dos líneas de texto
 - Uso de transformaciones aleatorias
 - Uso de baja calidad JPEG

# Técnicas para evitar Captcha Solving Services
 - Incrustar la imagen en base64
 - Dividir en varias imágenes el mismo desafío *Por implementar
 - Rotar o transformar la imagen, deshacer la transformacion al mostrarla *Por implementar
 
# Ejemplos
![Ejemplos de Captcha](https://i.imgur.com/4KAV4zr.png)

# Pruebas en Captcha Solving Services
Podemos apreciar como soluciones como [KCAPTCHA 2.0](http://www.captcha.ru/en/kcaptcha/) son facilmente reconocidas.

![Otros captchas](https://i.imgur.com/uLvkZWJ.png)

En cambio fallan al reconocer EScaptcha.

![EScaptcha](https://i.imgur.com/ExbM5X4.png)
