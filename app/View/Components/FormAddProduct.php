<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class FormAddProduct extends Component
{
    /**
     * Create a new component instance.
     */
    public $dataCategory;
    public $dataPartner;

    public function __construct($dataCategory, $dataPartner)
    {
        $this->dataCategory = $dataCategory;
        $this->dataPartner = $dataPartner;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.form-add-product');
    }
}
