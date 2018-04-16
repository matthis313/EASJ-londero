# HOW TO STUFF

Jeg prøver at smide små stumper information ind i dette dokument. 
Hvis I har nogen spørgsmål kan I jo eventuelt skrive dem her - så skal jeg forsøge at omforme det til noget regulær tekst der svarer på spørgsm

## GIT
Først - læs lidt om git pull vs git fetch + git merge
https://longair.net/blog/2009/04/16/git-fetch-and-merge/

Det kan være I skal tage det endnu mere roligt og bruge git fetch (henter ændringerne fra repoet ned) efterfulgt af git merge der så giver jer mulighed for at merge eventuelle konflikter.
(det kan så være en god ide at lade VS Code foretage automatisk git fetch som den foreslår ;))

## PHP

## Navngivning af Modeller og Controllere
Modeller (som User.php) navngives i singularis, altså som var det EN bruger.
Det samme gør man ofte også med controllere så i jeres tilfælde ville det være ProductController, PageController og SkillsController.

## Eksempel opslag i database
Fx opslag på alle produkter i ProductsController->index() (forudsætter at I har en Products model ligesom \app\User.php) - og at tabellen er oprettet naturligvis.


**ProductsController.php**
```php
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Products; // husk at inkludere modellen der skal arbejdes på

class ProductsController extends Controller
{
    public function index() {
        // henter alle rækker i tabellen.
        $products = Products::all(); 

        // vi lægger dem over i et array som vi kalder data - vi vil ofte have flere ting med ud til vores view.
        // ude i viewet vil products være tilgængeligt som $products
        $data['products'] = $products; 

        // få vist viewet og send data med ud til det.
        return view('products.index')->with($data);
    }
}
```

**ProductsController.php**
```html
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    <table>
                        <tr><th>id</th><th>title</th><th>price</th></tr>
                        @foreach($products as $product)
                            <tr><td>{{ $product->id }}</td><td>{{ $product->title }}</td><td>{{ $product->price }}</td></tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
```


## iTERM
Det vil også virke i andet end iTERM - men giver noget mere farvespræl så man kan se hvad der sker.
Jeg skal nok finde noget til selve iTERM så I får lidt mere sigende farver på.

´´´
Get happy Git colors. Paste the following into your ~/.gitconfig file:

[color]
	branch = auto
	diff = auto
	status = auto
[color "branch"]
	current = yellow reverse
	local = yellow
	remote = green
[color "diff"]
	meta = yellow bold
	frag = magenta bold
	old = red bold
	new = green bold
[color "status"]
	added = yellow
	changed = green
	untracked = cyan
´´´

## Commandline stuff

## Spørgsmål fra teamet
