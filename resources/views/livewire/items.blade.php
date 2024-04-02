<main class='container-fluid'>
  <hgroup>
    <h1>Items - 티셔츠(기본)</h1>
  </hgroup>
  <div>
    <h3>상품정보</h3>
    <h4>티셔츠(기본)</h4>
    <h5>가격: 10,000원</h5>
    <form wire:submit='submit'>
      <fieldset>
        <legend>Size</legend>
        <input wire:model='size' type="radio" id="S" name="size" value="S" checked />
        <label htmlFor="S">S</label>
        <input wire:model='size'type="radio" id="M" name="size" value="M" />
        <label htmlFor="M">M</label>
        <input wire:model='size' type="radio" id="L" name="size" value="L" />
        <label htmlFor="L">L</label>
      </fieldset>
      <fieldset>
        <legend>Color</legend>
        <input wire:model='color' type="radio" id="blue" name="color" value='blue' checked />
        <label htmlFor="blue">blue</label>
        <input wire:model='color' type="radio" id="red" name="color" value='red' />
        <label htmlFor="red">Red</label>
        <input wire:model='color' type="radio" id="green" name="color" value='green' />
        <label htmlFor="green">Green</label>
      </fieldset>
      <input type="submit" value="결제" />
    </form>
  </div>
</main>

@script
  <script>
    $wire.on('check', async () => {
      const response = await PortOne.requestPayment({
        // Store ID 설정
        storeId: "store-51dbc029-90c0-4103-a648-d1145a96db91",
        // 채널 키 설정
        channelKey: "channel-key-ff0b4d74-bc27-431a-9fbd-b22b2126c77b",
        paymentId: `payment-${crypto.randomUUID()}`,
        orderName: "티셔츠(기본) - " + $wire.size + " - " + $wire.color,
        totalAmount: 10000,
        currency: "CURRENCY_KRW",
        payMethod: "CARD",
        redirectUrl: `http://localhost/payment-redirect`,
      });

      console.log(response)
    })
  </script>
@endscript
