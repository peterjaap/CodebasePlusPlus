<?php
header("Access-Control-Allow-Origin: *");
require_once 'bin/Codebase.class.php';
require_once 'bin/functions.php';

$user = $_GET['username'];
$apikey = $_GET['apikey'];
$parts = explode('/',$user);
$hostname = $parts[0];
$username = $parts[1];

$c = new Codebase($user,$apikey,$hostname,'s');

$projects = $c->projects();

foreach($projects as $project) {
	foreach($c->tickets($project['name']) as $ticket) {
		if($ticket['status']['name']!='Completed') {
			if(!isset($ticket['deadline']['@attributes']['nil']) AND $ticket['assignee']==$username) {
				$row['project'] = $project['name'];
				$row['ticket-id'] = $ticket['ticket-id'];
				$row['title'] = $ticket['summary'];
				$row['deadline'] = date("d-m-Y",strtotime($ticket['deadline']));
				$row['relative'] = relativeTime(strtotime($row['deadline']));
				$rows[] = $row; 
			}
		}
	}
}
?>
<table class="data tickets">
<thead>
<tr>
<?php foreach(array_keys($rows[0]) as $key) { ?>
	<td class="<?php echo $key ?>">
		<?php echo ucwords($key); ?>
	</td>
<?php } ?>
</tr>
</thead>
<tbody>
	<?php foreach($rows as $row) { ?>
	<tr class="o open">
		<?php foreach($row as $key=>$value) { ?>
		<td class="<?php echo $key ?>">
			<a href="/projects/<?php echo strtolower($row['project']); ?>/tickets/<?php echo $row['ticket-id']; ?>"><?php echo $value;?></a>
		</td>
		<?php } ?>
	</tr>
	<?php } ?>
</tr>
</tbody>
<tfoot>
</tfoot>
</table>