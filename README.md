# escaptcha
EScaptcha es una solución en PHP gratis y opensource para generar CAPTCHAS seguros dependientes del idioma del usuario.

El objetivo de EScaptcha es generar desafíos en forma de imagen para distinguir usuarios reales de software automatizado, para ello implementa distintas técnicas para evitar software de Reconocimiento Óptico de Caracteres (OCR) y/o el envío del desafío a servicios de resolución de captcha online.

# Técnicas para evitar OCR
 - Uso de fuentes con ligaduras
 - Uso de letras minisculas en forma de palabras
 - Uso de dos líneas de texto
 - Uso de transformaciones aleatorias

# Técnicas para evitar Captcha Solving Services
 - Incrustar la imagen en base64
 - Dividir en varias imágenes el mismo desafío *Por implementar
 - Rotar o transformar la imagen, deshacer la transformacion al mostrarla *Por implementar
