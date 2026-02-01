@extends("components.layout")
@section("content")
    <h1>welkom op de login pagina</h1>


<div id="list">
  <form action="method">
    <label for="email">Enter your email:
    <input type="email" name="email" class="border"></label>
    <label for="password">Enter your password:
    <input type="password" name="password" class="border"></label>
     <label for="klas">kies je klas:
  <select name="klas" id="klas" class="border">

    <option value="palvsod1A"></option>
    <option value="palvsod1A">palvsod1A</option>
    <option value="palvsod1b">palvsod1b</option>
    <option value="palvsod1C">palvsod1C</option>
    <option value="palvsod2A">palvsod2A</option>
    <option value="palvsod2b">palvsod2b</option>
    <option value="palvsod2C">palvsod2C</option>
    <option value="palvsod3A">palvsod3A</option>
    <option value="palvsod3b">palvsod3b</option>
    <option value="palvsod3C">palvsod3C</option>
    </select></label>
    <label for="klas">kies je keuzedeel:
  <select name="keuzedeel" id="keuzedeel" class="border">
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
    </select></label>
    <input type="submit" value="Submit" class="border">
  </form>
</div>

@endsection