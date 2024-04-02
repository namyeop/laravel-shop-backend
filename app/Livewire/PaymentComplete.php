<?php

namespace App\Livewire;

use Livewire\Component;

class PaymentComplete extends Component
{
    public $paymentResult;
    public $orderNumber;

    public function mount()
    {
        $this->paymentResult = request()->input('paymentResult');
        $this->orderNumber = request()->input('paymentId');
    }

    public function render()
    {
        return view('livewire.payment-complete');
    }
}
