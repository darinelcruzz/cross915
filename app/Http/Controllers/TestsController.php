<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\MarkdownMail;
use Charts;

class TestsController extends Controller
{
    public function index()
    {
        $chart = Charts::multi('bar', 'material')
            // Setup the chart settings
            ->title("My Cool Chart")
            // A dimension of 0 means it will take 100% of the space
            ->dimensions(0, 400) // Width x Height
            // This defines a preset of colors already done:)
            ->template("material")
            // You could always set them manually
            // ->colors(['#2196F3', '#F44336', '#FFC107'])
            // Setup the diferent datasets (this is a multi chart)
            ->dataset('Element 1', [5,20,100])
            ->dataset('Element 2', [15,30,80])
            ->dataset('Element 3', [25,10,40])
            // Setup what the values mean
            ->labels(['One', 'Two', 'Three']);

        $markdown = "
# Rutina 1

### Ejericios

1. 10 de algo
2. 20 de otro
3. 15 de otro uno

           function () {

           }

Más info: [Google](https://www.google.com)

Inline-style:
![alt text](https://github.com/adam-p/markdown-here/raw/master/src/common/images/icon48.png \"Logo Title Text 1\")

> Victor Cancino

***
        ";

        return view('tests', compact('chart', 'markdown'));
    }

    function send()
    {
        Mail::to('victorjcg_6@hotmail.com')->send(new MarkdownMail);

        return back();
    }
}
