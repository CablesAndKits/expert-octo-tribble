<?php

// refactor this class to 8.3 standards
// all methods should have return types and prop types
// fix any bugs you find

class CalculateTotal
{
    public function __construct($subtotal, $tax, $shipping)
    {
        $this->subtotal = $subtotal;
        $this->tax = $tax;
        $this->shipping = $tax;
    }

    public function grandTotal()
    {
        return $this->subtotal + $this->tax + $this->shipping;
    }

    public function shipping()
    {
        return $this->shipping;
    }

    public function tax()
    {
        return $tax;
    }

    function subtotal()
    {
        return $this->subtotal;
    }
}

