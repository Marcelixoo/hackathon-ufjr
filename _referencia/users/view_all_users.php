<?php
/*
UserSpice 4
An Open Source PHP User Management System
by the UserSpice Team at http://UserSpice.com

This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program.  If not, see <http://www.gnu.org/licenses/>.
*/
?>
<?php require_once 'init.php'; ?>
<?php require_once $abs_us_root.$us_url_root.'users/includes/header.php'; ?>
<?php require_once $abs_us_root.$us_url_root.'users/includes/navigation.php'; ?>

<?php if (!securePage($_SERVER['PHP_SELF'])){die();} ?>
<?php
//PHP Goes Here!

if($user->isLoggedIn()) { $thisUserID = $user->data()->id;} else { $thisUserID = 0; }

$userQ = $db->query("SELECT * FROM users LEFT JOIN profiles ON users.id = user_id ");
// group active, inactive, on naughty step
$users = $userQ->results();

$users_profiles = [];

/*Retorna os grupos ao qual o usuário pertence*/
foreach ($users as $profile) {
	$users_ids = [];
	$permissions = $db->query("SELECT permission_id FROM user_permission_matches WHERE user_id = ? AND user_id !=" . $thisUserID . "", array($profile->id));
	$permission = $permissions->results();
	for ($i = 0, $max = count($permission); $i < $max; $i++) {
		array_push($users_ids, $permission[$i]->permission_id);
	}
	array_push($users_profiles, $users_ids);
}

$user_permissions = [];

/*Terminar esta parte aqui --> mostrar os grupos de cada usuário*/
foreach ($users_profiles as $group) {
	$user_permissions_temp = [];
	for ($j = 0, $max = count($group); $j < $max; $j++) {
		$permissionProfiles = $db->query("SELECT name FROM permissions WHERE id = ?", array($group[$j]));
		$permissionProfilesResults = $permissionProfiles->results();
		array_push($user_permissions_temp, $permissionProfilesResults[0]->name);
	}
	array_push($user_permissions, $user_permissions_temp);
}

?>
<div id="page-wrapper">

  <div class="container">

    <!-- Page Heading -->
    <div class="row">

      <div class="col-xs-12 col-md-6">
		<h1 >View All Users</h1>
	  </div>

	  <div class="col-xs-12 col-md-6">
			<form class="">
				<label for="system-search">Search:</label>
				<div class="input-group">
                    <input class="form-control" id="system-search" name="q" placeholder="Search Users..." type="text">
                    <span class="input-group-btn">
						<button type="submit" class="btn btn-default"><i class="fa fa-times"></i></button>
                    </span>
                </div>
			</form>
		  </div>

	 </div>

		 <div class="row">
		     <div class="col-md-12">


<hr />
 <div class="allutable table-responsive">
<table class='table table-hover table-list-search'>
<thead>
<tr>
  <th><div class="alluinfo">&nbsp;</div></th>
  <th>Username</th>
 </tr>
</thead>
 <tbody>
<?php
//Cycle through users
$count = 0; /*Variável salvadora da pátria!*/
foreach ($users as $v1) {

	$ususername = ucfirst($v1->username);
	$ususerbio = ucfirst($v1->bio);
	$grav = get_gravatar(strtolower(trim($v1->email)));
	$useravatar = '<img src="'.$grav.'" class="img-responsive img-thumbnail" alt="'.$ususername.'">';

?>

	<tr>
		<td>
			<a href="profile.php?id=<?=$v1->id?>"><?php echo $useravatar;?></a>
		</td>
	  <td>
			<h4><a href="profile.php?id=<?=$v1->id?>"><?=$ususername?><a class="btn btn-danger botoesMensagem pull-right" href="create_message.php?id=<?=$v1->id?>">Message</a></a></h4>
			<p><?=$ususerbio?></p>
			<?php
					if (count($user_permissions[$count]) > 1)	{
						$groupName = implode (", ", $user_permissions[$count]);
					} elseif ($user_permissions[$count][0] == '') {
						$groupName = "User, Expert";
					} else {
						$groupName = $user_permissions[$count][0];
					}
			?>
			<p><b>Group(s):</b> <?=$groupName?></p>
		</td>
	</tr>
<?php $count++; } ?>
  </tbody>
</table>
	  </div>

      </div>
    </div>

    <!-- /.row -->
      </div>
    </div>
    <!-- footers -->
<?php require_once $abs_us_root.$us_url_root.'users/includes/page_footer.php'; // the final html footer copyright row + the external js calls ?>

    <!-- Place any per-page javascript here -->
<script src="js/search.js" charset="utf-8"></script>

<?php require_once $abs_us_root.$us_url_root.'users/includes/html_footer.php'; // currently just the closing /body and /html ?>
