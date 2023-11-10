<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class RadioGroup extends Component
{

    public function __construct(public string $name, public array $options, public bool $showAll = true)
    {
        //
    }


    public function render(): View|Closure|string
    {
        return view('components.radio-group');
    }
}
