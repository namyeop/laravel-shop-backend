<main class='container-fluid'>
  <hgroup>
    <h1>Items - 티셔츠(기본)</h1>
  </hgroup>
  <div>
    <h3>상품정보</h3>
    <h4>티셔츠(기본)</h4>
    <h5>가격: 10,000원</h5>
    <form wire:submit='check'>
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
    $wire.on('check', () => {
      alert($wire.size + ' ' + $wire.color + ' 결제가 완료되었습니다.')
    })
  </script>
@endscript
