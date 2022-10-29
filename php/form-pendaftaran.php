<h1>FORM PENDAFTARAN </h1>
<form action= "proses-form-pendaftaran.php" method= "POST">
    <div>
        <label> Nama </label> <br>
        <input type="text" name= "nama">
    </div>
    <div>
        <label> Email </label> <br>
        <input type="email" name= "email">
    </div>
    <div>
        <label> Usia </label> <br>
        <input type="number" name= "usia">
    </div>
    <div>
        <label> Tanggal Lahir </label> <br>
        <input type="date" name= "tanggal_lahir">
    </div>
    <div>
        <label> Alamat </label> <br>
        <textarea name="alamat"> </textarea>
    </div>
    <div
        style="margin-bottom: 1rem;">
        <label> Gender </label> <br>
        <select name="gender">
            <option value="pria"> Pria </option>
            <option value="perempuan"> Perempuan </option>
        </select>
    </div>
    <div
        style="margin-bottom: 1rem;">
        <label> Status </label> <br>
        <select name="status">
            <option value="lajang"> Lajang </option>
            <option value="menikah"> Menikah </option>
        </select>
    </div>
    <div style= "margin-bottom: 1rem;">
        <label> Hobi </label> <br>
        <input type= "checkbox" name= "hobi[]" value= "basket"> Basket <br>
        <input type= "checkbox" name= "hobi[]" value= "badminton"> Badminton <br>
        <input type= "checkbox" name= "hobi[]" value= "mendengar musik"> Mendengar Musik <br>
        <input type= "checkbox" name= "hobi[]" value= "berenang"> Berenang <br>
    </div>
    <div>
        <button> SUBMIT </button>
    </div>
    
</form>