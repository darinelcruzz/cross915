@component('mail::message')
# Correo de prueba

Este es el cuerpo del correo.
Aquí va el mensaje a enviar.

@component('mail::panel')
Esto es un panel (lo que sea que eso signifique).
@endcomponent

@component('mail::table')
| Miembro       | Edad         | Mensualidad  |
| ------------- |:-------------:| --------:|
| Dari      | 25      | $10      |
| Vico      | 30 | $20      |
@endcomponent

@component('mail::button', ['url' => 'https://images.pexels.com/photos/265987/pexels-photo-265987.jpeg?w=940&h=650&auto=compress&cs=tinysrgb', 'color' => 'green'])
ya despierta bebééééééé
@endcomponent

Gracias,<br>
Víctor Cancino
@endcomponent
