<script type="text/javascript" src="<?php echo base_url(); ?>js/app/game_related_action.js"></script>
<script type="text/javascript">
var tournaments = eval(<?php echo $tournaments_json; ?>);
</script>
<script type="text/javascript" src="<?php echo base_url(); ?>js/app/home_action.js"></script>


<?php
echo '<h2>Welcom to SGMA, ' . $username . ' !!</h2>'; 
echo anchor('login/logout', 'Logout');

echo '<br>';
echo anchor('tournament/createForm', 'Create a new Tournament');
echo '<br>';
echo anchor('cup/createForm', 'Create a new Cup');
?>



<div id="tournament_list">
<?php
echo '<p>Tournaments I\'m in!</p>';

if(isset($tournaments)){
	echo '<ul type="disc">';
	foreach($tournaments as $q_result){
		echo '<li>' . 
		anchor("tournament/open/$q_result->cup/$q_result->tournament"
				, $q_result->cup . $q_result->tournament) .
		 '</li>';
	}
	/*
	foreach($tournaments as $q_result){
	    echo '<li><div id="' . $q_result->cup .$q_result->tournament .'">' .
	       	    $q_result->cup . ' ' .$q_result->tournament .
	    '</div></li>';
	}
	*/
	foreach($tournaments as $q_result){
	    echo '<li><input type="button" id="';
	    echo $q_result->cup . $q_result->tournament . '"';
	    echo 'value="' . $q_result->cup . ' ' . $q_result->tournament . '"';
	    echo 'name="' . $q_result->cup . '/' . $q_result->tournament . '"';
	    echo '></input></li>';
	}
	echo '</ul>';
	
}else{
	echo '<p>I\'m not particiated in any tournament.</p>';
}
?>
</div>


<!--
TODO
I got to move the following elements to *_tornament_form.php
so that those elements are to created on deamnd. not statically as
it is created in home_page.php 
 -->

<div id="tournament"></div>
<div id="participants"></div>
<div id="games"></div>
<!-- 
<div id="tournament_chart"></div>
<div style="width: 600px; height: 200px">
<table class="claro" dojoType="dojox.grid.DataGrid" id="myDataGrid">
</table>
 -->


<div id="tournament_chart" class="claro" >
    <div id="tournametChart" dojoType="dojox.grid.DataGrid"></div>
    <div id="cupOfCurrentDisplayedChart" title=""></div>
    <div id="tournamentOfCurrentDisplayedChart" title=""></div>
</div>

<div dojoType="dojox.widget.Toaster" id="toast" positionDirection="tl-down"></div>


