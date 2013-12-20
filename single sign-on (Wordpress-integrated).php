function post_meta_who($post, $class)
{
	if (isset($post['who']))
	{				
		$this->output('<span class="' . $class . '-who">');
		$user = get_user_by( 'login', $post['who']['data'] );
		
		if (strlen(@$post['who']['prefix'])) $this->output('<span class="' . $class . '-who-pad">' . $post['who']['prefix'] . '</span>');
		if (isset($post['who']['data']))
		{
			$this->output('<span class="' . $class . '-who-data">' . $post['who']['data']. '</span>');
		}
		if (isset($post['who']['title'])) $this->output('<span class="' . $class . '-who-title">' . $post['who']['title'] . '</span>');
		if ($user->roles[0] == 'administrator')
		{
			$this->output(" (مدیر کل سایت)");
		}
		elseif ($user->roles[0] == 'subscriber')
		{
			$this->output(" (کاربر معمولی)");
		}
		elseif ($user->roles[0] == 'editor')
		{
			$this->output(" (ناظم)");
		}
		elseif ($user->roles[0] == 'contributor')
		{
			$this->output(" (متخصص)");
		}
		else
		{
			$this->output(" (کاربر معمولی)");
		}

		if (isset($post['who']['points']))
		{
			$post['who']['points']['prefix'] = '(' . $post['who']['points']['prefix'];
			$post['who']['points']['suffix'].= ')';
			$this->output_split($post['who']['points'], $class . '-who-points');
		}

		if (strlen(@$post['who']['suffix'])) $this->output('<span class="' . $class . '-who-pad">' . $post['who']['suffix'] . '</span>');
		$this->output('</span>');
	}
}
