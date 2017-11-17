<?php

namespace App\Http\ViewComposers;

use Illuminate\View\View;

class WorkoutViews
{
    function compose(View $view)
    {
        $view->instructions = <<<EOD

## Título o encabezado

Formato a las palabras:
_guiones bajos_, **asteriscos** o `comillas`.

Para hacer listas:

+ Utiliza el símbolo `+`
* O asteriscos
- O el signo `-`
EOD;
    }
}
