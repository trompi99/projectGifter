<?php

namespace App\View\Components;

use Illuminate\View\Component;

class cardItemSale extends Component
{
    public $name;
    public $description;
    public $price;
    public $idProd;
    public $sale;
    public $img;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($name, $description, $price, $idProd, $sale, $img)
    {
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
        $this->idProd = $idProd;
        $this->sale = $sale;
        $this->img = $img;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.card-item-sale');
    }
}
