<!-- Title and guide text  -->

<style> 
  .newspaper_col {
   -webkit-columns: 100px 2; /* Chrome, Safari, Opera */
   -moz-columns: 100px 2; /* Firefox */
    columns: 100px 2;
	    }
</style>


<div>
  <h1>Available resources for legume species at LIS</h1>
  <span></span>
</div>

<hr/>
<div id="debgMessage">
        <?php
        //echo "<pre>";
        //print_r($excel_array);
        //print_r($excel_array['sheet1_species'][1]);
        //print_r($headers_array);
        //print($excel_array['sheet1_species'][1]['4']);
        
        //print_r($excel_array);
        //print_r(array_keys($excel_array[0])); // gives the keys
        //print($excel_array[0]['mapsKey']);  //works
        
        //echo "</pre>";
    ?>
</div>

<div id="speciescontent"   class="newspaper_col">
    <?php
         echo $species_html;
    ?>
</div>    


<!-- SCRATCH PAD  -->

