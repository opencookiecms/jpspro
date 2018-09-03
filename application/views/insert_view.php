<html>
<head>
<title>Insert Data Into Database Using CodeIgniter Form</title>
<link href='http://fonts.googleapis.com/css?family=Marcellus' rel='stylesheet' type='text/css'/>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/style.css" />
</head>
<body>

<div id="container">
<?php echo form_open('insert_ctrl'); ?>
<h1>Insert Data Into Database Using CodeIgniter</h1><hr/>
<?php if (isset($message)) { ?>
<CENTER><h3 style="color:green;">Data inserted successfully</h3></CENTER><br>
<?php } ?>
<?php echo form_label('No Sebutharga :'); ?> <?php echo form_error('nosebut'); ?><br />
<?php echo form_input(array('id' => 'nosebut')); ?><br />

<?php echo form_label('Tarikh Permohonan :'); ?> <?php echo form_error('tarikhmohon'); ?><br />
<?php echo form_input(array('id' => 'tarikhmohon')); ?><br />

<?php echo form_label('Jenis Sebutharga :'); ?> <?php echo form_error('jenissebut'); ?><br />
<?php echo form_input(array('id' => 'jenissebut')); ?><br />

<?php echo form_label('Tajuk Projek :'); ?> <?php echo form_error('tajukprojek'); ?><br />
<?php echo form_input(array('id' => 'tajukprojek', 'name' => 'tajukprojek')); ?><br />

<?php echo form_submit(array('id' => 'submit', 'value' => 'Submit')); ?>
<?php echo form_close(); ?><br/>
<div id="fugo">

</div>
</div>
</body>
</html>