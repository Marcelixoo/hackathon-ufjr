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

<?php if (!securePage($_SERVER['PHP_SELF'])){die();}?>
<?php

//dealing with if the user is logged in
if($user->isLoggedIn() || !$user->isLoggedIn() && !checkMenu(2,$user->data()->id)){
	if (($settings->site_offline==1) && (!in_array($user->data()->id, $master_account)) && ($currentPage != 'login.php') && ($currentPage != 'maintenance.php')){
		$user->logout();
		Redirect::to($us_url_root.'users/maintenance.php');
	}
}
$grav = get_gravatar(strtolower(trim($user->data()->email)));
$get_info_id = $user->data()->id;

/*Pegar a descrição do usuário no banco*/
$profile = $db->query("SELECT * FROM profiles WHERE user_id = ?",array($get_info_id));
$thisProfile = $profile->first();

/*Retorna os grupos ao qual o usuário pertence*/
$permissions = $db->query("SELECT permission_id FROM user_permission_matches WHERE user_id = ?",array($get_info_id));
$permission = $permissions->results();

$user_permissions = array();

foreach ($permission as $group) {
	$permissionProfiles = $db->query("SELECT name FROM permissions WHERE id = ?", array($group->permission_id));
	$permissionProfilesResults = $permissionProfiles->results();
	array_push($user_permissions, $permissionProfilesResults[0]->name);
}

if (count($user_permissions) > 1)	{
	$groupName = implode (", ", $user_permissions);
} else {
	$groupName = $user_permissions[0];
}

$raw = date_parse($user->data()->join_date);
$signupdate = $raw['month']."/".$raw['day']."/".$raw['year'];
$userdetails = fetchUserDetails(NULL, NULL, $get_info_id); //Fetch user details
 ?>

<div id="page-wrapper">
	<div class="container">
			<div class="row">
				<div class="col-xs-4 col-md-3">
					<p><img src="<?=$grav; ?>" class="img-thumbnail imagem" alt="Generic placeholder thumbnail"></p>
					<p><a href="user_settings.php" class="btn btn-primary">Dados Pessoais</a></p>
					<p><a class="btn btn-primary " href="profile.php?id=<?=$get_info_id;?>" role="button">Perfil Público</a></p>
					<p><a class="btn btn-primary " href="view_all_users.php" role="button">Mostrar todos</a></p>
				</div>
				<div class="col-xs-6 col-md-7">
						<button class = "btn btn-danger atualizarFeed">Clique para atualizar o feed</button>
						<hr>
						<a class="post" href="views/_join.php">
						<div class="row post">
							<center><h3>Título do post</h3></center>
							<div class="col-xs-4 col-md-3">
								<p><img src="images/hackathon.png" class="img-thumbnail posts" alt="Generic placeholder thumbnail"></p>
							</div>
							<div class="col-xs-8 col-md-9">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla iusto praesentium officiis non quo deleniti, accusantium esse omnis placeat dicta minima veritatis id, libero. Cumque fugit, inventore architecto veniam nemo.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita maiores ad optio repudiandae vel exercitationem sapiente sit incidunt rem ab itaque soluta animi doloribus qui ratione quibusdam dolor distinctio, ullam.</p>
								<p class="pull-right"><small>10/06/2022</small></p>
							</div>
							<hr>
						</div>
						</a>
						<a class="post">
						<div class="row post">
							<center><h3>Título do post</h3></center>
							<div class="col-xs-4 col-md-3">
								<p><img src="images/hackathon.png" class="img-thumbnail posts" alt="Generic placeholder thumbnail"></p>
							</div>
							<div class="col-xs-8 col-md-9">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla iusto praesentium officiis non quo deleniti, accusantium esse omnis placeat dicta minima veritatis id, libero. Cumque fugit, inventore architecto veniam nemo.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita maiores ad optio repudiandae vel exercitationem sapiente sit incidunt rem ab itaque soluta animi doloribus qui ratione quibusdam dolor distinctio, ullam.</p>
								<p class="pull-right"><small>10/06/2022</small></p>
							</div>
							<hr>
						</div>
						</a>
						<a class="post">
						<div class="row post">
							<center><h3>Título do post</h3></center>
							<div class="col-xs-4 col-md-3">
								<p><img src="images/hackathon.png" class="img-thumbnail posts" alt="Generic placeholder thumbnail"></p>
							</div>
							<div class="col-xs-8 col-md-9">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla iusto praesentium officiis non quo deleniti, accusantium esse omnis placeat dicta minima veritatis id, libero. Cumque fugit, inventore architecto veniam nemo.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita maiores ad optio repudiandae vel exercitationem sapiente sit incidunt rem ab itaque soluta animi doloribus qui ratione quibusdam dolor distinctio, ullam.</p>
								<p class="pull-right"><small>10/06/2022</small></p>
							</div>
							<hr>
						</div>
						</a>
						<a class="post">
						<div class="row post">
							<center><h3>Título do post</h3></center>
							<div class="col-xs-4 col-md-3">
								<p><img src="images/hackathon.png" class="img-thumbnail posts" alt="Generic placeholder thumbnail"></p>
							</div>
							<div class="col-xs-8 col-md-9">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla iusto praesentium officiis non quo deleniti, accusantium esse omnis placeat dicta minima veritatis id, libero. Cumque fugit, inventore architecto veniam nemo.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita maiores ad optio repudiandae vel exercitationem sapiente sit incidunt rem ab itaque soluta animi doloribus qui ratione quibusdam dolor distinctio, ullam.</p>
								<p class="pull-right"><small>10/06/2022</small></p>
							</div>
							<hr>
						</div>
						</a>
					</div>
				</div>
			</div>

	</div> <!-- /container -->

</div> <!-- /#page-wrapper -->

<!-- footers -->
<?php require_once $abs_us_root.$us_url_root.'users/includes/page_footer.php'; // the final html footer copyright row + the external js calls ?>

<!-- Place any per-page javascript here -->

<?php require_once $abs_us_root.$us_url_root.'users/includes/html_footer.php'; // currently just the closing /body and /html ?>
