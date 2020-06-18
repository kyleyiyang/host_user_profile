In theme editor: DirectoryEngine: Page Profile Page Template (page-profile.php), 
And DirectoryEngine: author.php
added:
$user_meta=get_userdata($user_ID); $user_roles=$user_meta->roles;
if (in_array("host", $user_roles)){
	$output = load_host_files();
												$total_togo = count($output[0]);
                                            printf(__('<span class="text">Files</span><span class="number">(%s)</span>',ET_DOMAIN), $total_togo);
											} else {…
