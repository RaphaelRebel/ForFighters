@extends('layouts.workspace')
    @section('content')
        <div class="form-div">
            <h2>vrijwilliger worden?<br> Meld je nu aan!</h2>
            <div class="form-formulier">

                <form action="">
                    <label for="voornaam">voornaam:</label><br>
                    <input type="text" id="voornaam" name="voornaam"><br>
                    <label for="achternaam">achternaam:</label><br>
                    <input type="text" id="achternaam" name="achternaam"><br>
                    <label for="email">email:</label><br>
                    <input type="email" id="email" name="email"><br>
                    <label for="motivatie">motivatie:</label><br>
                    <textarea name="motivatie" id="motivatie" cols="30" rows="4"></textarea><br>
                    <input type="submit" value="Submit" class="submit">
                </form>
            </div>
        </div>

    @Stop
