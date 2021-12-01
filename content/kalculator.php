<h1>Valluta kalkulaator var 1</h1>
<form name="var1" onclick="return validateForm()" method="post">
    <label for="kogus">Sisesta kogus:</label>
    <input type="number" name="kogus" id="kogus"> euro
    <br>
    <fieldset>
        <legend>Vali valuuta:</legend>

        <input type="radio" name="valuuta" id="dollar" value="dollar" onchange="radioChange(event)">
        <label for="dollar">dollar</label>
        <br>
        <input type="radio" name="valuuta" id="rub" value="rub" onchange="radioChange(event)">
        <label for="rub">rouble</label>
        <br>
        <input type="radio" name="valuuta" id="kroon" value="kroon" onchange="radioChange(event)">
        <label for="kroon">Rootsi kroon</label>
        <br>
        <input type="radio" name="valuuta" id="frank" value="frank" onchange="radioChange(event)">
        <label for="frank">Sveitsi frank</label>
        <br>
    </fieldset>
    <div id="vastus">
        Siia tuleb vastus...
    </div>
</form>

<img src="images/money1.png" id="pilt" alt="picture">

<h1>Valluta kalkulaator var 2</h1>
<form name="var2">
    <label for="kogus2">Sisesta kogus:</label>
    <input type="number" name="kogus2" id="kogus2"> euro
    <br>
    <select name="valuuta2" onchange="selectOptionChange(event)">
        <option value=""></option>
        <option value="dollar">dollar</option>
        <option value="kroon">Rootse kroon</option>
        <option value="frank">Sveitsi frank</option>
        <option value="rub">Rouble</option>
    </select>
    <div id="vastus2">
        Siia tuleb vastus...
    </div>
</form>

<h1>Valluta kalkulaator var 3</h1>
<form>
    <label for="kogus3">Sisesta kogus:</label>
    <input type="number" name="kogus3" id="kogus3"> euro
    <br>
    <label for="valuutanimi">Sisesta kogus (dollar, rouble, frank, kroon):</label>
    <input type="text" name="kogus3" id="valuutanimi" placeholder="Valuuta"> euro
    <input type="button" onclick="inputValutaText()" value="OK">

    <div id="vastus3">
        Siia tuleb vastus...
    </div>
</form>

<form>
    <div id="ownCal">
        <h1>My calculator</h1>
        <label for="kogus4">Hectar:</label>
        <input type="number" name="kogus4" id="kogus4">

        <select name="valuuta4" onchange="ownCal(event)">
            <option value=""></option>
            <option value="dm2">dm2</option>
            <option value="m2">m2</option>
            <option value="km2">km2</option>
        </select>
        <div id="vastus4">
            Here will be the answer...
        </div>
    </div>

</form><?php
