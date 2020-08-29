<?php  include_once('./layout/header.php');
       include_once('./data/countryArray.php');
?>

    <div class="row">
        <div class="col s12"> <label>Materialize Select</label></div>
        <div class="col s6">
            <select class="select-two">
                <option value="" disabled selected>Choose your option</option>
                <?php foreach($countries as $value){
                    echo "<option value= '".$valve."'>".$value."</option>";
                } 
                ?>
            </select>
        </div>
        <div class="col s6">
         <select class="select-two-mul"  name="states[]" multiple="multiple">
                <!-- <option value="" disabled selected>Choose your option</option> -->
                <?php foreach($countries as $value){
                    echo "<option value= '".$valve."'>".$value."</option>";
                } 
                ?>
            </select>
        </div>
    </div>    
<?php include_once('./layout/footer.php'); ?>