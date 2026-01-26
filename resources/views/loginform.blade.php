@extends("components.layout")
@section("content")
    <h1>hallo op de login pagina</h1>


<div>
  <form action="method">
    <input type="email">
    <input type="password">
     <label for="klas">kies je klas:</label>
  <select name="klas" id="klas">

    <option value="palvsod1A">palvsod1A</option>
    <option value="palvsod1b">palvsod1b</option>
    <option value="palvsod1C">palvsod1C</option>
    <option value="palvsod2A">palvsod2A</option>
    <option value="palvsod2b">palvsod2b</option>
    <option value="palvsod2C">palvsod2C</option>
    <option value="palvsod3A">palvsod3A</option>
    <option value="palvsod3b">palvsod3b</option>
    <option value="palvsod3C">palvsod3C</option>
    </select>
    <label for="klas">kies je keuzedeel:</label>
  <select name="keuzedeel" id="keuzedeel">
    <option value="keuzedeel"></option>
    <option value="keuzedeel1">keuzedeel1</option>
    <option value="keuzedeel2">keuzedeel2</option>
    <option value="keuzedeel3">keuzedeel3</option>
    <option value="keuzedeel4">keuzedeel4</option>
    <option value="keuzedeel5">keuzedeel5</option>
    <option value="keuzedeel6">keuzedeel6</option>
    <option value="keuzedeel7">keuzedeel7</option>
    <option value="keuzedeel8">keuzedeel8</option>
    <option value="keuzedeel9">keuzedeel9</option>
    </select>
  </form>
</div>

@endsection