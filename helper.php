
<?php
session_start();
function login($id)
	{


			$_SESSION['_login'] = $id;
		}
		function sec($file)
			{
				if(isset($_SESSION['_login'])){
					return 1;
				}else{
					//echo "string";
					redirectTo($file);
				}
			}

function logoutAdmin()
	{
		if(isset($_SESSION['_login'])){
			unset($_SESSION['_login']);
			unset($_SESSION['message']);
			redirectTo('admin.php');
		}else{
			//echo "string";
			redirectTo('admin.php');
		}
	}
	function logoutStudent()
		{
			if(isset($_SESSION['_login'])){
				unset($_SESSION['_login']);
				unset($_SESSION['message']);
				redirectTo('index.php');
			}else{
				//echo "string";
				redirectTo('index.php');
			}
			}
	function redirectTo($file){

		header('Location:'.$file );



	}
	function flash($level,$message)
		{
			$flash['level'] = $level;
			$flash['message'] = $message;
			$_SESSION['flash'] = $flash;
		}


 ?>
