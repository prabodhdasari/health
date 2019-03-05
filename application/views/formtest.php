
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
<?php


?>
<h1>Hello world</h1>
<h2><?php echo $this->session->flashdata('message'); ?></h2>


<div class="row ml-5">
    <div class="ml-3 col-md-5 ml-4">
        <?php

        echo 
        form_open('general/addNewOrUpdate');

    echo 
form_label(ucfirst('what is your Name'), 'username');
echo '<br><br>';
$fruits=array('banana','apple','oranges','lemon','grapes','water melon');
sort($fruits);
 
//form_input('name', 'value', $attributes);

// $data = array(
//     'name'          => 'username',
//     'id'            => 'username',
//     'value'         => 'johndoe',
//     'maxlength'     => '100',
//     'size'          => '50',
//     'style'         => 'width:50%'
// );

echo 'First Name'.form_input('fname',set_value('fname'));
echo '<br><br>';

echo 'Last Name'.form_input('lname',set_value('lname'));
echo '<br><br>';

echo 'Address'.form_input('address',set_value('address'));
echo '<br><br>';

echo 
form_dropdown('fr',($fruits)  );
echo '<br><br>';

echo 
form_multiselect('fm[]',$fruits,set_value('fm[]'));
echo '<br><br>';

foreach ($fruits as $key => $v) {
    echo 
    form_checkbox('fc[]',($v), set_checkbox('fc',$v)).ucfirst($v);
}
echo '<br><br>';

foreach ($fruits as $key => $v) {
    echo form_radio('fr[]',($v), set_radio('fr',$v)).ucfirst($v);

}
echo '<br><br>';

echo 
form_submit('Submit', 'Send to server');


echo 
form_close();



?>
    </div>
    <div class="col-md-6">
        <?php 

            if($records){ ?>

            <div class="table">
<table >
    <thead>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Address</th>
    </thead>
    <body>
    
<?php 
foreach ($records as $key ) {
   echo '<tr><td>'.$key->fname.'</td>';
   echo '<td>'.$key->lname.'</td>';
   echo '<td>'.$key->address.'</td></tr>';
}

?>
    
       

    </body>
</table>

            </div>                


          <?php  }?>
    </div>
</div>



</body>
</html>