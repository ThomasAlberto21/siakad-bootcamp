<?php ?>

<form method="post" action="{{url('/balok/add')}}">
    {{csrf_field()}}

    <table>
        <tr>
            <td>Panjang</td>
            <td>:</td>
            <td><input type="number" name="panjang"/></td>
        </tr>
        <tr>
            <td>Lebar</td>
            <td>:</td>
            <td><input type="number" name="lebar"/></td>
        </tr>
        <tr>
            <td>Tinggi</td>
            <td>:</td>
            <td><input type="number" name="tinggi"/></td>
        </tr>
        <tr>
            <td colspan="3"><input type="submit" value="Hitung Volume"/></td>
        </tr>
    </table>
</form>
